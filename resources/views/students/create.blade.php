<h1>Create Student</h1>
<form method="POST" action="{{ route('students.store') }}">
    @csrf
    <div>
        <label>Name</label>
        <input name="name" value="{{ old('name') }}">
        @error('name')<div>{{ $message }}</div>@enderror
    </div>
    <div>
        <label>Email</label>
        <input name="email" type="email" value="{{ old('email') }}">
        @error('email')<div>{{ $message }}</div>@enderror
    </div>
    <div>
        <label>Course</label>
        <input name="course" value="{{ old('course') }}">
        @error('course')<div>{{ $message }}</div>@enderror
    </div>
    <button type="submit">Save</button>
</form>
<a href="{{ route('students.index') }}">Back</a>


