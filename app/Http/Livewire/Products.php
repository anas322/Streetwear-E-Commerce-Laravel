<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

class Products extends Component
{
    public $products;

    public $productQV;

    public $minPrice = 0;
    public $maxPrice ;


    public function mount(){
        $this->products = Product::all();
        $this->maxPrice = Product::max('price');
    }

    protected $listeners = ['closeModal'];

    public function showModal($id){
        $this->productQV = $id;
    }

    public function closeModal(){
        $this->productQV = false;
    }

      public function dehydrate(){
        $this->dispatchBrowserEvent('contentChanged');
    }

    public function updateSearchInput(){
        $this->products = Product::where(function (Builder $query){
            $query->whereBetween('price',[$this->minPrice,$this->maxPrice]);
        } )->get();
    }

    public function render()
    {
        return view('livewire.products');
    }
}
