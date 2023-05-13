<?php

namespace App\Http\Livewire\Admin\Promo;

use App\Models\Promo;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Carbon ;

class Edit extends Component
{   
    public  Promo $promo;
    public $toggleModal = false;

    public $products;
    public $selectedProducts =[];
    public $selectedProductIds =[];

    public $name;
    public $type;
    public $value;
    public $value_type_state ;
    public $status ;
    public $min_purchase_state ;
    public $min_purchase_value ;
    public $purchase_once ;
    public $must_login ;
    public $max_usage_state ;
    public $max_usage ;
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

    public function mount(){
        $this->name = $this->promo->name;
        $this->type = $this->promo->type;
        $this->value = $this->promo->value;
        $this->value_type_state = $this->promo->type_of_value;
        $this->status = $this->promo->status;
        $this->min_purchase_state = $this->promo->min_purchase > 0;
        $this->min_purchase_value = $this->promo->min_purchase;
        $this->purchase_once = $this->promo->purchase_once;
        $this->must_login = $this->promo->must_login;
        $this->max_usage_state = $this->promo->max_usage > 0 ;
        $this->max_usage = $this->promo->max_usage;
        $this->start_date = Carbon::parse($this->promo->start_date)->format('Y-m-d');
        $this->end_date_state = $this->promo->end_date;
        $this->end_date = Carbon::parse($this->promo->end_date)->format('Y-m-d');

        $this->selectedProductIds = $this->promo->products->pluck('id');

        $this->products = Product::all()->filter(function($product){
            return $product->status == 'Active';
        });

        $this->AddToSelectedProducts();

    }
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

        $this->promo->update([
            'name' => trim($this->name),
            'type' => $this->type,
            'value' => $this->value,
            'type_of_value' => $this->value_type_state,
            'min_purchase' => $this->min_purchase_state ? $this->min_purchase_value : 0,
            'purchase_once' => $this->purchase_once,
            'must_login' => $this->must_login,
            'max_usage' => $this->max_usage_state ? $this->max_usage : 0,
            'status' => $this->status,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date_state ? $this->end_date : null,
        ]);

        if($this->type == 'product'){
            $this->promo->products()->sync($this->selectedProductIds);
        }

        session()->flash('success', 'Promo modified successfully.');

        return redirect()->route('admin.promo.index');
    }
    public function render()
    {
        return view('livewire.admin.promo.edit');
    }
}
