<?php

namespace App\Http\Livewire\Admin\Promo;

use App\Models\Promo;

trait HasItems
{

    use HasModal;
    public $selectedProductIds;


    public function toggleProductListOfIds($id)
    {
        $this->selectedProductIds->contains($id) ? $this->selectedProductIds = $this->selectedProductIds->filter(function ($value) use ($id) {
            return $value != $id;
        }) : $this->selectedProductIds->push($id);
    }

    public function deleteProductFromProductList($id)
    {
        $this->toggleProductListOfIds($id);
        $this->AddToSelectedProducts();
    }


    public function AddToSelectedProducts()
    {
        $this->closeModal();
        $this->selectedProducts = $this->products->whereIn('id', $this->selectedProductIds);
    }

    public function isProductSelected($id)
    {
        return $this->selectedProductIds->contains($id);
    }

    public function attachProducts(Promo $promo)
    {
        $promo->products()->attach($this->selectedProductIds);
    }
}
