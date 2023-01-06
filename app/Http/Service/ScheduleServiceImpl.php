<?php

namespace App\Http\Service;

use App\Http\Requests\ScheduleRequest;
use App\Models\Instructor;
use App\Models\Package;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\StudentPackage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleServiceImpl implements ScheduleService
{

    private EmailService $emailService;

    public function __construct()
    {
        $this->emailService = new EmailServiceImpl();
    }

    public function store(ScheduleRequest $request, User $user)
    {
        // TODO: Implement store() method.

        try {

            $student_id = session()->get('student_id')[0];

            $instructor_count = Schedule::where('instructor_id', $request->instructor)->where('schedule_date', $request->scheduledate)->where('session_from_time', $request->timeslot)->count();
            $schdule_count = Schedule::where('student_id', $student_id)->where('schedule_date', $request->scheduledate)->where('session_from_time', $request->timeslot)->count();

            if ($instructor_count > 0 || $schdule_count > 0) {
                return redirect()->back()->with('schedule_error_message', "This Time Slot Already Booked!!");
            }

            $schedule = new Schedule();
            $schedule->student_id = $student_id;
            $schedule->instructor_id = $request->instructor;
            $schedule->session = $request->schedulesession;
            $schedule->schedule_date = $request->scheduledate;
            $schedule->session_from_time = $request->timeslot;
            $schedule->status = 'PENDING';
            $schedule->save();

            $student = Student::where('id', $schedule->student_id)->first();
            $instructor = Instructor::where('id', $schedule->instructor_id)->first();

            $this->emailService->sendNewScheduleEmail($schedule, $instructor, $student);


        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
            return redirect()->back();

        }


        return redirect()->route("dashboard");
    }

    public function getScheduleCount(Request $request)
    {
        // TODO: Implement getScheduleCount() method.

        $res = [];

        $package = StudentPackage::leftJoin('packages', 'student_packages.package_id', '=', 'packages.id')->where('student_packages.student_id', session()->get('student_id')[0])->where('packages.vehicle_type', $request->schedulesession)->select('packages.hours')->first();

        $search_query = Schedule::where('status', 'APPROVED');

        if (!empty($request->schedulesession)) {
            $search_query->where('session', $request->schedulesession);
        }

        $coverage = (float)$search_query->count() / 2;
        $remain = (float)$package->hours - $coverage;

        array_push($res, $remain);
        array_push($res, $coverage);

        return $res;


    }

    public function scheduleApprove($id)
    {
        // TODO: Implement scheduleApprove() method.
        $schedule = Schedule::where('id', $id)->first();
        $schedule->status = 'APPROVED';

        $schedule->save();

        $student = Student::where('id', $schedule->student_id)->first();
        $instructor = Instructor::where('id', $schedule->instructor_id)->first();

        $this->emailService->sendScheduleStatusEmail($schedule, $instructor, $student);

        return redirect()->route("instructor.schedule");

    }

    public function scheduleReject($id)
    {
        // TODO: Implement scheduleReject() method.
        $schedule = Schedule::where('id', $id)->first();
        $schedule->status = 'REJECTED';

        $schedule->save();

        $student = Student::where('id', $schedule->student_id)->first();
        $instructor = Instructor::where('id', $schedule->instructor_id)->first();

        $this->emailService->sendScheduleStatusEmail($schedule, $instructor, $student);

        return redirect()->route("instructor.schedule");
    }


    public static function getInstructorScheduleData()
    {
        // TODO: Implement getInstructorScheduleData() method.
        $datepattern = "'%y-%m-%d'";
        $timepattern = "'%l:%i %p'";
        $seperator = "' '";

        return Schedule::where('instructor_id', session()->get('instructor_id')[0])->where('status', 'APPROVED')->select('session AS title', DB::raw('CAST(CONCAT(DATE_FORMAT(schedule_date, ' . $datepattern . '),' . $seperator . ',STR_TO_DATE(session_from_time, ' . $timepattern . '))AS DATETIME) start'), DB::raw('DATE_ADD(CAST(CONCAT(DATE_FORMAT(schedule_date, ' . $datepattern . '), ' . $seperator . ',STR_TO_DATE(session_from_time, ' . $timepattern . '))AS DATETIME),INTERVAL 60 MINUTE) end'), 'status as description')->get();
    }

    public static function getStudentScheduleData()
    {
        // TODO: Implement getStudentScheduleData() method.
        $datepattern = "'%y-%m-%d'";
        $timepattern = "'%l:%i %p'";
        $seperator = "' '";

        return Schedule::where('student_id', session()->get('student_id')[0])->where('status', 'APPROVED')->select('session AS title', DB::raw('CAST(CONCAT(DATE_FORMAT(schedule_date, ' . $datepattern . '),' . $seperator . ',STR_TO_DATE(session_from_time, ' . $timepattern . '))AS DATETIME) start'), DB::raw('DATE_ADD(CAST(CONCAT(DATE_FORMAT(schedule_date, ' . $datepattern . '), ' . $seperator . ',STR_TO_DATE(session_from_time, ' . $timepattern . '))AS DATETIME),INTERVAL 60 MINUTE) end'), 'status as description')->get();
    }

    public function viewTable()
    {
        $schedules = Schedule::all();
        return view('admin.reportpracticalclass', ['schedules' => $schedules]);
    }
}
