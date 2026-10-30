<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // ---------- ADMIN ----------
        // updateOrCreate: if a user with this email exists, reuse it;
        // otherwise create it. This prevents duplicates.
        $admin = User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'System Admin',
                'password' => Hash::make('password'), // never store plain passwords
            ]
        );
        $admin->syncRoles('admin'); // give this user the admin role

        // ---------- LECTURERS ----------
        $lecturers = [
            ['Dr. Grace Nakato', 'grace.nakato@example.com'],
            ['Mr. Peter Okello', 'peter.okello@example.com'],
        ];

        foreach ($lecturers as [$name, $email]) {
            $lecturer = User::updateOrCreate(
                ['email' => $email],
                ['name' => $name, 'password' => Hash::make('password')]
            );
            $lecturer->syncRoles('lecturer');
        }

        // ---------- STUDENTS ----------
        // Each student needs a USER (login) and a STUDENT (details),
        // linked by students.user_id.
        $students = [
            // [student number, first name, last name, email]
            ['2026/001', 'John',  'Mukasa',       'john.mukasa@example.com'],
            ['2026/002', 'Mary',  'Namukasa',     'mary.namukasa@example.com'],
            ['2026/003', 'David', 'Ssemwogerere', 'david.s@example.com'],
            ['2026/004', 'Sarah', 'Akello',       'sarah.akello@example.com'],
            ['2026/005', 'Brian', 'Kato',         'brian.kato@example.com'],
        ];

        foreach ($students as [$number, $first, $last, $email]) {
            // Step 1: the login account
            $user = User::updateOrCreate(
                ['email' => $email],
                ['name' => "$first $last", 'password' => Hash::make('password')]
            );
            $user->syncRoles('student');

            // Step 2: the student record, found by its unique student number
            Student::updateOrCreate(
                ['student_number' => $number],
                [
                    'user_id'    => $user->id,
                    'first_name' => $first,
                    'last_name'  => $last,
                    'email'      => $email,
                ]
            );
        }
    }
}