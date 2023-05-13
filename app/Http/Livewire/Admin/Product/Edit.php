<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    
    public $categories;
    public $product;

    public $categoryId;
    public $name;
    // public $slug;
    public $description;
    public $price;
    public $quantity;
    public $status;
    public $is_hot;
    public $on_sale = false;
    public $on_sale_price ;

    public $variantsState ;
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

    public $error;

    public function booted(){
        $this->dispatchBrowserEvent('contentChanged');
    }
    
    public function mount(Product $product){
        $this->categories = Category::all();
        $this->product = $product;

        $this->categoryId = $product->category_id;
        $this->name = $product->name;
        // $this->slug = $product->slug;
        $this->description = $product->description;
        
        if($product->options->count() === 0){
            $this->quantity = $product->productSkus->first()->quantity;
            if($product->sale != null){
                $this->on_sale = true;
                $this->on_sale_price = $product->sale->discounted_price;
            }
                $this->price = $product->productSkus->first()->price;
        }else{
            $this->quantity = 0;
            $this->price = 0;
        }
        $this->status = $product->status;
        $this->is_hot = $product->is_hot == 'Hot' ? true : false;

        $this->variantsState = $product->options->count() > 0;

        //calculate optionsCount only if product at least has one option otherwise set it to 0 
        $this->optionsCount = $product->options->count() >= 1 ? range(0,$product->options->count() - 1) : [0];

        $this->optionName = $product->options->pluck('name');
        foreach ($product->options as $option) {
            array_push($this->optionValuesArray,$option->optionValues->pluck('name'));
        }
        $this->optionPrices = $product->productSkus->pluck('price');
        $this->optionQuantities = $product->productSkus->pluck('quantity');
        $this->optionMatrix = Arr::crossJoin(...$this->optionValuesArray);
      

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
        "is_hot"           => ['nullable','boolean'],
        "images.*"         => ['required'],
    
        "meta_title"       => ['nullable','string','max:255'],
        "meta_keyword"     => ['nullable','string'],
        "meta_description" => ['nullable','string']
    ];

    public function setValidates()
    {
        if ($this->variantsState) {
            $this->rules['price'] = ['nullable','integer','min:0'];
        } else {
            $this->rules['price']     = ['required','integer','min:0'];
            $this->rules["quantity"]  = ['required','integer','min:0'];
            if($this->on_sale){
                $this->rules['on_sale_price'] = ['required','integer','min:0'];
            }
        }

    }

        public function addAttr($i){  
        if(count($this->optionName) <= 0 || count($this->optionValue) <= 0) return;
        if(isset($this->optionName[$i])){
            if( trim($this->optionValue[$i]) == "" || trim($this->optionName[$i]) == "" ) return ;
    
            if(isset($this->optionValue[$i]) && isset($this->optionValuesArray[$i]) && is_array($this->optionValuesArray[$i]) ){
                array_push($this->optionValuesArray[$i],trim(strtoupper($this->optionValue[$i])));
                $this->reset('optionValue');
            }else{
                $this->optionValuesArray[$i] = [trim(strtoupper($this->optionValue[$i]))];
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

    
    public function submit()
    {
        //first validate the data
        $this->setValidates();
        $this->validate();

        //find the right category 
        $category = Category::findOrFail($this->categoryId);

        //store product
        $product = $category->products()->create([
            'name'             => trim($this->name),
            'slug'             => trim($this->name),
            'description'      => trim($this->description),
            'status'           => $this->status,
            'is_hot'           => $this->is_hot,
            'meta_title'       => trim($this->meta_title),
            'meta_keyword'     => trim($this->meta_keyword),
            'meta_description' => trim($this->meta_description)
        ]);

        //store new images
        if(count($this->images)){
            foreach ($this->images as $image) {
                $path = $image;
                if(!is_string($image)){
                    $path = $image->store('products');
                }
                // dump($path);
                ProductImage::updateOrCreate(['image' => $path],['product_id' => $product->id]);
            }
        }

        // first delete the this product 
        $this->product->delete();

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
                    'name' => Str::ucfirst(Str::of($optionName)->snake())
                ]);

                //values of this option
                foreach ($optionValues as $optionValue) {
                    $singleOptionValue = $singleOption->optionValues()->create([
                        'name' => strtoupper($optionValue) 
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
                    $opt = $product->options[$singleKey];
                    $opt_id = $opt->id;
                    
                    $product->productSkusValues()->create([
                        'product_sku_id' => $productSku->id,
                        'option_id' => $opt_id,
                        'option_value_id' => $id
                    ]);

                }
            }

        }else{
            $productSku = $product->productSkus()->create([
                'sku'   => uniqid(),
                'price' => $this->price,
                'quantity' => $this->quantity,
            ]);

            if($this->on_sale){
                $product->sale()->create([
                    'discounted_price' => $this->on_sale_price,
                ]);
            }
        }

        return redirect()->route('admin.product.index')->with('success','The product has been created successfully');
    }


    public function render()
    {
        return view('livewire.admin.product.edit');
    }
}
