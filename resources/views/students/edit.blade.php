<h1>Edit Student</h1>
<form method="POST" action="{{ route('students.update', $student) }}">
    @csrf
    @method('PUT')
    <div>
        <label>Name</label>
        <input name="name" value="{{ old('name', $student->name) }}">
        @error('name')<div>{{ $message }}</div>@enderror
    </div>
    <div>
        <label>Email</label>
        <input name="email" type="email" value="{{ old('email', $student->email) }}">
        @error('email')<div>{{ $message }}</div>@enderror
    </div>
    <div>
        <label>Course</label>
        <input name="course" value="{{ old('course', $student->course) }}">
        @error('course')<div>{{ $message }}</div>@enderror
    </div>
    <button type="submit">Update</button>
</form>
<a href="{{ route('students.show', $student) }}">Back</a>


