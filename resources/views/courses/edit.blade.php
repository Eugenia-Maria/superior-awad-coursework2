<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>

    <h1>Edit Course</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Course Code:</label>
        <input type="text" name="code"
               value="{{ old('code', $course->code) }}" required>
        <br><br>

        <label>Course Title:</label>
        <input type="text" name="title"
               value="{{ old('title', $course->title) }}" required>
        <br><br>

        <label>Description:</label>
        <textarea name="description">{{ old('description', $course->description) }}</textarea>
        <br><br>

        <label>Credit Units:</label>
        <input type="number" name="credit_units"
               value="{{ old('credit_units', $course->credit_units) }}" min="1" required>
        <br><br>

        <button type="submit">Update Course</button>
    </form>

    <br>
    <a href="{{ route('courses.index') }}">Back to Courses</a>

</body>
</html>