<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imagePath = $this->faker->image('public/storage/products/', 380 , 540, null, false);
        $imageName = str_replace('public/storage/', '', $imagePath);
        return [
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'status' => 'Active',
            'image' => 'products/'. $imageName,
        ];
    }
}
