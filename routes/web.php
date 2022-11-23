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


Route::get('/student/register', function () {
    return view('student.register');
});

Route::post('/authentication', function (\Illuminate\Http\Request $request) {
    return (new \App\Http\Controllers\AuthController())->login($request);
});


Route::get('/dashboard', function () {
    $schedules = \App\Models\Schedule::where('student_id',session()->get('student_id')[0] )->get();
    return view('student.index',array('schedules'=>$schedules));
})->name('dashboard');

Route::get('/student/appointment', function () {
    $instructors = \App\Models\Instructor::orderBy('id', 'DESC')->get();
    return view('student.sheduleclass',array('instructors' => $instructors ));
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

Route::get('/student/profile/{id}', function ($id){
    return (new \App\Http\Controllers\StudentController)->show($id);
});

Route::get('/payment', function () {
    return view('student.payment');
});

Route::post('/payment/store', function (\App\Http\Requests\PaymentRequest $request) {
    return (new \App\Http\Controllers\PaymentController() )->store($request);
});

Route::get('/reciept', function () {
    return view('student.reciept');
})->name('reciept');
