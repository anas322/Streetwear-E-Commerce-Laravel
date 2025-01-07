<?php

namespace App\Http\Livewire\Admin\Promo;

use App\Models\Product;
use App\Models\Promo;
use Livewire\Component;

class Create extends Component
{
    use HasItems, PromoUtils;

    public $products;
    public $selectedProducts = [];

    public $name;
    public $type = 'product';
    public $value;
    public $value_type_state = false; // 1=Percentage,0=Fixed Amount
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


    public function mount()
    {
        $this->selectedProductIds = collect([]);
        $this->products = Product::all()->filter(function ($product) {
            return $product->status == 'Active';
        });
    }


    public function submit()
    {

        if ($this->type == 'product' && $this->selectedProductIds->count() == 0) {
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

        if ($this->type == 'product') {
            $this->attachProducts($promo);
        }

        session()->flash('success', 'Promo created successfully.');

        return redirect()->route('admin.promo.index');
    }

    public function render()
    {
        return view('livewire.admin.promo.create');
    }
}
