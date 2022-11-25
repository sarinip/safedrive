<?php

namespace App\Http\Service;

use App\Models\Instructor;
use App\Models\Schedule;
use App\Models\Student;

interface EmailService
{

    public function sendNewScheduleEmail(Schedule $schedule, Instructor $instructor,Student $student);

    public function sendScheduleStatusEmail(Schedule $schedule, Instructor $instructor, Student $student);

}
