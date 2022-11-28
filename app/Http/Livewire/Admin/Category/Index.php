<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $categoryId;
    public $name;
    public $slug;
    public $description;
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
        "status"      => ['required','in:Active,Draft'],
    ];
    

    public function editModel(Array $category = [])
    {   
        $this->resetValidation();
        $this->reset("categoryId", "name", "slug", "description", "status");
        $this->showModel = true;

       if($category){   
            $this->categoryId = $category['id'];   
           $this->name = $category['name'];
           $this->description = $category['description'];
           $this->slug = $category['slug'];
           $this->status = $category['status'];
        }

    }

    public function deleteModal(Category $category){
        $this->showDeleteModal = true;
        $this->category = $category;
    }

    public function submit()
    {
        $validatedData = $this->validate();
        
        Category::updateOrCreate(
        ['id' => $validatedData['categoryId']],
        array_merge($validatedData, ['id' => $validatedData['categoryId']]));
        
        $this->reset('showModel');
        session()->flash('success','This record has been updated successfully');
    }

    public function delete()
    {      
        $this->category->delete();
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
