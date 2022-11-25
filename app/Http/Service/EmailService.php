<?php

namespace App\Http\Service;

use App\Models\Instructor;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\Payment;

interface EmailService
{

    public function sendNewScheduleEmail(Schedule $schedule, Instructor $instructor,Student $student);

    public function sendScheduleStatusEmail(Schedule $schedule, Instructor $instructor, Student $student);

    public function sendPaymentStatusEmail(Payment $payment, Student $student);

}