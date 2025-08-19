@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 m-0">Course: {{ $course->name }}</h1>
    <div>
        <a class="btn btn-secondary" href="{{ route('courses.index') }}">Back</a>
        <a class="btn btn-primary" href="{{ route('courses.edit', $course) }}">Edit</a>
    </div>
    </div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Description</dt>
            <dd class="col-sm-9">{{ $course->description }}</dd>
        </dl>
    </div>
</div>
@endsection


