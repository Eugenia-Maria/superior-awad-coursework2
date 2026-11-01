<!DOCTYPE html>
<html>
<head>
    <title>Add Course</title>
</head>
<body>

    <h1>Add New Course</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        <label>Course Code:</label>
        <input type="text" name="code" value="{{ old('code') }}" required>
        <br><br>

        <label>Course Title:</label>
        <input type="text" name="title" value="{{ old('title') }}" required>
        <br><br>

        <label>Description:</label>
        <textarea name="description">{{ old('description') }}</textarea>
        <br><br>

        <label>Credit Units:</label>
        <input type="number" name="credit_units" value="{{ old('credit_units') }}" min="1" required>
        <br><br>

        <button type="submit">Save Course</button>
    </form>

    <br>
    <a href="{{ route('courses.index') }}">Back to Courses</a>

</body>
</html>