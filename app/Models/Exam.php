<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded = [];

    public function exam(){

    return $this->hasOne('App/Student', 'student_id', 'id');

    }

    public function student()
    {
    return $this->belongsTo(Student::class);
    }
}