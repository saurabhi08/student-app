<h1>Students</h1>
<a href="{{ route('students.create') }}">Create Student</a>
<ul>
@foreach ($students as $student)
    <li>
        <a href="{{ route('students.show', $student) }}">{{ $student->name }}</a>
        <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <a href="{{ route('students.edit', $student) }}">Edit</a>
    </li>
@endforeach
</ul>

{{ $students->links() }}


