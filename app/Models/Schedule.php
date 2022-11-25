<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function instructor()
    {
    return $this->belongsTo(Instructor::class);
    }

    public function student()
    {
    return $this->belongsTo(Student::class);
    }
}