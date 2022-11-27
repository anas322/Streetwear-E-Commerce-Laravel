<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'description',
        'price',
        'quantity',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description'
    ];
}
