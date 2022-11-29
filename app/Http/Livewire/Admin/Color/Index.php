<?php

namespace App\Http\Livewire\Admin\Color;

use App\Models\Color;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $colorId;
    public $name;
    public $code ;
    public $status;

    public $showModel = false;
    public $showDeleteModal = false;

    public Color|null $color =null;

    public $search = '';

    protected $rules = [
        "colorId"     => ['nullable' , 'integer'],
        "name"        => ['required','string'],
        "code"        => ['required','string','max:255'],
        "status"      => ['required','in:Active,Draft'],
    ];

    public function editModel(Array $color = [])
    {   
        $this->resetValidation();
        $this->reset( "name", "code", "status");
        $this->showModel = true;

       if($color){   
           $this->colorId = $color['id'];   
           $this->name = $color['name'];
           $this->code = $color['code'];
           $this->status = $color['status'] == 1 ? 'Active' : 'Draft';
        }

    }

    public function deleteModal(Color $color){
        $this->showDeleteModal = true;
        $this->color = $color;
    }

    public function delete()
    {      
        $this->color->delete();
        $this->reset(['showDeleteModal','color']);
        session()->flash('success','This record has been deleted successfully');
    }

    public function submit()
    {
        $validatedData = $this->validate();
        
        Color::updateOrCreate(
        ['id' => $validatedData['colorId']],
        array_merge($validatedData, ['id' => $validatedData['colorId']]));
        
        $this->reset('showModel');
        session()->flash('success','This record has been updated successfully');
    }


    public function render()
    {
        return view('livewire.admin.color.index',[
            'colors' => Color::where('name','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
