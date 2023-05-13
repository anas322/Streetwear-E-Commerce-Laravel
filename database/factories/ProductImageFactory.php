<?php

namespace Database\Factories;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    protected $model = ProductImage::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imagePath = $this->faker->image('public/storage/products/',480 , 640, null, false);
        $imageName = str_replace('public/storage/', '', $imagePath);
        return [
            'image' => 'products/' . $imageName,
        ];
    }
}
