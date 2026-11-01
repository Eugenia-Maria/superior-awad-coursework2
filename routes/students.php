<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::middleware(['auth', 'role:Administrator'])->group(function () {
    Route::resource('students', StudentController::class);
});

Route::middleware(['auth', 'role:Student'])->group(function () {
    Route::get('/my-courses', [StudentController::class, 'myCourses'])
        ->name('students.courses');
});