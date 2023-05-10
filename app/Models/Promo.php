<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promo extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'type',
        'value',
        'type_of_value',
        'min_purchase',
        'purchase_once',
        'max_usage',
        'must_login',
        'count',
        'status',
        'start_date',
        'end_date',
        
    ];

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? 'Active' : 'Draft',
            set: fn ($value) => $value == 'Active' ? 1 : 0,
        );
    }

    protected function typeofvalue(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? true : false,
            set: fn ($value) => $value == true ? 1 : 0,
        );
    }

    protected function purchaseonce(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? true : false,
            set: fn ($value) => $value == true ? 1 : 0,
        );
    }

    protected function mustlogin(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? true : false,
            set: fn ($value) => $value == true ? 1 : 0,
        );
    }


    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
