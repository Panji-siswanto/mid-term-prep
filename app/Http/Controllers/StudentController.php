<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('pages.students',compact('students'));
    }

    public function show(Student $student){
        $student->load(['profile','courses']);
        return view('pages.student-detail',compact('student'));

    }

    public function destroy(Student $student){
        $student->delete();

        return redirect()->route('students.index')->with('success','student deleted');
    }

    public function edit(Student $student){
        $student->load('profile');
        return view('pages.student-edit',compact('student'));
    }

    public function update(Request $request, Student $student){

    // @dd($request);
        $validated = $request->validate([
            'name' => ['required','max:255','string'],
            'contact' => ['required','string',Rule::unique('profiles','contact')->ignore($student->profile->id)],
            'email'=> ['nullable', 'email', 'max:255', Rule::unique('profiles','email')->ignore($student->profile->id)],
            'address' => ['required','max:255','string'],
        ]);

         $student->update([
            'name' => $validated['name'],
        ]);

        $student->profile()->updateOrCreate(
            [
            'student_id' =>$student->id
            ],
           ['contact' => $validated['contact'],
            'email'   => $validated['email'],
            'address' => $validated['address'],
            ]
        );

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }
    
}
