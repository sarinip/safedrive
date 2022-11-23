<?php

namespace App\Http\Service;

use App\Http\Requests\ScheduleRequest;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;

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
        $search_query = Schedule::where('status','APPROVED');

        if(!empty($request->instructor)){
            $search_query->where('instructor_id',$request->instructor);
        }

        if(!empty($request->schedulesession)){
            $search_query->where('session',$request->schedulesession);
        }

        if(!empty($request->scheduledate)){
            $search_query->where('schedule_date',$request->scheduledate);
        }

        if(!empty($request->timeslot)){
            $search_query->where('session_from_time',$request->timeslot);
        }

        return $search_query->count();


    }
}
