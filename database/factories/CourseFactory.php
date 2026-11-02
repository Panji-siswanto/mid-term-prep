<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Course>
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

        $courses=[
            'web programming',
            'venture creation',
            'compilation techniques',
            'operating system',
            'data analytics'
        ];

        return [
            'name' => fake()->randomElement($courses),
            'credits' =>fake()->numberBetween(2,4)
        ];
    }
}
