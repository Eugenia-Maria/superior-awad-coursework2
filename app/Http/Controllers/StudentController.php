<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_number' => 'required|unique:students,student_number',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'nullable|string|max:20',
            'program' => 'nullable|string|max:255',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')
            ->with('success', 'Student added successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'student_number' => 'required|unique:students,student_number,' . $student->id,
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'nullable|string|max:20',
            'program' => 'nullable|string|max:255',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully.');
    }

    public function myCourses()
{
    $student = Student::where('user_id', auth()->id())->firstOrFail();

    $courses = $student->courses;

    return view('students.courses', compact('student', 'courses'));
}
}