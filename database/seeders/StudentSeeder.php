<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Student::factory(10)->create();

        Student::factory()
        ->count(10)
        ->has(Profile::factory())
        ->create();
    }
}
