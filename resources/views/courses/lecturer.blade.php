<!DOCTYPE html>
<html>
<head>
    <title>My Assigned Courses</title>
</head>
<body>

    <h1>My Assigned Courses</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Description</th>
                <th>Credit Units</th>
            </tr>
        </thead>

        <tbody>
            @forelse($courses as $course)
                <tr>
                    <td>{{ $course->code }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->credit_units }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No courses assigned to you yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>