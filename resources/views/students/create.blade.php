<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

    <h1>Add New Student</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Student Number:</label>
        <input type="text" name="student_number" value="{{ old('student_number') }}" required>
        <br><br>

        <label>First Name:</label>
        <input type="text" name="first_name" value="{{ old('first_name') }}" required>
        <br><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" value="{{ old('last_name') }}" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone') }}">
        <br><br>

        <label>Program:</label>
        <input type="text" name="program" value="{{ old('program') }}">
        <br><br>

        <button type="submit">Save Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to Students</a>

</body>
</html>