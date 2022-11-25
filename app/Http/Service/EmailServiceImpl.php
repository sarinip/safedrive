<?php

namespace App\Http\Service;

use App\Mail\NewScheduleEmail;
use App\Mail\NewScheduleStatusEmail;
use App\Models\Instructor;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class EmailServiceImpl implements EmailService
{

    public function sendNewScheduleEmail(Schedule $schedule, Instructor $instructor, Student $student)
    {
        // TODO: Implement sendNewScheduleEmail() method.
        $data = array(
            'schedule_date' => $schedule->schedule_date,
            'session' => $schedule->session,
            'session_time' => $schedule->session_from_time,
            'student_name' => $student->fname . ' ' . $student->lname,
            'instructor_name' => $instructor->fname . ' ' . $instructor->lname,
        );

        $user = User::where('id',$instructor->user_id)->first();

        Mail::to($user->email)->bcc('123456789ymail@gmail.com')->send(new NewScheduleEmail($data));

    }

    public function sendScheduleStatusEmail(Schedule $schedule, Instructor $instructor, Student $student)
    {
        // TODO: Implement sendScheduleStatusEmail() method.
        $data = array(
            'schedule_date' => $schedule->schedule_date,
            'session' => $schedule->session,
            'session_time' => $schedule->session_from_time,
            'student_name' => $student->fname . ' ' . $student->lname,
            'instructor_name' => $instructor->fname . ' ' . $instructor->lname,
            'status' => $schedule->status,
        );

        $user = User::where('id',$student->user_id)->first();

        Mail::to($user->email)->bcc('123456789ymail@gmail.com')->send(new NewScheduleStatusEmail($data));
    }
}
