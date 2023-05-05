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

    public function productSkuValues(){
        return $this->hasMany(SkuValue::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class,'order_product_skus')->withPivot('quantity')->withTimestamps();
    }
}
