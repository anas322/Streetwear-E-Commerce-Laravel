<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderSummary extends Component
{
    public $active;

    public function render()
    {
        return view('livewire.order-summary');
    }
}
