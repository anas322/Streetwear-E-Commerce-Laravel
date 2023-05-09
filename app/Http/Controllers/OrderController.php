<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\productSku;
use Termwind\Components\Dd;

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
            $productSku = productSku::where('id',$cart->product_sku_id)->first();
            $price = $cart->product->sale != null ?
                $cart->product->sale->discounted_price :
                $cart->productSku->first()->price;
            $subTotal +=  $price * $cart->quantity;
        }
        $totalPrice = $subTotal + number_format(($subTotal/100) * 5,2);

        //create the order
        $order = auth()->user()->orders()->create([
            'total_price' => $totalPrice,
        ]);
        
        //attach the order to the cart items and delete the cart items
        foreach($carts as $cart){
            $productSku = productSku::where('id',$cart->product_sku_id)->first();
            $productSku->orders()->attach($order->id,[
                'quantity' => $cart->quantity,
            ]);
            
            $productSku->decrement('quantity',$cart->quantity);
            $cart->delete();
        }


        return to_route('orders.index')->with('success','Order Placed Successfully');
    }

    public function show(Order $order){

         return view('pages.customer.single-order',
         [
             'order' => $order,
         ]);
    }

}
