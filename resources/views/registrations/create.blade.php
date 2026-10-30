<!DOCTYPE html>
<html>
<head>
    <title>Register Course</title>
</head>
<body>

    <h1>Register Student for Course</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('registrations.store') }}" method="POST">
        @csrf

        <label>Select Student:</label>
        <select name="student_id" required>
            <option value="">Choose Student</option>
            @foreach($students as $student)
                <option value="{{ $student->id }}" {{ old('student_id') == $student->id ? 'selected' : '' }}>
                    {{ $student->student_number }} - {{ $student->first_name }} {{ $student->last_name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label>Select Course:</label>
        <select name="course_id" required>
            <option value="">Choose Course</option>
            @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                    {{ $course->code }} - {{ $course->title }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label>Semester:</label>
        <input type="text" name="semester" value="{{ old('semester') }}" required>

        <br><br>

        <button type="submit">Register Student</button>
    </form>

    <br>
    <a href="{{ route('registrations.index') }}">Back to Registrations</a>

</body>
</html>