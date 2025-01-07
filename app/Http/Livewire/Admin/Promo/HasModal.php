<?php

namespace App\Http\Livewire\Admin\Promo;

trait HasModal
{
    public $toggleModal = false;

    public function showModal()
    {
        $this->toggleModal = true;
    }

    public function closeModal()
    {
        $this->toggleModal = false;
    }
}
