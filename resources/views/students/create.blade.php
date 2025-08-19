@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 m-0">Create Student</h1>
    <a class="btn btn-secondary" href="{{ route('students.index') }}">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('students.store') }}" novalidate>
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{ old('email') }}">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Courses</label>
                <select class="form-select @error('courses') is-invalid @enderror" name="courses[]" multiple size="6">
                    @foreach(\App\Models\Course::orderBy('name')->get() as $course)
                        <option value="{{ $course->id }}" @selected(collect(old('courses', []))->contains($course->id))>{{ $course->name }}</option>
                    @endforeach
                </select>
                @error('courses')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection

