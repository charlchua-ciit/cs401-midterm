<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'user_name' => fake()->userName(),
            'password' => fake()->password(),
            'registration_date' => fake()->dateTimeThisDecade(),
        ];
    }
}
