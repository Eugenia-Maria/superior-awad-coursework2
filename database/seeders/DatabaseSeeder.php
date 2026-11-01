<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Integrator correction: without these calls `migrate --seed` created no
        // roles and no users, so the role:* middleware denied every request.
        // Order matters: roles before users, users before courses (lecturer_id),
        // courses before registrations.
        $this->call([
            RolePermissionSeeder::class,
            UserSeeder::class,
            CourseSeeder::class,
            RegistrationSeeder::class,
        ]);
    }
}
