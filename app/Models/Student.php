<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student(){
        return $this->hasMany('App/Student', 'student_id', 'id');
    }

    public function studentExam(){
        return $this->hasMany('App/Exam', 'student_id', 'id');
    }

}