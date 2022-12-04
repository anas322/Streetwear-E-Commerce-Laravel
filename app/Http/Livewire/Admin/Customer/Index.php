<?php

namespace App\Http\Livewire\Admin\Customer;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.admin.customer.index',[
            'customers' => User::where('name','like','%'.$this->search.'%')->where('role_as',0)->paginate(10),
        ]);
    }
}
