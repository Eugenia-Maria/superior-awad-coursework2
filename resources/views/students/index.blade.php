
{{-- Extend the reusable application layout --}}
<x-app-layout>

    {{-- Page heading displayed in the application header --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Students Management
        </h2>
    </x-slot>

    {{-- Main content section --}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Display success message after a successful operation --}}
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Button for navigating to the student registration form --}}
            <div class="mb-5">
                <a href="{{ route('students.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                    + Add Student
                </a>
            </div>

            {{-- Students table container --}}
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">

                {{-- Display student records in a structured table --}}
                <table class="w-full text-left border-collapse">

                    {{-- Table headings --}}
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="p-3">Student Number</th>
                            <th class="p-3">First Name</th>
                            <th class="p-3">Last Name</th>
                            <th class="p-3">Email</th>
                            <th class="p-3">Phone</th>
                            <th class="p-3">Program</th>
                            <th class="p-3">Actions</th>
                        </tr>
                    </thead>

                    {{-- Table body containing student records --}}
                    <tbody>

                        {{-- Loop through all students passed from the controller --}}
                        @forelse($students as $student)
                            <tr class="border-b hover:bg-gray-50">

                                {{-- Display individual student details --}}
                                <td class="p-3">{{ $student->student_number }}</td>
                                <td class="p-3">{{ $student->first_name }}</td>
                                <td class="p-3">{{ $student->last_name }}</td>
                                <td class="p-3">{{ $student->email }}</td>
                                <td class="p-3">{{ $student->phone }}</td>
                                <td class="p-3">{{ $student->program }}</td>

                                {{-- Provide actions for managing student records --}}
                                <td class="p-3 whitespace-nowrap">

                                    {{-- View student details --}}
                                    <a href="{{ route('students.show', $student->id) }}"
                                       class="text-blue-600 hover:underline">
                                        View
                                    </a>

                                    {{-- Edit student information --}}
                                    <a href="{{ route('students.edit', $student->id) }}"
                                       class="text-green-600 hover:underline ml-2">
                                        Edit
                                    </a>

                                    {{-- Delete student record --}}
                                    <form action="{{ route('students.destroy', $student->id) }}"
                                          method="POST"
                                          class="inline"
                                          onsubmit="return confirm('Are you sure you want to delete this student?')">

                                        {{-- CSRF protection --}}
                                        @csrf

                                        {{-- Specify the DELETE HTTP method --}}
                                        @method('DELETE')

                                        <button type="submit"
                                                class="text-red-600 hover:underline ml-2">
                                            Delete
                                        </button>

                                    </form>

                                </td>
                            </tr>

                        {{-- Display a message when no student records exist --}}
                        @empty
                            <tr>
                                <td colspan="7" class="p-5 text-center text-gray-500">
                                    No students found.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

            </div>

        </div>
    </div>

</x-app-layout>
