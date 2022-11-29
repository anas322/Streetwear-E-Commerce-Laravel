<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'status',
    ]; 

    public function products(){
        return $this->belongsToMany(Product::class,'color_products');
    }

     protected function status(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => $value == 'Active' ? 1 : 0,
        );
    }

}
