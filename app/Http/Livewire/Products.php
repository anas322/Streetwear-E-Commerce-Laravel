<?php

namespace App\Http\Livewire;

use App\Models\option;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
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
    public $sortByValue ;
    
    public $productQV;

    public function boot(){
        $this->dispatchBrowserEvent('contentChanged');
    }

    public function dehydrate(){
        $this->dispatchBrowserEvent('contentChanged');
    }

    // public function update(){
    //     $this->dispatchBrowserEvent('contentChanged');
    // }

    public function mount(){
        
        $this->categoryModel = Category::whereName($this->cat)->first();

        if($this->categoryModel){
            //get products by category
            $this->products = $this->categoryModel->products;
    
            //get all options related to this product
            $this->filters = option::whereIn('product_id' , $this->categoryModel->products->pluck('id'))->get(); 
            
            $this->getOptions();

        }else{

            $this->products = Product::all();
            
            //get all options 
            $this->filters = option::all(); 
            
            $this->getOptions();
        }

    }

    private function getOptions(){
        //get all possible option values 
        foreach ($this->filters as  $key => $option) {
            //key is the filter name and the value is the available options value
            $this->options[$this->filters[$key]->name] = $option->optionValues->pluck('name');
        }
        
        //get a the maximum product price
        $this->maxPrice = $this->products->max('price');
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
    //get the products between min and max price
        $query->whereBetween('price',[$this->minPrice,$this->maxPrice]);

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
                $this->products = $this->products->sortBy('price');
                break;

            case 'priceHighToLow':
                $this->products = $this->products->sortByDesc('price');
                break;

        }
    }

    public function render()
    {
        return view('livewire.products');
    }
}
