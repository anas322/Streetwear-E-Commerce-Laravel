<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\productSku;
use Livewire\Component;
use Illuminate\Support\Arr;

class ProductQuickView extends Component
{
    public $productId;

    public $userOptions;

    public $optionValuesArray = [];
    public $optionMatrix = [];

    public $productSku;
    public $quantity ;
    public $price ;
    
    public function updated(){
    $this->dispatchBrowserEvent('livewire:updated');
    }

    public function dehydrate(){
        $this->dispatchBrowserEvent('livewire:updated');
    }

    public function mount(){
        $product = Product::findOrFail($this->productId);
        
        if($product->options && $product->options->count()){
           
            //get all product sku values grouped by the sku_id and filter the ones that has quantity greater than 0
            $productAllSkus = $product->productSkusValues->groupBy('product_sku_id')->filter(function($value,$key){
               $sku = productSku::find($key);
                return $sku->quantity > 0;
            });
            

            //check if there is any sku then get the first sku cuz the two skus are the same  
            if($productAllSkus->count() > 0){
                $this->productSku = $productAllSkus->first()->first()->productSku;
    
                $this->productSku->productSkuValues->map(function($value){
                    $this->userOptions[$value->option->name] = $value->optionValue->id;
                });

                $this->quantity =  $this->productSku->quantity; 
                $this->price =  number_format($this->productSku->price) ;
            }else
            {
                foreach ($product->options as $option ) {
                    $this->userOptions[$option->name] = $option->optionValues[0]->id;
                }   
                $this->quantity = 0;
                $this->price = $product->productSkus->first()->price;
            }

        }else{
            $this->quantity =  $product->productSkus->first()->quantity ;
            $this->price = $product->sale != null ?
                number_format($product->sale->discounted_price,2,'.','')
                :
                number_format($product->productSkus->first()->price,2,'.','');
            
            $this->productSku = $product->productSkus->first();
        }
            
    }

    /**
     * The function updates the user options for a product by finding the corresponding product SKU
     * based on the selected option values.
     */
    //trigger when the userOptions is updated
    public function updatedUserOptions(){
        $product = Product::findOrFail($this->productId);
        [$key,$option_value_ids] = Arr::divide($this->userOptions);

        //get all product sku values grouped by the sku_id
        $productAllSkus = $product->productSkusValues->groupBy('product_sku_id');
        
        //get the right columns that has the same sku_id and then get it's sku 
        $this->productSku = $productAllSkus->first(function ($values, $keys) use($option_value_ids){
            $res = $values->whereIn('option_value_id',$option_value_ids);
            return $res->count() ===  $values->count();
        })->first()->productSku;

        $this->quantity = $this->productSku->quantity ;
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
        return view('livewire.product-quick-view',[
            'product' => Product::findOrFail($this->productId)
        ]);
    }
}
