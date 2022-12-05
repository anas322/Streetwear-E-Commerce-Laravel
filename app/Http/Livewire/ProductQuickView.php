<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductQuickView extends Component
{
    public $productId;

    
    public function dehydrate(){
        $this->dispatchBrowserEvent('contentChanged');
    }

    public function render()
    {
        return view('livewire.product-quick-view',[
            'product' => Product::findOrFail($this->productId)
        ]);
    }
}
