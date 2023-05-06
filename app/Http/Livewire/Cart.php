<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart as CartModel;

class Cart extends Component
{
    public $cartItems = [];
    public $quantity ;
    
    public function mount(){
        $this->cartItems = CartModel::where('user_id',auth()->id())->get();

        if($this->cartItems){
            foreach($this->cartItems as $item){
                $this->quantity[$item->id] = $item->quantity;
            }
        }
    }


    public function removeItem($itemId){
        CartModel::where('id',$itemId)->delete();
        $this->cartItems = CartModel::where('user_id',auth()->id())->get();
    }

    public function incrementQnt($itemId){
        $cartItem = CartModel::where('id',$itemId)->first();

        if($cartItem->productSku->quantity <= $this->quantity[$itemId]){
            return;
        }
        
        $cartItem->quantity += 1;
        $cartItem->save();
        // $cartItem->productSku->quantity -= 1;
        // $cartItem->productSku->save();
        $this->quantity[$itemId] = ($this->quantity[$itemId] ?? 1) + 1;
        $this->mount();
    }

    public function decrementQnt($itemId){
        $cartItem = CartModel::where('id',$itemId)->first();

        if($cartItem->quantity <= 1){
            return;
        }
        
        $cartItem->quantity -= 1;
        $cartItem->save();
        // $cartItem->productSku->quantity += 1;
        // $cartItem->productSku->save();
        $this->quantity[$itemId] = ($this->quantity[$itemId] ?? 1) - 1;
        $this->mount();
    }


    public function render()
    {
        return view('livewire.cart');
    }
}
