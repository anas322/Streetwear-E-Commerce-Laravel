<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    use HasFactory;

    protected $fillable=[
        'name'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function optionValues(){
        return $this->hasMany(optionValue::class);
    }
}
