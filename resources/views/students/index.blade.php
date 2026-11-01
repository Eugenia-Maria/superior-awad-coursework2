<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

    <h1>Students</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('students.create') }}">Add Student</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Student Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Program</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->student_number }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->program }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}">View</a>
                        <a href="{{ route('students.edit', $student->id) }}">Edit</a>

                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
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