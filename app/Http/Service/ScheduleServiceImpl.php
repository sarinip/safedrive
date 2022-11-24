<?php

namespace App\Http\Service;

use App\Http\Requests\ScheduleRequest;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleServiceImpl implements ScheduleService
{

    public function store(ScheduleRequest $request, User $user)
    {
        // TODO: Implement store() method.

        try {

            $schedule = Schedule::where('student_id', $user->id)->where('instructor_id', $request->instructor)->where('schedule_date', $request->scheduledate)->where('session', $request->schedulesession)->where('session_from_time', $request->timeslot)->first();

            if (!empty($schedule)) {
                return redirect()->back()->with('schedule_error_message', "This Time Slot Already Booked!!");
            }

            $schedule = new Schedule();
            $schedule->student_id = $user->id;
            $schedule->instructor_id = $request->instructor;
            $schedule->session = $request->schedulesession;
            $schedule->schedule_date = $request->scheduledate;
            $schedule->session_from_time = $request->timeslot;
            $schedule->status = 'PENDING';
            $schedule->save();


        } catch (\Exception $e) {
            return redirect()->back();
        }


        return redirect()->route("dashboard");
    }

    public function getScheduleCount(Request $request)
    {
        // TODO: Implement getScheduleCount() method.
        $search_query = Schedule::where('status', 'APPROVED');

        if (!empty($request->instructor)) {
            $search_query->where('instructor_id', $request->instructor);
        }

        if (!empty($request->schedulesession)) {
            $search_query->where('session', $request->schedulesession);
        }

        if (!empty($request->scheduledate)) {
            $search_query->where('schedule_date', $request->scheduledate);
        }

        if (!empty($request->timeslot)) {
            $search_query->where('session_from_time', $request->timeslot);
        }

        return $search_query->count();


    }

    public function scheduleApprove($id)
    {
        // TODO: Implement scheduleApprove() method.
        $schedule = Schedule::where('id', $id)->first();
        $schedule->status = 'APPROVED';

        $schedule->save();

        return redirect()->route("instructor.schedule");

    }

    public function scheduleReject($id)
    {
        // TODO: Implement scheduleReject() method.
        $schedule = Schedule::where('id', $id)->first();
        $schedule->status = 'REJECTED';

        $schedule->save();

        return redirect()->route("instructor.schedule");
    }


    public static function getInstructorScheduleData()
    {
        // TODO: Implement getInstructorScheduleData() method.
        $datepattern = "'%y-%m-%d'";
        $timepattern = "'%l:%i %p'";
        $seperator = "' '";

        return Schedule::where('instructor_id', session()->get('instructor_id')[0])->where('status', 'APPROVED')->select('session AS title',DB::raw('CAST(CONCAT(DATE_FORMAT(schedule_date, '.$datepattern.'),'.$seperator. ',STR_TO_DATE(session_from_time, '.$timepattern.'))AS DATETIME) start'),DB::raw('DATE_ADD(CAST(CONCAT(DATE_FORMAT(schedule_date, '.$datepattern.'), '.$seperator.',STR_TO_DATE(session_from_time, '.$timepattern.'))AS DATETIME),INTERVAL 60 MINUTE) end'),'status as description')->get();
    }

    public static function getStudentScheduleData()
    {
        // TODO: Implement getStudentScheduleData() method.
        $datepattern = "'%y-%m-%d'";
        $timepattern = "'%l:%i %p'";
        $seperator = "' '";

        return Schedule::where('student_id', session()->get('student_id')[0])->where('status', 'APPROVED')->select('session AS title',DB::raw('CAST(CONCAT(DATE_FORMAT(schedule_date, '.$datepattern.'),'.$seperator. ',STR_TO_DATE(session_from_time, '.$timepattern.'))AS DATETIME) start'),DB::raw('DATE_ADD(CAST(CONCAT(DATE_FORMAT(schedule_date, '.$datepattern.'), '.$seperator.',STR_TO_DATE(session_from_time, '.$timepattern.'))AS DATETIME),INTERVAL 60 MINUTE) end'),'status as description')->get();
    }
}
