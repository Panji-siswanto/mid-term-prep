@extends('layouts.master')

@section('title', 'Students')
   @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@section('content')
    <table class="table align-middle">
        <thead >
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->name }}</td>
                    <td class="text-center">
                        <div class="d-inline-flex gap-1">
                        <a href="{{ route('students.show', $student) }}" class="btn btn-sm btn-primary">
                            Details
                        </a>
                         <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-success">
                            Edit
                        </a>
                            <form action="{{ route('students.destroy', $student) }}" method="POST" onsubmit="return confirm('sure to delete {{ $student->name }}')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-3">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection