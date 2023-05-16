<?php

namespace App\Http\Livewire\Admin\Promo;

use App\Models\Product;
use App\Models\Promo;
use Livewire\Component;

class Create extends Component
{   
    public $toggleModal = false;

    public $products;
    public $selectedProducts =[];
    public $selectedProductIds =[];

    public $name;
    public $type ='product';
    public $value;
    public $value_type_state = false;
    public $status = 'Active';
    public $min_purchase_state = false;
    public $min_purchase_value = 0;
    public $purchase_once = false;
    public $must_login = false;
    public $max_usage_state = false;
    public $max_usage = 0;
    public $start_date;
    public $end_date_state;
    public $end_date;

    protected $rules = [
        'name' => 'required|string',
        'type' => 'required|string',
        'value' => 'required|integer',
        'status' => 'required|string',
        'purchase_once' => 'required',
        'must_login' => 'required',
        
    ];

    public function setValidatation(){
        if($this->min_purchase_state == true){
            $this->rules['min_purchase_value'] = 'required|integer|min:1';
        }
        if($this->max_usage_state == true){
            $this->rules['max_usage'] = 'required|integer|min:1';
        }
        if($this->end_date_state == true){
            $this->rules['end_date'] = 'required|date|after:start_date|after_or_equal:today';
            $this->rules['start_date'] = 'required|date|before:end_date|after_or_equal:today';
        }else{
            $this->rules['start_date'] = 'required|date|after_or_equal:today';
        }
    }

    public function dehydrate(){
        $this->dispatchBrowserEvent('reinit-flowbite');
    }

    public function mount() {
        $this->selectedProductIds = collect([]);
        $this->products = Product::all()->filter(function($product){
        return $product->status == 'Active';
        });

    }

    public function toggleProductListOfIds($id)
    {
        if ($this->selectedProductIds->contains($id)) {

            $this->selectedProductIds = $this->selectedProductIds->filter(function ($value, $key) use ($id) {
                return $value != $id;
            });
        } else {
            $this->selectedProductIds->push($id);
        }   

    }

    public function deleteProductFromProductList($id){
        $this->toggleProductListOfIds($id);
        $this->AddToSelectedProducts();
    }

    
    public function AddToSelectedProducts(){
        $this->toggleModal = false;
        $this->selectedProducts = $this->products->whereIn('id',$this->selectedProductIds);
    }

    public function isProductSelected($id){
        return $this->selectedProductIds->contains($id);
    }
    
    

    public function submit(){

        if($this->type == 'product' && $this->selectedProductIds->count() == 0){
            session()->flash('productList', 'Please select at least one product.');
            return;
        }   
        $this->setValidatation();
        $this->validate();

        $promo = Promo::create([
            'name' => trim($this->name),
            'type' => $this->type,
            'value' => $this->value,
            'type_of_value' => $this->value_type_state,
            'min_purchase' => $this->min_purchase_value,
            'purchase_once' => $this->purchase_once,
            'must_login' => $this->must_login,
            'max_usage' => $this->max_usage,
            'status' => $this->status,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        if($this->type == 'product'){
            $promo->products()->attach($this->selectedProductIds);
        }

        session()->flash('success', 'Promo created successfully.');

        return redirect()->route('admin.promo.index');
    }

    public function render()
    {
        return view('livewire.admin.promo.create');
    }
}
