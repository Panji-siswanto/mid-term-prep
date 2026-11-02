<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' =>Student::factory(),
            'contact' => fake()->unique()->phoneNumber(),
            'email' => fake()->unique()->email(),
            'address' => fake()->address()
        ];
    }
}
