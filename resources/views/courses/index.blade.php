@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 m-0">Courses</h1>
    <a class="btn btn-primary" href="{{ route('courses.create') }}">Create Course</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($courses as $course)
                <tr>
                    <td><a href="{{ route('courses.show', $course) }}">{{ $course->name }}</a></td>
                    <td class="text-truncate" style="max-width: 450px;">{{ $course->description }}</td>
                    <td class="text-end">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('courses.edit', $course) }}">Edit</a>
                        <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this course?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center text-muted">No courses found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">{{ $courses->links() }}</div>
</div>
@endsection

