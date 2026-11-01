<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->hasRole('Administrator')) {
            return redirect()->route('admin.dashboard');
        }

        if ($user->hasRole('Lecturer')) {
            return redirect()->route('lecturer.dashboard');
        }

        if ($user->hasRole('Student')) {
            return redirect()->route('student.dashboard');
        }

        abort(403, 'You do not have an assigned role.');
    }

    public function admin()
    {
        return view('dashboards.admin');
    }

    public function lecturer()
    {
        return view('dashboards.lecturer');
    }

    public function student()
    {
        return view('dashboards.student');
    }
}