<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::middleware(['auth', 'role:Lecturer'])->group(function () {
    Route::get('/lecturer/courses', [CourseController::class, 'lecturerCourses'])
        ->name('lecturer.courses');
});