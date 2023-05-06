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

    public $categoryId;
    public $name;
    // public $slug;
    public $description;
    public $price;
    public $quantity;
    public $status = "Active";
    public $is_hot = false;

    public $variantsState = false;
    public $optionsCount = [0];
    public $optionName = [];
    public $optionValue = [];
    public $optionValuesArray = [];
    public $optionValuesArrayId = [];
    public $optionMatrix;
    public $optionMatrixId;

    public $optionPrices;
    public $optionQuantities;
    public $skus;


    public $images = [];

    public $meta_title;
    public $meta_keyword;
    public $meta_description;


    public function booted(){
        $this->dispatchBrowserEvent('contentChanged');
    }

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
        "is_hot"            => ['nullable','boolean'],
        "images.*"         => ['required','image','mimes:jpg,jpeg,png,webp','max:2048'],
        "optionName.*"     => ['string'],
    
        "meta_title"       => ['nullable','string','max:255'],
        "meta_keyword"     => ['nullable','string'],
        "meta_description" => ['nullable','string']
    ];


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
        

        // foreach ($this->optionValuesArray as $key => $value) {
        //     $this->options[$this->optionName[$key]] = $value; 
        // }
        $this->optionMatrix = Arr::crossJoin(...$this->optionValuesArray);

    }


    public function DeleteOptionValue($valueIndex,$nameIndex){
        unset($this->optionValuesArray[$nameIndex][$valueIndex]);
        unset($this->optionValue[$nameIndex]);
        

        $this->optionMatrix = Arr::crossJoin(...$this->optionValuesArray);
        
        Log::debug('option values array',$this->optionValuesArray);
        
    }

    public function addNewOption(){
        array_push($this->optionsCount,end($this->optionsCount) + 1);
        
    }
    public function deleteOption($Index){
        unset($this->optionValuesArray[$Index]);
        unset($this->optionName[$Index]);
        unset($this->optionValue[$Index]);
        unset($this->optionsCount[$Index]);
        
        // Log::debug('option values array',$this->optionValuesArray);
        // Log::debug('option values ...',...$this->optionValuesArray);
        // Log::debug('option values count',$this->optionsCount);
        // Log::debug('option values matrix',$this->optionMatrix);
        $this->optionMatrix = Arr::crossJoin(...$this->optionValuesArray);
    }

    





    public function submit()
    {
        //first validate the data
        $validatedData = $this->validate();

        //find the right category 
        $category = Category::findOrFail($this->categoryId);

        //store product
        $product = $category->products()->create($validatedData);

        //store product images
        if(count($this->images)){
            foreach ($this->images as $image) {
                $path = $image->store('products');
                
                $product->productImages()->create(['image' => $path]);
            }
        }

        if($this->variantsState && count($this->optionValuesArray)){

            $options = [];
            //store options name and values
            foreach ($this->optionValuesArray as $key => $value) {
                //create array of key='option name' value = 'array of this option values'
                $options[$this->optionName[$key]] = $value; 
            }

            //iterate over each option and store the keys as options and every option array value as option values 
            foreach ($options as $optionName => $optionValues) {
                //options of product
                $singleOption = $product->options()->create([
                    'name' => $optionName
                ]);

                //values of this option
                foreach ($optionValues as $optionValue) {
                    $singleOptionValue = $singleOption->optionValues()->create([
                        'name' =>$optionValue
                    ]);
                }
            }

            //create array of option values ids
            foreach ($product->options as $option) {
                array_push($this->optionValuesArrayId,$option->optionValues->pluck('id'));
            }

            //create the matrix of every possible array of options
            $this->optionMatrixId = Arr::crossJoin(...$this->optionValuesArrayId);


            //store product sku and sku values 
            foreach ($this->optionMatrixId as $key => $singleMatrixIds) {
                //store sku of single variant of our product
                $productSku = $product->productSkus()->create([
                    'sku'   => uniqid(),
                    'price' => $this->optionPrices[$key],
                    'quantity' => $this->optionQuantities[$key],
                ]);


                //store the combination of this single sku variant
                foreach ($singleMatrixIds as $singleKey => $id) {
                    //options of our product
                    $opt = $product->options[$singleKey];
                    //get the id of nth option
                    $opt_id = $opt->id;         

                    $product->productSkusValues()->create([
                        'product_sku_id' => $productSku->id,
                        'option_id' => $opt_id,
                        'option_value_id' => $id
                    ]);
                }
            }

        }

        return redirect()->route('admin.product.index')->with('success','The product has been created successfully');
    }


    public function render()
    {
        return view('livewire.admin.product.create');
    }
}
