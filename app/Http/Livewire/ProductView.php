<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductView extends Component
{
    public $products;
    public $productQV;

      protected $listeners = ['closeModal'];

    public function showModal($id){
        $this->productQV = $id;
    }

    public function closeModal(){
        $this->productQV = false;
    }

      public function dehydrate(){
        $this->dispatchBrowserEvent('contentChanged');
    }

    public function render()
    {
        return view('livewire.product-view');
    }
}
