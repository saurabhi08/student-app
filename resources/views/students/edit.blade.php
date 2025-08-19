@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 m-0">Edit Student</h1>
    <a class="btn btn-secondary" href="{{ route('students.show', $student) }}">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('students.update', $student) }}" novalidate>
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $student->name) }}">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{ old('email', $student->email) }}">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Course</label>
                <input class="form-control @error('course') is-invalid @enderror" name="course" value="{{ old('course', $student->course) }}">
                @error('course')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

