<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth', 'role:Administrator'])->get(
    '/admin/dashboard',
    [DashboardController::class, 'admin']
)->name('admin.dashboard');

Route::middleware(['auth', 'role:Lecturer'])->get(
    '/lecturer/dashboard',
    [DashboardController::class, 'lecturer']
)->name('lecturer.dashboard');

Route::middleware(['auth', 'role:Student'])->get(
    '/student/dashboard',
    [DashboardController::class, 'student']
)->name('student.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

foreach (['students', 'courses', 'users', 'lecturer', 'registrations'] as $f) {
    require __DIR__."/{$f}.php";
}