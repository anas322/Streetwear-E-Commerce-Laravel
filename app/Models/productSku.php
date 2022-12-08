<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productSku extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'price',
        'quantity'
    ];
}
