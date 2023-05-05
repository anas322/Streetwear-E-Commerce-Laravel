<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable= [
        'total_price',
    ];

    public function productSkus(){
        return $this->belongsToMany(productSku::class,'order_product_skus')->withPivot('quantity')->withTimestamps();;
    }
}
