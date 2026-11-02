<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
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
            'name' => fake()->name(),
            // 'nim'=> $this->faker->unique()->numerify('2#02######'),
            'nim' =>fake()->unique()->regexify('(2[6-0]|[30])02[0-9]{6}')
        ];
    }
}
