<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::middleware(['auth', 'role:Administrator'])->group(function () {
    Route::resource('courses', CourseController::class);
});