<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Color;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    
    public $categories;
    public $product;
    public $load_colors;

    public $categoryId;
    public $name;
    // public $slug;
    public $description;
    public $price;
    public $quantity;
    public $status;
    public $images = [];
    // public $colors = [];

    public $meta_title;
    public $meta_keyword;
    public $meta_description;

    public $error;

    public function mount(Product $product){
        $this->categories = Category::all();
        $this->load_colors = Color::all();
        $this->product = $product;

        $this->categoryId = $product->category_id;
        $this->name = $product->name;
        // $this->slug = $product->slug;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->quantity = $product->quantity;
        $this->status = $product->status == 1 ? 'Active' :'Draft';
        // $this->colors = $this->product->colors->pluck('id')->toArray();
      

        foreach ($product->productImages as $productImage) {
            /*$image = base64_encode(Storage::get($productImage->image));// your base64 encoded
                
            $image = str_replace('data:image/jpg;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $name =  pathinfo($productImage->image, PATHINFO_FILENAME);
            $imageName = $name . '.'.'jpg';
            $finalName = \File::put(storage_path(). '/app/public/products/' . $imageName, base64_decode($image));
                array_push($this->images,'products/' .$imageName);*/

            array_push($this->images,$productImage->image);
        }
        $this->meta_title = $product->meta_title;
        $this->meta_keyword = $product->meta_keyword;
        $this->meta_description = $product->meta_description;
    }

    protected $rules = [
        "categoryId"       => ['required','integer'], 
        "name"             => ['required','string'],
        // "slug"             => ['required','string','max:255'],
        "description"      => ['required','string'],
        "price"            => ['required','integer','min:0'],
        "quantity"         => ['required','integer','min:0'],
        "status"           => ['required','in:Active,Draft'],
        "images.*"         => ['required'],
        // "colors.*"         => ['required','integer'],
    
        "meta_title"       => ['nullable','string','max:255'],
        "meta_keyword"     => ['nullable','string'],
        "meta_description" => ['nullable','string']
    ];

    
    public function updatedImages($value){
      // validate the temporary uploaded file     
      $upload = end($value);
      $extensions = ["jpg", "jpeg","png","webp"];
      $ext = $upload->getClientOriginalExtension();

      if (!in_array($ext , $extensions)){
        array_pop($this->images);
        $this->error = "not supported file";
      }
    }

    
    public function submit(){      
        $validatedData = $this->validate();
    
        $this->product->update($validatedData);

        if(count($this->images)){
            foreach ($this->images as $image) { 
                if(gettype($image) != 'string'){
                    $path = $image->store('products');       
                    $this->product->productImages()->create(['image' => $path]);
                } else{

                    $this->product->productImages()->create(['image' => $image]);
                }
            }
        }

        // if(count($this->colors)){
        //    $this->product->colors()->syncWithPivotValues($this->colors , ['quantity' => 10]);
        // }
        
        return redirect()->route('admin.product.index')->with('success','The product has been edited successfully');
    } 


    public function render()
    {
        return view('livewire.admin.product.edit');
    }
}
