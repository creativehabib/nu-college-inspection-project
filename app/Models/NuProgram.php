<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NuProgram extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'type',
        'status',
    ];
}
