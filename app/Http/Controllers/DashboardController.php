<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->hasRole('admin'))    return redirect()->route('admin.dashboard');
        if ($user->hasRole('lecturer')) return redirect()->route('lecturer.dashboard');
        if ($user->hasRole('student'))  return redirect()->route('student.dashboard');

        abort(403);
    }

    public function admin()    { return view('dashboards.admin'); }
    public function lecturer() { return view('dashboards.lecturer'); }
    public function student()  { return view('dashboards.student'); }
}
