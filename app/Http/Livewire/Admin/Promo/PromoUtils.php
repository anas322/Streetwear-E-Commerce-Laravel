<?php

namespace App\Http\Livewire\Admin\Promo;

trait PromoUtils
{
    protected $rules = [
        'name' => 'required|string',
        'type' => 'required|string',
        'value' => 'required|integer',
        'status' => 'required|string',
        'purchase_once' => 'required',
        'must_login' => 'required',

    ];


    public function setValidatation()
    {
        if ($this->min_purchase_state == true) {
            $this->rules['min_purchase_value'] = 'required|integer|min:1';
        }
        if ($this->max_usage_state == true) {
            $this->rules['max_usage'] = 'required|integer|min:1';
        }
        if ($this->end_date_state == true) {
            $this->rules['end_date'] = 'required|date|after:start_date|after_or_equal:today';
            $this->rules['start_date'] = 'required|date|before:end_date|after_or_equal:today';
        } else {
            $this->rules['start_date'] = 'required|date|after_or_equal:today';
        }
    }
}
