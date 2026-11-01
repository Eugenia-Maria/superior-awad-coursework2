
{{-- Extend the reusable application layout --}}
<x-app-layout>

    {{-- Page heading --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Course Registrations
        </h2>
    </x-slot>

    {{-- Main content section --}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Display success message after registration operations --}}
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Button for registering a student for a course --}}
            <div class="mb-5">
                <a href="{{ route('registrations.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                    + Register Student for Course
                </a>
            </div>

            {{-- Registration records container --}}
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">

                {{-- Display registration records in a table --}}
                <table class="w-full text-left border-collapse">

                    {{-- Table headings --}}
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="p-3">Student Number</th>
                            <th class="p-3">Student Name</th>
                            <th class="p-3">Course Code</th>
                            <th class="p-3">Course Title</th>
                            <th class="p-3">Semester</th>
                            <th class="p-3">Action</th>
                        </tr>
                    </thead>

                    {{-- Table body containing registration records --}}
                    <tbody>

                        {{-- Loop through all registrations --}}
                        @forelse($registrations as $registration)
                            <tr class="border-b hover:bg-gray-50">

                                {{-- Display student number --}}
                                <td class="p-3">
                                    {{ $registration->student_number }}
                                </td>

                                {{-- Display student's full name --}}
                                <td class="p-3">
                                    {{ $registration->first_name }}
                                    {{ $registration->last_name }}
                                </td>

                                {{-- Display course code --}}
                                <td class="p-3">
                                    {{ $registration->code }}
                                </td>

                                {{-- Display course title --}}
                                <td class="p-3">
                                    {{ $registration->title }}
                                </td>

                                {{-- Display semester --}}
                                <td class="p-3">
                                    {{ $registration->semester }}
                                </td>

                                {{-- Registration management actions --}}
                                <td class="p-3">

                                    {{-- Form for deleting a registration --}}
                                    <form action="{{ route('registrations.destroy', $registration->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this registration?')">

                                        {{-- Protect the form against CSRF attacks --}}
                                        @csrf

                                        {{-- Specify the DELETE HTTP method --}}
                                        @method('DELETE')

                                        {{-- Delete registration button --}}
                                        <button type="submit"
                                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
                                            Delete
                                        </button>

                                    </form>

                                </td>
                            </tr>

                        {{-- Display message when no registrations are available --}}
                        @empty
                            <tr>
                                <td colspan="6" class="p-5 text-center text-gray-500">
                                    No course registrations found.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</x-app-layout>
