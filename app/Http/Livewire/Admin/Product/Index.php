<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $search = '';
    
    public function render()
    {
        return view('livewire.admin.product.index',[
            'products' => Product::where('name','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
