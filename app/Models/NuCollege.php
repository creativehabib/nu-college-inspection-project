<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NuCollege extends Model
{
    protected $guarded = [];

    public function nuPrograms()
    {
        return $this->belongsToMany(NuProgram::class, 'nu_college_programs', 'college_id', 'program_id');
    }

    public function nuCourses()
    {
        return $this->belongsToMany(NuCourse::class, 'nu_college_courses', 'college_id', 'course_id');
    }

    public function nuSubjects()
    {
        return $this->belongsToMany(NuSubject::class, 'nu_college_subjects', 'college_id', 'subject_id');
    }

    // user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
