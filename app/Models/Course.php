<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'code',
        'title',
        'description',
        'credit_units',
        'lecturer_id',
    ];

    public function lecturer()
    {
        return $this->belongsTo(User::class, 'lecturer_id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_registrations')
                    ->withTimestamps()
                    ->withPivot('semester');
    }
}
