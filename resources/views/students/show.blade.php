<h1>Student: {{ $student->name }}</h1>
<p>Email: {{ $student->email }}</p>
<p>Course: {{ $student->course }}</p>

<a href="{{ route('students.edit', $student) }}">Edit</a>
<a href="{{ route('students.index') }}">Back</a>


