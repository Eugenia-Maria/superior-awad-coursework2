<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    public function run(): void
    {
        // student number => course codes (these codes exist in your database)
        $plan = [
            '2026/001' => ['BCS101', 'BCS102'],
            '2026/002' => ['BCS101', 'BCS103'],
            '2026/003' => ['BCS102', 'BCS104'],
            '2026/004' => ['BCS101', 'BCS102', 'BCS103'],
            '2026/005' => ['BCS104'],
        ];

        foreach ($plan as $studentNumber => $courseCodes) {
            $student = Student::where('student_number', $studentNumber)->first();

            if (!$student) {
                $this->command->warn("Student $studentNumber not found");
                continue;
            }

            $courseIds = Course::whereIn('code', $courseCodes)->pluck('id');

            if ($courseIds->isEmpty()) {
                $this->command->warn("No courses found for $studentNumber");
                continue;
            }

            $student->courses()->syncWithoutDetaching($courseIds);
        }
    }
}