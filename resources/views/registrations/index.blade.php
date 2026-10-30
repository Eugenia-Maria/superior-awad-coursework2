<!DOCTYPE html>
<html>
<head>
    <title>Course Registrations</title>
</head>
<body>

    <h1>Course Registrations</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('registrations.create') }}">Register Student for Course</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Student Number</th>
                <th>Student Name</th>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Semester</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($registrations as $registration)
                <tr>
                    <td>{{ $registration->student_number }}</td>
                    <td>{{ $registration->first_name }} {{ $registration->last_name }}</td>
                    <td>{{ $registration->code }}</td>
                    <td>{{ $registration->title }}</td>
                    <td>{{ $registration->semester }}</td>
                    <td>
                        <form action="{{ route('registrations.destroy', $registration->id) }}" method="POST">
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