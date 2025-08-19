@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 m-0">Students</h1>
    <a class="btn btn-primary" href="{{ route('students.create') }}">Create Student</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($students as $student)
                <tr>
                    <td><a href="{{ route('students.show', $student) }}">{{ $student->name }}</a></td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->course }}</td>
                    <td class="text-end">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('students.edit', $student) }}">Edit</a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this student?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">No students found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">{{ $students->links() }}</div>
</div>
@endsection

