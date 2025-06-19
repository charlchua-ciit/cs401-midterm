<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'program' => fake()->word(),
            'enrollment_year' => fake()->year(),
            'birthday' => fake()->dateTimeBetween('-25 years','-18 years'),
        ];
    }
}
