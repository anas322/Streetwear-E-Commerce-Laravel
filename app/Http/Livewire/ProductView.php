<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductView extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.product-view',[
            'products' => $this->product,
        ]);
    }
}
