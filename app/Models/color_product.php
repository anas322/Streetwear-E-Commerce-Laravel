<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color_product extends Model
{
    use HasFactory;

    protected $table = "color_products";

    protected $fillable = [
        'color_id',
        'quantity'
    ];

}
