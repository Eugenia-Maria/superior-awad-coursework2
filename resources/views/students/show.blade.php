<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>

    <h1>Student Details</h1>

    <p><strong>Student Number:</strong> {{ $student->student_number }}</p>
    <p><strong>First Name:</strong> {{ $student->first_name }}</p>
    <p><strong>Last Name:</strong> {{ $student->last_name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Phone:</strong> {{ $student->phone }}</p>
    <p><strong>Program:</strong> {{ $student->program }}</p>

    <a href="{{ route('students.edit', $student->id) }}">Edit Student</a>

    <br><br>

    <a href="{{ route('students.index') }}">Back to Students</a>

</body>
</html>