<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchInput extends Component
{
    public $search = '';

    public $modal = false;

    public function render()
    {
        return view('livewire.search-input',[
            'products' => Product::where('name','like','%'.trim($this->search).'%')->limit(8)->get(),
        ]);
    }
}
