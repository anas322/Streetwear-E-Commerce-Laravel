<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{   
    protected $model = Product::class;

    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'status' => 'Active',
            'is_hot' => $this->faker->randomElement([0, 1]),
            'meta_title' => $this->faker->name,
            'meta_description' => $this->faker->text,
            'meta_keyword' => $this->faker->name,

        ];
    }
}
