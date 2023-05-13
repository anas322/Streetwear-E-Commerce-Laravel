<?php

namespace Database\Factories;

use App\Models\productSku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\productSku>
 */
class productSkuFactory extends Factory
{

    protected $model = productSku::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sku' => uniqid(),  
            'price' => $this->faker->randomFloat(2, 30, 600),
            'quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}
