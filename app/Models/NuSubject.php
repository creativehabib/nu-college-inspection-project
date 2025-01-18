<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NuSubject extends Model
{
    // Fillable fields
    protected $fillable = [
        'name',
        'code',
        'description',
        'type',
        'status',
    ];
}
