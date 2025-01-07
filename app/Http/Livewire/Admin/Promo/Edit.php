<?php

namespace App\Http\Livewire\Admin\Promo;

use App\Models\Promo;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Carbon;

class Edit extends Component
{
    use HasItems, PromoUtils;
    public  Promo $promo;

    public $products;
    public $selectedProducts = [];

    public $name;
    public $type;
    public $value;
    public $value_type_state;
    public $status;
    public $min_purchase_state;
    public $min_purchase_value;
    public $purchase_once;
    public $must_login;
    public $max_usage_state;
    public $max_usage;
    public $start_date;
    public $end_date_state;
    public $end_date;

    public function mount()
    {
        $this->hydrateForm();
    }


    private function hydrateForm()
    {
        $this->name = $this->promo->name;
        $this->type = $this->promo->type;
        $this->value = $this->promo->value;
        $this->value_type_state = $this->promo->type_of_value;
        $this->status = $this->promo->status;
        $this->min_purchase_state = $this->promo->min_purchase > 0;
        $this->min_purchase_value = $this->promo->min_purchase;
        $this->purchase_once = $this->promo->purchase_once;
        $this->must_login = $this->promo->must_login;
        $this->max_usage_state = $this->promo->max_usage > 0;
        $this->max_usage = $this->promo->max_usage;
        $this->start_date = Carbon::parse($this->promo->start_date)->format('Y-m-d');
        $this->end_date_state = $this->promo->end_date;
        $this->end_date = Carbon::parse($this->promo->end_date)->format('Y-m-d');

        $this->selectedProductIds = $this->promo->products->pluck('id');

        $this->products = Product::all()->filter(function ($product) {
            return $product->status == 'Active';
        });

        $this->AddToSelectedProducts();
    }



    public function submit()
    {

        if ($this->type == 'product' && $this->selectedProductIds->count() == 0) {
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

        if ($this->type == 'product') {
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
