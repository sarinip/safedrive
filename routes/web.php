<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
return view('welcome');
});*/

Route::get('/', function () {
    return view('login');
})->name('login');


// Student Routes
Route::get('/student/register', function () {
    return view('student.register');
});

Route::post('/authentication', function (\Illuminate\Http\Request $request) {
    return (new \App\Http\Controllers\AuthController())->login($request);
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', function () {
        $schedules = \App\Models\Schedule::where('student_id', session()->get('student_id')[0])->get();
        return view('student.index', array('schedules' => $schedules));
    })->name('dashboard');

    Route::get('/student/appointment', function () {
        $instructors = \App\Models\Instructor::orderBy('id', 'DESC')->get();
        return view('student.sheduleclass', array('instructors' => $instructors));
    });

    Route::post('/student/store', function (\App\Http\Requests\StudentRequest $request) {
        return (new \App\Http\Controllers\StudentController)->store($request);
    });


    Route::post('/schedule/store', function (\App\Http\Requests\ScheduleRequest $request) {
        return (new \App\Http\Controllers\ScheduleController())->store($request);
    });

    Route::post('/schedule/getschdulecount', function (\Illuminate\Http\Request $request) {
        return (new \App\Http\Controllers\ScheduleController())->getScheduleCount($request);
    });

    Route::get('/schedule/approve/{id}', function ($id) {
        return (new \App\Http\Controllers\ScheduleController())->scheduleApprove($id);
    });

    Route::get('/schedule/reject/{id}', function ($id) {
        return (new \App\Http\Controllers\ScheduleController())->scheduleReject($id);
    });

    Route::get('/instructor/calenderview', function () {
        $schedules = \App\Http\Service\ScheduleServiceImpl::getInstructorScheduleData();
        return view('instructor.calender', array('schedules' => $schedules->toJson()));
    });

    Route::get('/student/calenderview', function () {
        $schedules = \App\Http\Service\ScheduleServiceImpl::getStudentScheduleData();
        return view('instructor.calender', array('schedules' => $schedules->toJson()));
    });


    Route::get('/student/profile/{id}', function ($id) {
        return (new \App\Http\Controllers\StudentController)->show($id);
    });


// Instructor Routes
    Route::get('/instructor/register', function () {
        return view('instructor.register');
    });

    Route::post('/instructor/store', function (\App\Http\Requests\InstructorRequest $request) {
        return (new \App\Http\Controllers\InstructorController())->store($request);
    });

    Route::get('/instructor/profile/{id}', function ($id) {
        return (new \App\Http\Controllers\InstructorController)->show($id);
    });

    Route::get('/instructor/schedule', function () {
        $schedules = \App\Models\Schedule::where('instructor_id', session()->get('instructor_id')[0])->get();
        return view('instructor.approval', array('schedules' => $schedules));
    })->name('instructor.schedule');

// Payment Routes
    Route::get('/payment', function () {

        return view('student.payment');
    });


    Route::post('/payment/store', function (\App\Http\Requests\PaymentRequest $request) {
        return (new \App\Http\Controllers\PaymentController())->store($request);
    });

    Route::get('/reciept', function () {
        return view('student.reciept');
    })->name('reciept');


    Route::get('/reciept/{id}', function ($id) {
        return (new \App\Http\Controllers\PaymentController())->show($id);
    });

// Vehicle Routes
    Route::get('/vehicle', function () {
        return view('instructor.vehiclenew');
    });

    Route::post('/vehicle/store', function (\App\Http\Requests\VehicleRequest $request) {
        return (new \App\Http\Controllers\VehicleController())->store($request);
    });

// Route::get('/instructor/profile/{id}', function ($id) {
    // return (new \App\Http\Controllers\VehicleController)->show($id);
// });


// Vehicle Routes
    Route::get('/report/vehicle', function () {
        return (new \App\Http\Controllers\VehicleController())->showTable();
    })->name('vehicle.report');

    Route::get('/logout', function () {
        return (new \App\Http\Controllers\AuthController())->logout();
    });

    Route::get('/core-dashboard', function () {
        $studentdata = \App\Http\Service\ReportServiceimpl::getStudentRegistrationData();
        $paymentdata = \App\Http\Service\ReportServiceimpl::getPaymentData();
        return view('admin.index',array('studentdata'=>$studentdata, 'paymentdata' => $paymentdata));
    });


});
