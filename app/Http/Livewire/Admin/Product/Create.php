<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Arr;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    use WithFileUploads;
    
    public $categories;
    public $load_colors;

    public $categoryId;
    public $name;
    // public $slug;
    public $description;
    public $price;
    public $quantity;
    public $status = "Active";

    public $variantsState = true;
    public $optionsCount = [0];
    public $optionName = [];
    public $optionValue = [];
    public $optionValuesArray = [];
    public $optionMatrix;

    // public $options = [];

    public $images = [];

    public $meta_title;
    public $meta_keyword;
    public $meta_description;

    public function mount(){
        $this->categories = Category::all();
    }

        protected $rules = [
        "categoryId"       => ['required','integer'], 
        "name"             => ['required','string'],
        // "slug"             => ['required','string','max:255'],
        "description"      => ['required','string'],
        "price"            => ['required','integer','min:0'],
        "quantity"         => ['required','integer','min:0'],
        "status"           => ['required','in:Active,Draft'],
        "images.*"         => ['required','image','mimes:jpg,jpeg,png,webp','max:2048'],
        "optionName.*"     => ['string'],
    
        "meta_title"       => ['nullable','string','max:255'],
        "meta_keyword"     => ['nullable','string'],
        "meta_description" => ['nullable','string']
    ];

    public function updatedOptionValuesArray($value){
        dd($value);
    }

    public function addAttr($i){  
        if(count($this->optionName) <= 0 || count($this->optionValue) <= 0) return;
        if(isset($this->optionName[$i])){
            if( trim($this->optionValue[$i]) == "" || trim($this->optionName[$i]) == "" ) return ;
    
            if(isset($this->optionValue[$i]) && isset($this->optionValuesArray[$i]) && is_array($this->optionValuesArray[$i]) ){
                array_push($this->optionValuesArray[$i],trim($this->optionValue[$i]));
                $this->reset('optionValue');
            }else{
                $this->optionValuesArray[$i] = [trim($this->optionValue[$i])];
                $this->reset('optionValue');
            }
        }
        $this->dispatchBrowserEvent('contentChanged');

        // foreach ($this->optionValuesArray as $key => $value) {
        //     $this->options[$this->optionName[$key]] = $value; 
        // }
        $this->optionMatrix = Arr::crossJoin(...$this->optionValuesArray);

    }


    public function DeleteOptionValue($valueIndex,$nameIndex){
        unset($this->optionValuesArray[$nameIndex][$valueIndex]);
        unset($this->optionValue[$nameIndex]);
        $this->dispatchBrowserEvent('contentChanged');

        $this->optionMatrix = Arr::crossJoin(...$this->optionValuesArray);
        
        Log::debug('option values array',$this->optionValuesArray);
        
    }

    public function addNewOption(){
        array_push($this->optionsCount,end($this->optionsCount) + 1);
        $this->dispatchBrowserEvent('contentChanged');
    }
    public function deleteOption($Index){
        unset($this->optionValuesArray[$Index]);
        unset($this->optionName[$Index]);
        unset($this->optionValue[$Index]);
        unset($this->optionsCount[$Index]);
        $this->dispatchBrowserEvent('contentChanged');
        // Log::debug('option values array',$this->optionValuesArray);
        // Log::debug('option values ...',...$this->optionValuesArray);
        // Log::debug('option values count',$this->optionsCount);
        // Log::debug('option values matrix',$this->optionMatrix);
        $this->optionMatrix = Arr::crossJoin(...$this->optionValuesArray);
    }

    





    public function submit()
    {   
        $validatedData = $this->validate();

        $category = Category::findOrFail($this->categoryId);

        $product = $category->products()->create($validatedData);

        if(count($this->images)){
            foreach ($this->images as $image) {
                $path = $image->store('products');
                
                $product->productImages()->create(['image' => $path]);
            }
        }

        return redirect()->route('admin.product.index')->with('success','The product has been created successfully');
    }


    public function render()
    {
        return view('livewire.admin.product.create');
    }
}
