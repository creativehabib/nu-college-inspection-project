<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
//    protected $fillable = ['name', 'bn_name', 'division_id', 'lat', 'lon', 'url'];
    protected $guarded = [];
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
