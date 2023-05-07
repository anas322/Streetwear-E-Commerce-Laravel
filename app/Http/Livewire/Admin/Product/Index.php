<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithPagination;
    
    public $product;

    public $search = '';
    public $showDeleteModal = false;

    public function deleteModal(Product $product){
        $this->showDeleteModal = true;
        $this->product = $product;
    }

    public function delete()
    {   
        $images = $this->product->productImages;
        foreach ($images as $imageModel ) {
             $imageModel->delete();
            Storage::delete($imageModel->image);
        }   
        
        $this->product->delete();
        $this->reset(['showDeleteModal','product']);
        session()->flash('success','This record has been deleted successfully');
    }
    
    public function render()
    {
        return view('livewire.admin.product.index',[
            'products' => Product::where('name','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
