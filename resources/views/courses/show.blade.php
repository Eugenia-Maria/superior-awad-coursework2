<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
</head>
<body>

    <h1>Course Details</h1>

    <p><strong>Course Code:</strong> {{ $course->code }}</p>
    <p><strong>Course Title:</strong> {{ $course->title }}</p>
    <p><strong>Description:</strong> {{ $course->description }}</p>
    <p><strong>Credit Units:</strong> {{ $course->credit_units }}</p>

    <a href="{{ route('courses.edit', $course->id) }}">Edit Course</a>

    <br><br>

    <a href="{{ route('courses.index') }}">Back to Courses</a>

</body>
</html>