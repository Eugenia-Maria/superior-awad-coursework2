<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseRegistrationController;

Route::middleware(['auth', 'role:Administrator'])->group(function () {
    Route::get('/registrations', [CourseRegistrationController::class, 'index'])
        ->name('registrations.index');

    Route::get('/registrations/create', [CourseRegistrationController::class, 'create'])
        ->name('registrations.create');

    Route::post('/registrations', [CourseRegistrationController::class, 'store'])
        ->name('registrations.store');

    Route::delete('/registrations/{registration}', [CourseRegistrationController::class, 'destroy'])
        ->name('registrations.destroy');
});