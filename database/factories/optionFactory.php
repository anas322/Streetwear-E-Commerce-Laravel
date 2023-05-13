<?php

namespace Database\Factories;

use App\Models\option;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\option>
 */
class optionFactory extends Factory
{

    protected $model = option::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->randomElement(['Size','Color','Material']),
        ];
    }
}
