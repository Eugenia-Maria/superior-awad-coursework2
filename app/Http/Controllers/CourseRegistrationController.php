<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CourseRegistrationController extends Controller
{
    /**
     * Display all course registrations.
     */
    public function index()
    {
        // Retrieve registrations together with student and course details
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

        // Return the registrations view with the retrieved records
        return view('registrations.index', compact('registrations'));
    }

    /**
     * Display the form for creating a new course registration.
     */
    public function create()
    {
        // Retrieve all students and courses for the registration form
        $students = Student::all();
        $courses = Course::all();

        // Load the registration form and pass the available students and courses
        return view('registrations.create', compact('students', 'courses'));
    }

    /**
     * Store a new course registration.
     */
    public function store(Request $request)
    {
        // Validate the submitted registration information
        $validated = $request->validate([

            // A student must be selected and must exist in the students table
            'student_id' => [
                'required',
                'integer',
                'exists:students,id'
            ],

            // A course must be selected and must exist in the courses table
            'course_id' => [
                'required',
                'integer',
                'exists:courses,id',

                // Prevent a student from registering for the same course twice
                Rule::unique('course_registrations', 'course_id')
                    ->where('student_id', $request->student_id),
            ],

            // Semester is required, must be text and cannot exceed 50 characters
            'semester' => [
                'required',
                'string',
                'max:50'
            ],

        ], [

            // Custom validation error messages
            'student_id.required' => 'Please select a student.',
            'student_id.exists' => 'The selected student does not exist.',

            'course_id.required' => 'Please select a course.',
            'course_id.exists' => 'The selected course does not exist.',
            'course_id.unique' => 'This student is already registered for this course.',

            'semester.required' => 'Please enter the semester.',
            'semester.max' => 'The semester must not exceed 50 characters.',

        ]);

        // Save the validated registration details into the database
        DB::table('course_registrations')->insert([
            'student_id' => $validated['student_id'],
            'course_id' => $validated['course_id'],
            'semester' => $validated['semester'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect to the registrations page with a success message
        return redirect()->route('registrations.index')
            ->with('success', 'Course registered successfully.');
    }

    /**
     * Delete an existing course registration.
     */
    public function destroy($registration)
    {
        // Find and delete the selected registration
        $deleted = DB::table('course_registrations')
            ->where('id', $registration)
            ->delete();

        // Redirect back with an appropriate message
        if ($deleted) {
            return redirect()->route('registrations.index')
                ->with('success', 'Registration deleted successfully.');
        }

        return redirect()->route('registrations.index')
            ->with('error', 'Registration not found.');
    }
}