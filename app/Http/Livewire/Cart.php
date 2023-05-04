<?php

namespace App\Http\Livewire;

use App\Models\Cart as CartModel;
use App\Models\productSku;
use Livewire\Component;

class Cart extends Component
{
    public $cartItems = [];
    public function mount(){
        $this->cartItems = CartModel::where('user_id',auth()->id())->get();
    }


    public function removeItem($itemId){
        CartModel::where('id',$itemId)->delete();
        $this->cartItems = CartModel::where('user_id',auth()->id())->get();
    }

    public function incrementQnt($itemId){
        $cartItem = CartModel::where('id',$itemId)->first();

        if($cartItem->productSku->quantity <= 0){
            return;
        }
        
        $cartItem->quantity += 1;
        $cartItem->save();
        $cartItem->productSku->quantity -= 1;
        $cartItem->productSku->save();
        $this->mount();
    }

    public function decrementQnt($itemId){
        $cartItem = CartModel::where('id',$itemId)->first();

        if($cartItem->quantity <= 1){
            return;
        }
        
        $cartItem->quantity -= 1;
        $cartItem->save();
        $cartItem->productSku->quantity += 1;
        $cartItem->productSku->save();
        $this->mount();
    }


    public function render()
    {
        return view('livewire.cart');
    }
}
