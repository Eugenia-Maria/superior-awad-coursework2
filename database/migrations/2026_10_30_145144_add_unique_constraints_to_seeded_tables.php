<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->unique('code');
        });

        Schema::table('students', function (Blueprint $table) {
            $table->unique('student_number');
        });

        Schema::table('course_registrations', function (Blueprint $table) {
            $table->unique(['student_id', 'course_id']);
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropUnique(['code']);
        });

        Schema::table('students', function (Blueprint $table) {
            $table->dropUnique(['student_number']);
        });

        Schema::table('course_registrations', function (Blueprint $table) {
            $table->dropUnique(['student_id', 'course_id']);
        });
    }
};