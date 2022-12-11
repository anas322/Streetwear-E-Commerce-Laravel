<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\option;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;

class Products extends Component
{
    public $cat;
    protected $queryString = ['cat'];

    public $products;
    public $options = [];
    
    public $minPrice = 0;
    public $maxPrice ;

    public $color;
    
    public $productQV;

    public function dehydrate(){
        $this->dispatchBrowserEvent('contentChanged');
    }

    public function mount(){
        
        $cat = Category::whereName($this->cat)->first();

        if($cat){
            //get products by category
            $this->products = $cat->products;
    
            //get all options related to this product
            $this->filters = option::whereIn('product_id' , $cat->products->pluck('id'))->get(); 
            //get all possible option values 
            foreach ($this->filters as  $key => $option) {
                //key is the filter name and the value is the available options value
                $this->options[$this->filters[$key]->name] = $option->optionValues->pluck('name');
            }
    
            //get a the maximum product price
            $this->maxPrice = $this->products->max('price');
        }else{
            $this->products = Product::all();

            //get all options 
            $this->filters = option::all(); 
            //get all possible option values 
            foreach ($this->filters as  $key => $option) {
                //key is the filter name and the value is the available options value
                $this->options[$this->filters[$key]->name] = $option->optionValues->pluck('name');
            }
        }

        }

    protected $listeners = ['closeModal'];

    public function showModal($id){
        $this->productQV = $id;
    }

    public function closeModal(){
        $this->productQV = false;
    }


    public function updateSearchInput($categoryName=''){
        $this->products = Product::where(function (Builder $query){
            $query->whereBetween('price',[$this->minPrice,$this->maxPrice]);
            
        } )->get();
    }

    public function render()
    {
        return view('livewire.products');
    }
}
