@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 m-0">Create Course</h1>
    <a class="btn btn-secondary" href="{{ route('courses.index') }}">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('courses.store') }}" novalidate>
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5">{{ old('description') }}</textarea>
                @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection


