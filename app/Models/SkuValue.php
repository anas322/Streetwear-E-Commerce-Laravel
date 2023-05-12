<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkuValue extends Model
{
    use HasFactory;

    protected $fillable= [
        'product_sku_id',
        'option_id',
        'option_value_id'
    ];

    public function productSku(){
        return $this->belongsTo(productSku::class);
    }

    public function optionValue(){
        return $this->belongsTo(optionValue::class);
    }

    public function option(){
        return $this->belongsTo(option::class);
    }
}
