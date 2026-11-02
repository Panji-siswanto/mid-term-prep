<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();
        $courses =Course::all();

        if($students->isEmpty() || $courses->isEmpty()){
            return;
        }
        foreach($students as $student){
            $randomCourses = $courses->random(fake()->numberBetween(2,6))->pluck('id');

            $student->courses()->attach($randomCourses);
        }
    }
}
