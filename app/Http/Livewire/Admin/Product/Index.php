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

     public function dehydrate()
    {
        $this->dispatchBrowserEvent('reinit-flowbite');
    }

    public function delete($id)
    {   
        $productSearch = Product::whereHas('productSkus.orders')->find($id);
        
        if($productSearch){
            session()->flash('error','This product cannot be deleted because it has orders');
            return;
        }else{
            $this->product = Product::find($id);
    
            $images = $this->product->productImages;
            foreach ($images as $imageModel ) {
                 $imageModel->delete();
                Storage::delete($imageModel->image);
            }   
            
            $this->product->delete();
            session()->flash('delete','This record has been deleted successfully');
        }
    }
    
    public function render()
    {
        return view('livewire.admin.product.index',[
            'products' => Product::where('name','like','%'.trim($this->search).'%')->paginate(10),
        ]);
    }
}
