<!DOCTYPE html>
<html>
<head>
    <title>My Registered Courses</title>
</head>
<body>

    <h1>My Registered Courses</h1>

    <p>Student: {{ $student->first_name }} {{ $student->last_name }}</p>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Credit Units</th>
                <th>Semester</th>
            </tr>
        </thead>

        <tbody>
            @forelse($courses as $course)
                <tr>
                    <td>{{ $course->code }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->credit_units }}</td>
                    <td>{{ $course->pivot->semester }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">You have no registered courses.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>