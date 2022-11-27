<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public $categories;

    public $category;
    public $name;
    public $slug;
    public $description;
    public $price;
    public $quantity;
    public $status;
    public $images = [];

    public $meta_title;
    public $meta_keyword;
    public $meta_description;

    public function mount(){
        $this->categories = Category::all();
    }


    protected $rules = [
        "name"             => ['required','string'],
        "slug"             => ['required','string','max:255'],
        "description"      => ['required','string'],
        "price"            => ['required','integer','min:0'],
        "quantity"         => ['required','integer','min:0'],
        "status"           => ['required','in:Active,Draft'],
        "images"           => ['required'],
    
        "meta_title"       => ['nullable','string'],
        "meta_keyword"     => ['nullable','string'],
        "meta_description" => ['nullable','string']
    ];

    // public function selectAsThumbnail($image){
    //     dd($image);
    // }
    public function submit()
    {
        $validatedData = $this->validate();
        
        dd($validatedData);
        Product::create($validatedData);
        
        session()->flash('success','Product has been created successfully');
    }


    public function render()
    {
        return view('livewire.admin.product.create');
    }
}
