<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();// Clear cached roles and permissions
        
        // Create roles
        $all =['manage students','manage courses','manage registrations','manage users',
        'view assigned courses','view course students',
        'view courses','register course','view own registrations'];

        foreach ($all as $p) Permission::firstOrCreate(['name' => $p, 'guard_name' => 'web']);// Create permissions

        // Create roles and assign permissions
        Role::firstOrCreate(['name' => 'admin'])->syncPermissions(
        ['manage students','manage courses','manage registrations','manage users']);
        Role::firstOrCreate(['name' => 'lecturer'])->syncPermissions(
        ['view assigned courses','view course students']);
        Role::firstOrCreate(['name' => 'student'])->syncPermissions(
        ['view courses','register course','view own registrations']);
    }
}
