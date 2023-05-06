<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'description',
        'is_hot',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description'
    ];

    protected $casts = [
        'is_hot' => 'boolean',
    ];
    
    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? 'Active' : 'Draft',
            set: fn ($value) => $value == 'Active' ? 1 : 0,
        );
    }

    protected function ishot(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? 'Hot' : 'Not Hot',
        );
    }

    protected function slug(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::slug($value),
        );
    }


    //"elequent" has a relationship and i haven't :( 
    public function options(){
        return $this->hasMany(Option::class);
    }

    public function productSkus(){
        return $this->hasMany(productSku::class);
    }

    public function productSkusValues(){
        return $this->hasMany(SkuValue::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }




     public static function boot() {
        parent::boot();

        static::saving(function($product) { 
            $product->productImages()->delete();
            $product->slug = $product->name;
        });

        static::created(function ($product) {
            $product->slug = $product->createSlug($product->name);
            $product->save();
        });
    }

    

    private function createSlug($name)
    {   //create a unique slug
        if (static::whereSlug($slug = Str::slug($name))->exists()) {

            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');
            
            if($max == null) {
                return $slug;
            }
            
            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }

            return "{$slug}-2";
        }

        return $slug;
    }


}
