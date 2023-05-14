<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCount extends Component
{
    public $numberOfItemsInCart;
    protected $listeners = ['productAddedToCart' => 'updateCart'];


    public function mount()
    {
        $this->numberOfItemsInCart = auth()->user()->carts->count();
    }

    public function updateCart()
    {
        $this->numberOfItemsInCart = auth()->user()->carts->count();
    }

    public function render()
    {
        return view('livewire.cart-count');
    }
}
