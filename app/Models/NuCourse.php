<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NuCourse extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'type',
        'credit',
        'status',
    ];

    public function program()
    {
        return $this->belongsTo(NuProgram::class, 'type');
    }

    public function subject()
    {
        return $this->belongsTo(NuSubject::class);
    }
}
