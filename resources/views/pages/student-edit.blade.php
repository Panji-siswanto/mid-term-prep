@extends('layouts.master')

@section('title', 'Edit Student')

@section('content')
    <div class="container">
        <h2>Editing Student: {{ $student->name }}</h2>

        <form action="{{ route('students.update',$student->id) }}" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="nim" value="{{ $student->nim }}" class="form-control" readonly>
            <div class="m-2"></div>
            <input type="text" name="name" id="name" class="form-control"
            value="{{ $student->name }}" required
            >
            <div class="m-2"></div>

            <input type="text" name="contact" id="contact" class="form-control"
            value="{{ $student->profile->contact }}" required
            >
            <div class="m-2"></div>
            <input type="text" name="address" id="address" class="form-control"
            value="{{ $student->profile->address }}" required
            >
            <div class="m-2"></div>
            <input type="email" name="email" id="email" class="form-control"
            value="{{ $student->profile->email }}" required
            >
            <div class="m-2"></div>
                
            <button type="submit" class="btn btn-primary" >
                Submit
            </button>
        </form>
    </div>
@endsection