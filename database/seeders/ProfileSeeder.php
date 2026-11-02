<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $students = Student::doesntHave('profile')->get();

        foreach ($students as $student){
            Student::factory()->create([
                'student_id' => $student->id
            ]); 
        }
    }
}
