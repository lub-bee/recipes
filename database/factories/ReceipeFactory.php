<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receipe>
 */
class ReceipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->sentence(),
            "preparation_time" => fake()->randomNumber(2),
            "cooking_time" => fake()->randomNumber(2),
            "difficulty" => fake()->numberBetween(1,3),
            "author" => 1,
        ];
    }
}
