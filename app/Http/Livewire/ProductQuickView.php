<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductQuickView extends Component
{
    public $productId;

    public $userOptions = [];
    
    public function dehydrate(){
        $this->dispatchBrowserEvent('contentChanged');
    }

    public function addToCart(){
        //key is the option name and the value is the option value 


    }

    public function buyNow(){
        dd($this->userOptions);
    }

    public function render()
    {
        return view('livewire.product-quick-view',[
            'product' => Product::findOrFail($this->productId)
        ]);
    }
}
