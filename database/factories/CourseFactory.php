<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'subject_name'=>fake()->words(2,true),
            'course_code'=>fake()->unique()->bothify('###-???'),
            'credits'=>fake()->numberBetween(2,3),
            'description'=>fake()->paragraph(),
        ];
    }
}
