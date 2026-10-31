
{{-- Extend the reusable application layout --}}
<x-app-layout>

    {{-- Page heading --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Courses Management
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

            {{-- Button for adding a new course --}}
            <div class="mb-5">
                <a href="{{ route('courses.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                    + Add Course
                </a>
            </div>

            {{-- Courses table container --}}
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">

                {{-- Display all available courses --}}
                <table class="w-full text-left border-collapse">

                    {{-- Table headings --}}
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="p-3">Course Code</th>
                            <th class="p-3">Course Name</th>
                            <th class="p-3">Description</th>
                            <th class="p-3">Credit Units</th>
                            <th class="p-3">Actions</th>
                        </tr>
                    </thead>

                    {{-- Table body containing course records --}}
                    <tbody>

                        {{-- Loop through all courses passed from the controller --}}
                        @forelse($courses as $course)
                            <tr class="border-b hover:bg-gray-50">

                                {{-- Display course information --}}
                                <td class="p-3">{{ $course->course_code }}</td>
                                <td class="p-3">{{ $course->course_name }}</td>
                                <td class="p-3">{{ $course->description }}</td>
                                <td class="p-3">{{ $course->credit_units }}</td>

                                {{-- Course management actions --}}
                                <td class="p-3 whitespace-nowrap">

                                    {{-- View course details --}}
                                    <a href="{{ route('courses.show', $course->id) }}"
                                       class="text-blue-600 hover:underline">
                                        View
                                    </a>

                                    {{-- Edit course information --}}
                                    <a href="{{ route('courses.edit', $course->id) }}"
                                       class="text-green-600 hover:underline ml-2">
                                        Edit
                                    </a>

                                    {{-- Delete course record --}}
                                    <form action="{{ route('courses.destroy', $course->id) }}"
                                          method="POST"
                                          class="inline"
                                          onsubmit="return confirm('Are you sure you want to delete this course?')">

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

                        {{-- Display message when no courses are available --}}
                        @empty
                            <tr>
                                <td colspan="5" class="p-5 text-center text-gray-500">
                                    No courses found.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</x-app-layout>
