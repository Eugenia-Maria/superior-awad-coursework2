<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // Find the two lecturers created by UserSeeder.
        // That is why UserSeeder must run before this one.
        $grace = User::where('email', 'grace.nakato@example.com')->first();
        $peter = User::where('email', 'peter.okello@example.com')->first();

        $courses = [
            // [code, title, credit units, lecturer]
            ['BUC3131', 'Advanced Web Application Development', 4, $grace],
            ['BUC3132', 'Database Systems',                      3, $grace],
            ['BUC3133', 'Software Engineering',                  3, $peter],
            ['BUC3134', 'Business Information Systems',          3, $peter],
        ];

        foreach ($courses as [$code, $title, $units, $lecturer]) {
            // Course code is unique, so we search by it (no duplicates).
            Course::updateOrCreate(
                ['code' => $code],
                [
                    'title'        => $title,
                    'description'  => "$title course.",
                    'credit_units' => $units,
                    'lecturer_id'  => $lecturer?->id, // null if lecturer missing
                ]
            );
        }
    }
}