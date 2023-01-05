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


//Subscription
Route::get('/subscription', function () {
    $packages = \App\Models\Package::all();
    return view('student.packageselect', array('packages' => $packages));
})->name('subscription');


Route::get('/instructor/register', function () {
    return view('instructor.register');
});

// Route::post('/instructor/store', function (\App\Http\Requests\InstructorRequest $request) {
//     return (new \App\Http\Controllers\InstructorController())->store($request);
// });

Route::post('/authentication', function (\Illuminate\Http\Request $request) {
    return (new \App\Http\Controllers\AuthController())->login($request);
});

Route::post('/student/store', function (\App\Http\Requests\StudentRequest $request) {
    return (new \App\Http\Controllers\StudentController)->store($request);
});

Route::post('/package/subscribe', function (\App\Http\Requests\PackageSelectRequest $request) {
    return (new \App\Http\Controllers\PackageController())->subscribe($request);
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', function () {
        $exams = \App\Models\Exam::where('student_id', session()->get('student_id')[0])->get();
        $schedules = \App\Models\Schedule::where('student_id', session()->get('student_id')[0])->get();
        $payments = \App\Models\Payment::where('student_id', session()->get('student_id')[0])->get();
        return view('student.index', array('schedules' => $schedules), array('payments' => $payments, 'exams' => $exams));
    })->name('dashboard');

    Route::get('/student/appointment', function () {
        $instructors = \App\Models\Instructor::orderBy('id', 'DESC')->get();
        $packages = \App\Models\StudentPackage::getStudentPackages();
        return view('student.sheduleclass', array('instructors' => $instructors, 'packages' => $packages));
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
    Route::get('/instructor/profile/{id}', function ($id) {
        return (new \App\Http\Controllers\InstructorController)->show($id);
    })->name('instructor.profile');

    Route::get('/instructor', function () {
        return view('instructor.instructornew');
    });

    Route::get('/instructor/new', function () {
        return (new \App\Http\Controllers\InstructorController())->showTable();
    })->name('instructor.new');

//    Route::post('/instructor/store', function (\App\Http\Requests\InstructorRequest $request) {
//        return (new \App\Http\Controllers\InstructorController())->store($request);
//    });

    Route::get('/instructor/edit/{id}', function ($id) {
        return (new \App\Http\Controllers\InstructorController)->show($id);
    });

    Route::get('/instructor/delete/{id}', function ($id) {
        return (new \App\Http\Controllers\InstructorController)->destroy($id);
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
        return ('student.reciept');
    })->name('reciept');


    Route::get('/reciept/{id}', function ($id) {
        return (new \App\Http\Controllers\PaymentController())->show($id);
    });

    // Vehicle Routes
    Route::get('/vehicle', function () {
        return view('instructor.vehiclenew');
    });

    Route::get('/vehicle/new', function () {
        return (new \App\Http\Controllers\VehicleController())->showTable();
    })->name('vehicle.new');

    Route::post('/vehicle/store', function (\App\Http\Requests\VehicleRequest $request) {
        return (new \App\Http\Controllers\VehicleController())->store($request);
    });

    Route::get('/vehicle/edit/{id}', function ($id) {
        return (new \App\Http\Controllers\VehicleController)->show($id);
    });

    Route::get('/vehicle/delete/{id}', function ($id) {
        return (new \App\Http\Controllers\VehicleController)->destroy($id);
    });

    // Package Routes
    Route::get('/package', function () {
        $packages = \App\Models\Package::all();
        return view('admin.packagenew', array('packages' => $packages));
    });

    Route::get('/package/new', function () {
        return (new \App\Http\Controllers\PackageController())->showTable();
    })->name('package.new');

    Route::post('/package/store', function (\App\Http\Requests\PackageRequest $request) {
        return (new \App\Http\Controllers\PackageController())->store($request);
    });

    Route::get('/package/edit/{id}', function ($id) {
        return (new \App\Http\Controllers\PackageController)->show($id);
    });

    Route::get('/package/delete/{id}', function ($id) {
        return (new \App\Http\Controllers\PackageController)->destroy($id);
    });

    Route::get('/core-dashboard', function () {
        $studentdata = \App\Http\Service\ReportServiceimpl::getStudentRegistrationData();
        $paymentdata = \App\Http\Service\ReportServiceimpl::getPaymentData();
        return view('admin.index', array('studentdata' => $studentdata, 'paymentdata' => $paymentdata));
    })->name('admin.dashboard');


    // Exam Routes
    Route::get('/exam', function () {
        return view('amind.examnew');

    });

    Route::get('/exam/new', function () {
        return (new \App\Http\Controllers\ExamController())->showTable();
    })->name('exam.new');

    Route::post('/exam/store', function (\App\Http\Requests\ExamRequest $request) {
        return (new \App\Http\Controllers\ExamController())->store($request);
    });

    Route::get('/exam/edit/{id}', function ($id) {
        return (new \App\Http\Controllers\ExamController)->show($id);
    });

    Route::get('/exam/delete/{id}', function ($id) {
        return (new \App\Http\Controllers\ExamController)->destroy($id);
    });

    // Reports
    Route::get('/report/classschedule', function () {
        return (new \App\Http\Controllers\ScheduleController())->viewTable();
    })->name('reportschedule');

    Route::get('/report/vehicle', function () {
        return (new \App\Http\Controllers\VehicleController())->viewTable();
    })->name('reportvehicle');

    Route::get('/report/student', function () {
        return (new \App\Http\Controllers\StudentController())->viewTable();
    })->name('reportstudent');

    Route::get('/report/instructor', function () {
        return (new \App\Http\Controllers\InstructorController())->viewTable();
    })->name('reportinstructor');

    Route::get('/report/payment', function () {
        return (new \App\Http\Controllers\PaymentController())->viewTable();
    })->name('reportpayment');

    Route::get('/report/exam', function () {
        return (new \App\Http\Controllers\ExamController())->viewTable();
    })->name('reportexam');


    //log out
    Route::get('/logout', function () {
        return (new \App\Http\Controllers\AuthController())->logout();
    });

    Route::get('/theory-class/create', function () {
        $instructors = \App\Models\Instructor::orderBy('id', 'DESC')->get();
        return view('theory-class.create', array('instructors' => $instructors));
    });

    Route::post('/theory-class/store', function (\App\Http\Requests\TheoryClassRequest $request) {
        return (new \App\Http\Controllers\TheoryClassController())->store($request);
    });

    Route::get('/theory-class/list', function () {
        $classes = \App\Models\TheoryClass::all();
        return view('theory-class.list', array('classes' => $classes));
    })->name('theory.list');

    Route::get('/theory-class/edit/{id}', function ($id) {
        $class = \App\Models\TheoryClass::where('id', $id)->first();
        $instructors = \App\Models\Instructor::orderBy('id', 'DESC')->get();
        return view('theory-class.update', array('class' => $class, 'instructors' => $instructors));
    });

    Route::get('/theory-class/remove/{id}', function ($id) {
        return (new \App\Http\Controllers\TheoryClassController())->destroy($id);
    });

    Route::get('/theory-class/student-view', function () {
        $id = session()->get('student_id')[0];
        $classes = \App\Models\TheoryClass::getActiveClasses($id);
        return view('student.classattend', array('classes' => $classes));
    })->name('theory.class.attend');


    Route::get('/theory-class/reserve/{id}', function ($id) {
        return (new \App\Http\Controllers\TheoryClassController())->bookClass($id);
    });


});