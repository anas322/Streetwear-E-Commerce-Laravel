<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Promo;
use App\Models\productSku;
use Termwind\Components\Dd;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function index(){
        return view('pages.customer.orders',['orders' => auth()->user()->orders()->latest()->get()]);
    }

    /**
     * The function stores the user's cart items as an order and calculates the total price including a
     * 5% tax.
     * 
     * @return a redirect to the 'orders.index' route with a success message.
     */
    public function store(){

        if(auth()->user()->address == null)
            return to_route('address.index')->with('error','Please Add Your Address First');

        //get the user's cart items
        $carts = auth()->user()->carts;

        //calculate the total price of the order
        $subTotal = 0;
        foreach($carts as $cart){
            $productSku = $cart->productSku;
            $price = $cart->product->sale != null ?
                $cart->product->sale->discounted_price :
                $cart->productSku->price;
            $subTotal +=  $price * $cart->quantity;
        }

        //apply the promo code if it exists
        $promoCodeId = request()->promo;
        if($promoCodeId != null){
            $subTotal = $this->ApplyPromoCode(intval($promoCodeId),$subTotal);
        }
        
        $tax = ($subTotal/100) * 5;
        $totalPrice = number_format($subTotal + $tax);

        //create the order
        $order = auth()->user()->orders()->create([
            'total_price' => $totalPrice,
        ]);

        $promoModel = Promo::findOrFail($promoCodeId);
        $promoModel->count += 1;
        $promoModel->save();

        if($promoModel->purchase_once){
            $promoModel->users()->attach(auth()->user()->id);
        }
        
        //attach the order to the cart items and delete the cart items
        foreach($carts as $cart){
            $productSku = $cart->productSku;
            $productSku->orders()->attach($order->id,[
                'quantity' => $cart->quantity,
            ]);
            
            $productSku->decrement('quantity',$cart->quantity);
            $cart->delete();
        }


        return to_route('orders.index')->with('success','Order Placed Successfully');
    }

    public function ApplyPromoCode($promoCodeId,$subTotal){
        $promoCode = Promo::findOrFail((int)$promoCodeId);
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
            if($subTotal < $promoCode->min_purchase){
                session()->flash('error','Invalid Promo Code');
                return;
            }
        }

        
        if($promoCode->type == 'order'){


            $subTotalCheck = $this->checkPrice($subTotal,$promoCode->value,$promoCode->type_of_value);

            if(!$subTotalCheck){
                return;
            }

            $subTotal = $subTotalCheck;

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

            $subTotal = $total;
        }

        // $this->totalPrice = number_format($this->subTotal + $this->tax,2);

        return $subTotal;
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

    public function show(Order $order){

         return view('pages.customer.single-order',
         [
             'order' => $order,
         ]);
    }

}
