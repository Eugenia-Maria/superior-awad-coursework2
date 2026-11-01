<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CourseRegistrationController extends Controller
{
    public function index()
    {
        $registrations = DB::table('course_registrations')
            ->join('students', 'course_registrations.student_id', '=', 'students.id')
            ->join('courses', 'course_registrations.course_id', '=', 'courses.id')
            ->select(
                'course_registrations.*',
                'students.first_name',
                'students.last_name',
                'students.student_number',
                'courses.code',
                'courses.title'
            )
            ->get();

        return view('registrations.index', compact('registrations'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::all();

        return view('registrations.create', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => [
                'required',
                'exists:courses,id',
                Rule::unique('course_registrations', 'course_id')
                    ->where('student_id', $request->student_id),
            ],
            'semester' => 'required|string|max:50',
        ], [
            'course_id.unique' => 'This student is already registered for this course.',
        ]);

        DB::table('course_registrations')->insert([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'semester' => $request->semester,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('registrations.index')
            ->with('success', 'Course registered successfully.');
    }

    public function destroy($registration)
    {
        DB::table('course_registrations')
            ->where('id', $registration)
            ->delete();

        return redirect()->route('registrations.index')
            ->with('success', 'Registration deleted successfully.');
    }
}