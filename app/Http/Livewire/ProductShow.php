<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Arr;

class ProductShow extends Component
{
    public $productId;

    public $userOptions;

    public $optionValuesArray = [];
    public $optionMatrix = [];

    public $productSku;
    public $quantity ;
    public $price ;
    
    public function dehydrate(){
        $this->dispatchBrowserEvent('livewire:updated');
    }

    public function mount(){
        $product = Product::findOrFail($this->productId);
        if($product->options && $product->options->count()){
            foreach ($product->options as $option ) {
                $this->userOptions[$option->name] = $option->optionValues[0]->id;
            }   
            
            foreach ($product->options as $option) {
                array_push($this->optionValuesArray,$option->optionValues->pluck('id')->toArray());
            }
            
            $this->optionMatrix = Arr::crossJoin(...$this->optionValuesArray);
            
            //the idea here is that i want to get the sku_id of the the use selected option
            //get all product sku values grouped by the sku_id
            $productAllSkus = $product->productSkusValues->groupBy('product_sku_id');
            
            //get the right columns that has the same sku_id and then get it's sku 
            $this->productSku = $productAllSkus->first(function ($values, $keys){
                $res = $values->whereIn('option_value_id',$this->optionMatrix[0]);
                return $res->count() ===  $values->count();
            })->first()->productSku;

            $this->quantity =  $this->productSku->quantity ; 
            $this->price =  number_format($this->productSku->price,2,'.','');
        }else{

            $this->quantity =  $product->productSkus->first()->quantity ; 
            $this->price = $product->sale != null ?
                number_format($product->sale->discounted_price,2,'.','')
                :
                number_format($product->productSkus->first()->price,2,'.','');
            $this->productSku = $product->productSkus->first();
        }
           
    }

    //trigger when the userOptions is updated
    public function updatedUserOptions(){
        $product = Product::findOrFail($this->productId);
        [$key,$option_value_ids] = Arr::divide($this->userOptions);
            
        //the idea here is that i want to get the sku_id of the the use selected option
        //get all product sku values grouped by the sku_id
        $productAllSkus = $product->productSkusValues->groupBy('product_sku_id');
        
        //get the right columns that has the same sku_id and then get it's sku 
        $this->productSku = $productAllSkus->first(function ($values, $keys) use($option_value_ids){
            $res = $values->whereIn('option_value_id',$option_value_ids);
            return $res->count() ===  $values->count();
        })->first()->productSku;

        $this->quantity = $this->productSku->quantity;
        $this->price = $this->productSku->price;

    }

    public function addToCart(){
        //key is the option name and the value is the option value
        if(auth()->id()){
            if($this->productSku->quantity >= $this->quantity && $this->productSku->quantity != 0){
                $product = Product::findOrFail($this->productId);
                $product->carts()->create([
                    'user_id' => auth()->user()->id,
                    'product_sku_id' => $this->productSku->id,
                    'price' => $this->price,
                ]);
    
                session()->flash('success','Product added to cart successfully');
                $this->emit('productAddedToCart');
                
                return redirect()->route('cart');
            }else{
                session()->flash('error','Product is out of stock');
            }

        }else{
            return redirect()->route('login');
        }
    }

    public function buyNow(){
        $this->addToCart();
        return redirect()->route('cart');
    }

    public function render()
    {
        return view('livewire.product-show',[
            'product' => Product::findOrFail($this->productId)
        ]);
    }
}
