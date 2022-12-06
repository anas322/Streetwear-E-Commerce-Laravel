<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LeftFilterProducts extends Component
{   
    public $firstPrice = 0;
    public $secondPrice ;

    public function emitSearch(){
        $this->emit('updateSearch',['price' => [$this->firstPrice,$this->secondPrice]]);
    }

    public function render()
    {
        return view('livewire.left-filter-products');
    }
}
