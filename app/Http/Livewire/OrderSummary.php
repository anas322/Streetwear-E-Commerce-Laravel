<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Promo;
use Livewire\Component;
use Illuminate\Support\Carbon;

class OrderSummary extends Component
{
    public $cart = [];
    public $subTotal;
    public $tax ;
    public $totalPrice;
    public $oldTotalPrice;
    public $order;

    public $promoCode = '';
    public $promoId;
    public $promoCodeButtonState = false;

    public function mount(){
        if($this->order){
            $this->subTotal = $this->order->total_price - ($this->order->total_price/100) * 5;
            $this->tax = number_format(($this->order->total_price/100) * 5,2);
            $this->totalPrice = $this->order->total_price;
            return;
        }

        $total = 0;
        foreach($this->cart as $item){

            if($item->product->sale != null  ){
                $total += $item->product->sale->discounted_price * $item->quantity;
                continue;
            }

            $productSku = $item->productSku;
            $total +=  $productSku->price * $item->quantity;
        }

        $this->subTotal = $total;
        $this->tax = ($this->subTotal/100) * 5;
        $this->totalPrice = number_format($this->subTotal + $this->tax,2);
    }

    public function ApplyPromoCode(){
        $this->validate([
            'promoCode' => 'required'
        ]);

        $promoCode = Promo::where('name',$this->promoCode)->first();

        if(!$promoCode || $promoCode->status == 'Draft'){
            session()->flash('error','Invalid Promo Code');
            return;
        }

        
        if($promoCode->end_date == null){
            $promoCode->end_date = $promoCode->start_date;
        }
        
        //check if promo code is expired
        if(!now()->betweenIncluded(Carbon::parse($promoCode->start_date)->toDateString(),Carbon::parse($promoCode->end_date)->toDateString()) && !now()->isSameDay(Carbon::parse($promoCode->end_date)->toDateString())){
            session()->flash('error','Invalid Promo Code');
            return;
        }


        if($promoCode->purchase_once){
            if(!auth()->check()){
                session()->flash('error','Invalid Promo Code');
                return;
            }

            if($promoCode->users->contains(auth()->user()->id)){
                session()->flash('error','Invalid Promo Code');
                return;
            }
        }

        //check if promo code is used more than max usage
        if($promoCode->count >= $promoCode->max_usage && $promoCode->max_usage != 0){
            session()->flash('error','Invalid Promo Code');
            return;
        }

        //check if user have to login to use promo code
        if($promoCode->must_login){
            if(!auth()->check()){
                session()->flash('error','Invalid Promo Code');
                return;
            }
        }

        if($promoCode->min_purchase > 0){
            if($this->subTotal < $promoCode->min_purchase){
                session()->flash('error','Invalid Promo Code');
                return;
            }
        }

        
        if($promoCode->type == 'order'){

            //call mount function to reset the values
            $this->mount();

            $subTotal = $this->checkPrice($this->subTotal,$promoCode->value,$promoCode->type_of_value);

            if(!$subTotal){
                return;
            }

            $this->subTotal = $subTotal;
            $this->promoId = $promoCode->id;

        }elseif($promoCode->type == 'product'){
            
            $cart = Cart::where('user_id',auth()->user()->id)->get();

            $total = 0;
            foreach($cart as $item){
                $productSku = $item->productSku;

                if($item->product->sale != null  ){
                    
                    $price = $item->product->sale->discounted_price;
                    
                    if($promoCode->products->contains($productSku->product_id)){

                        $price = $this->checkPrice($price,$promoCode->value,$promoCode->type_of_value);
                        if(!$price){
                            continue;
                        }
                    $total += $price * $item->quantity;
                    continue;
                    }

                    $total += $item->product->sale->discounted_price * $item->quantity;
                }else{
                    if($promoCode->products->contains($productSku->product_id)){
                        $price = $this->checkPrice($productSku->price,$promoCode->value,$promoCode->type_of_value);
                        if(!$price){
                            continue;
                        }
                        $total += $price * $item->quantity;
                        continue;
                    }
    
                    $total += $productSku->price * $item->quantity;
                }
                
            }

            $this->subTotal = $total;
            $this->promoId = $promoCode->id;
        }

        $this->oldTotalPrice = $this->totalPrice;
        $this->totalPrice = number_format($this->subTotal + $this->tax);
        $this->promoCodeButtonState = true;
    }

    private function checkPrice ($price,$value , $type){

        //true means percentage and false means fixed
        if($type){
            if($price < ($price/100) * $value){
                session()->flash('error','Invalid Promo Code');
                return;
            }
            $price = $price - ($price/100) * $value;
        }else{
            if($price < $value){
                session()->flash('error','Invalid Promo Code');
                return;
            }
            $price = $price - $value;
        }

        return $price;
    }

    public function removePromoCode(){
        $this->mount();
        $this->promoCodeButtonState = false;
        $this->oldTotalPrice = null;
    }

    public function render()
    {
        return view('livewire.order-summary');
    }
}
