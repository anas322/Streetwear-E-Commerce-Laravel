<?php

namespace App\Http\Livewire;

use App\Models\option;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\productSku;
use Illuminate\Database\Eloquent\Builder;

class Products extends Component
{
    protected $listeners = ['closeModal'];
    protected $queryString = ['cat'];

    public $cat;
    public $categoryModel;
    public $filters;
    
    public $products;
    public $options = [];
    
    public $minPrice = 0;
    public $maxPrice ;

    public $filterValues ;
    public $sortByValue = 'latest';
    public $aboveFilterToggle = false;
    
    public $productQV;

    public function updated(){
    $this->dispatchBrowserEvent('livewire:updated');
    }

    public function mount(){
        
        $this->categoryModel = Category::whereName($this->cat)->first();

        if($this->categoryModel){
            //get products by category
            $this->products = $this->categoryModel->products->filter(function ($product) {
                return $product->status == "Active";
            });
    
            //get all options related to this product
            $this->filters = option::whereIn('product_id' , $this->categoryModel->products->pluck('id'))->get(); 
            
            $this->getOptions();

            $this->maxPrice = productSku::whereIn('product_id', $this->products->pluck('id'))->get()->map(function ($productSku) {
                $product = $productSku->product;
                $sale = $product->sale;
                if ($sale && $sale->discounted_price < $productSku->price) {
                    return $sale->discounted_price;
                }
                return $productSku->price;
            })->max();
        }else{

            $this->products = Product::all()->filter(function ($product) {
                return $product->status == "Active";
            });
            
            //get all options 
            $this->filters = option::all(); 
            
            $this->getOptions();

        }

        $this->sortBy();
    }

    private function getOptions(){
        //get all possible option values 
        foreach ($this->filters as  $key => $option) {
            //key is the filter name and the value is the available options value
            $this->options[$this->filters[$key]->name] = array_merge($this->options[$this->filters[$key]->name] ?? [], $option->optionValues->pluck('name')->toArray());
        }
        // //get a the maximum product price
        if($this->products && $this->products->count() > 0){
            $this->maxPrice = $this->products->first()->with('sale')->get()->map(function($product) {
                if($product->sale) {
                    // dd($product->sale->discounted_price);
                    return $product->sale->discounted_price;
                } else {
                    return $product->productSkus()->first()->price;
                }
            })->max();
        }else{
            $this->maxPrice = 0;
        }

    }


    public function showModal($id){
        $this->productQV = $id;
    }

    public function closeModal(){
        $this->productQV = false;
    }


    public function updateSearchInput(){
        if($this->categoryModel){
            $this->products = $this->categoryModel->products()->where(function (Builder $query){

                $this->makeQuery($query);

            } )->get();
        }else{
            $this->products = Product::where(function (Builder $query){

                $this->makeQuery($query);

            } )->get();
        }
    }

    private function makeQuery($query){
      
        $query->whereRelation('productSkus', function (Builder $query) {
            // $query->whereBetween('price', [$this->minPrice, $this->maxPrice]);
            if ($this->minPrice || $this->maxPrice) {
                $query->where(function (Builder $query) {
                    $query->whereBetween('price', [$this->minPrice, $this->maxPrice]);
                    $query->orWhereHas('product', function (Builder $query) {
                        $query->whereHas('sale', function (Builder $query) {
                            $query->whereBetween('discounted_price', [$this->minPrice, $this->maxPrice]);
                        });
                    });
                });
            }
        });

        //set filter options
        if($this->filterValues){
            foreach($this->filterValues as $key => $singleFilterValue ){
                //if the property has a value
                if($singleFilterValue){
                    $query->whereRelation('options.optionValues', 'name',$singleFilterValue );
                }
            }
        }
    }

    public function sortBy(){
        switch($this->sortByValue){
            case 'latest':
                $this->products = $this->products->sortByDesc('created_at');
                break;
            case 'priceLowToHigh':
                $this->products = $this->products->sortBy(function ($product){
                    $price = null;
                    $sale = $product->sale;
                    if($sale){
                        $price = $sale->discounted_price;
                    } else {
                        $price = $product->productSkus()->first()->price;
                    }
                    return $price;
                });
                break;

            case 'priceHighToLow':
                $this->products = $this->products->sortByDesc(function ($product){
                    $price = null;
                    $sale = $product->sale;
                    if($sale){
                        $price = $sale->discounted_price;
                    } else {
                        $price = $product->productSkus()->first()->price;
                    }
                    return $price;
                });
                break;
            case 'onSale':
                $this->products = $this->products->filter(function ($product){
                    return $product->sale;
                });
                break;
        }
    }

    public function render()
    {
        return view('livewire.products');
    }
}
