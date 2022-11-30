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
    public $slug;
    public $description;
    public $image;
    public $status;

    public $showModel = false;
    public $showDeleteModal = false;
    public Category|null $category = null;

    public $search = '';

    protected $rules = [
        "categoryId"  => ['nullable','integer'],
        "name"        => ['required','string'],
        "slug"        => ['required','string','max:255'],
        "description" => ['required'],
        "image"       => ['required'],
        "status"      => ['required','in:Active,Draft'],
    ];
    

    public function editModel(Array $category = [])
    {   
        $this->resetValidation();
        $this->reset("categoryId", "name", "slug", "description","image", "status");
        $this->showModel = true;

       if($category){   
           $this->categoryId = $category['id'];   
           $this->name = $category['name'];
           $this->description = $category['description'];
           $this->image = $category['image'];
           $this->slug = $category['slug'];
           $this->status = $category['status'] == 1 ? 'Active' : 'Draft';
        }

    }

    public function deleteModal(Category $category){
        $this->showDeleteModal = true;
        $this->category = $category;
    }

    public function submit()
    {
        $validatedData = $this->validate();

        $category = Category::findOrFail($validatedData['categoryId']);
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

    public function delete()
    {      
        $this->category->delete();
        Storage::delete($this->category->image);

        $this->reset(['showDeleteModal','category']);
        session()->flash('success','This record has been deleted successfully');
    }
    
    public function render()
    {
        return view('livewire.admin.category.index',[
            'categories' => Category::where('name','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
