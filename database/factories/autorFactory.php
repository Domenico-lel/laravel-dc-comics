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
            'fristname' => fake()->fristName,
            'lastname' => fake()->lastName,
            'date_of_birth' => fake()->dateTime,
        ];
    }
}
