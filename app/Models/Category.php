<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
    ]; 


     protected function status(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => $value == 'Active' ? 1 : 0,
        );
    }
}
