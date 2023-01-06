<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Insructor;

class Vehicle extends Model
{
    protected $guarded = [];

    public function vehicle()
    {
    return $this->hasOne('App/Instructor', 'instructor_id', 'id');

    }

    public function instructor()
    {
    return $this->belongsTo(Instructor::class);
    }
}
