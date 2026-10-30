<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>

    <h1>Courses</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('courses.create') }}">Add Course</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Course Code</th>
                <th>Title</th>
                <th>Description</th>
                <th>Credit Units</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->code }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->credit_units }}</td>
                    <td>
                        <a href="{{ route('courses.show', $course->id) }}">View</a>
                        <a href="{{ route('courses.edit', $course->id) }}">Edit</a>

                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>