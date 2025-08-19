@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 m-0">Student: {{ $student->name }}</h1>
    <div>
        <a class="btn btn-secondary" href="{{ route('students.index') }}">Back</a>
        <a class="btn btn-primary" href="{{ route('students.edit', $student) }}">Edit</a>
    </div>
    </div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $student->email }}</dd>
            <dt class="col-sm-3">Course</dt>
            <dd class="col-sm-9">{{ $student->course }}</dd>
        </dl>
    </div>
</div>
@endsection

