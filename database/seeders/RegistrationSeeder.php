<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    public function run(): void
    {
        // Integrator correction: these codes must match the courses created by
        // CourseSeeder (BUC3131-BUC3134); the previous BCS101-BCS104 matched
        // nothing, so every registration was skipped.
        $plan = [
            '2026/001' => ['BUC3131', 'BUC3132'],
            '2026/002' => ['BUC3131', 'BUC3133'],
            '2026/003' => ['BUC3132', 'BUC3134'],
            '2026/004' => ['BUC3131', 'BUC3132', 'BUC3133'],
            '2026/005' => ['BUC3134'],
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