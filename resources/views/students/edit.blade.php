<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h1>Edit Student</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Student Number:</label>
        <input type="text" name="student_number"
               value="{{ old('student_number', $student->student_number) }}" required>
        <br><br>

        <label>First Name:</label>
        <input type="text" name="first_name"
               value="{{ old('first_name', $student->first_name) }}" required>
        <br><br>

        <label>Last Name:</label>
        <input type="text" name="last_name"
               value="{{ old('last_name', $student->last_name) }}" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email"
               value="{{ old('email', $student->email) }}" required>
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone"
               value="{{ old('phone', $student->phone) }}">
        <br><br>

        <label>Program:</label>
        <input type="text" name="program"
               value="{{ old('program', $student->program) }}">
        <br><br>

        <button type="submit">Update Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to Students</a>

</body>
</html>