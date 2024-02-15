<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\autor>
 */
class autorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'genre' => fake()->word,
            'date_of_publication' => fake()->dateTime(),
            'num_page' => fake()->numberBetween(10, 500),
        ];
    }
}
