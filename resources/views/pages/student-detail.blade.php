@extends('layouts.master')

@section('title', $student->name)

@section('content')
    <h2>Student Profile</h2>
    <p class="mt-4 mb-0">NIM: {{ $student->nim }}</p>
    <p class="mb-0">Name: {{ $student->name }}</p>
    <p class="mb-0">Contact: {{ $student->profile->contact }}</p>
    <p class="mb-0">email: {{ $student->profile->email }}</p>
    <p class="mb-0">address: {{ $student->profile->address }}</p>



    <h2 class="mt-4">taken course</h2>
    <ul>
        @foreach ($student->courses as $course)
                <li>{{ $course->name }}</li>
        @endforeach
    </ul>
@endsection