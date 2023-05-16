<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithPagination;
    use WithFileUploads;
    
    public $categoryId;
    public $name;
    public $description;
    public $image;
    public $status;

    public $showModel = false;
    public Category|null $category = null;

    public $search = '';
    

    protected $rules = [
        "categoryId"  => ['nullable','integer'],
        "name"        => ['required','string'],
        "description" => ['required'],
        "image"       => ['required'],
        "status"      => ['required','in:Active,Draft'],
    ];
    
    public function dehydrate()
    {
        $this->dispatchBrowserEvent('reinit-flowbite');
    }

    public function editModel(Array $category = [])
    {   
        $this->resetValidation();
        $this->reset("categoryId", "name", "description","image", "status");
        $this->showModel = true;

       if($category){   
           $this->categoryId = $category['id'];   
           $this->name = $category['name'];
           $this->description = $category['description'];
           $this->image = $category['image'];
           $this->status = $category['status'] == 1 ? 'Active' : 'Draft';
        }

    }

    public function deleteModal(Category $category){
        $this->category = $category;
    }

    public function submit()
    {
        $validatedData = $this->validate();

        $category = Category::find($validatedData['categoryId']);
        if($category){
            Storage::delete(($category->image));
        }

        if(gettype($this->image) != 'string'){  
            $path = $this->image->store('category');
            $validatedData['image'] = $path;
        }


        Category::updateOrCreate(
        ['id' => $validatedData['categoryId']],
        array_merge($validatedData, ['id' => $validatedData['categoryId']]));
        

        $this->reset('showModel');
        session()->flash('success','This record has been updated successfully');
    }

    public function delete($id)
    {      
        $category = Category::findOrFail($id);
        if($category->products && $category->products->count() > 0){
            session()->flash('error','This category cannot be deleted because it has products');
            return;
        }

        $category->delete();
        Storage::delete($category->image);


        session()->flash('success','This record has been deleted successfully');
    }
    
    public function render()
    {
        return view('livewire.admin.category.index',[
            'categories' => Category::where('name','like','%'.trim($this->search).'%')->paginate(10),
        ]);
    }
}
