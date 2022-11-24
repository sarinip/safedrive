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
    return view('student.index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

// Student Routes
Route::get('/student/register', function () {
    return view('student.register');
});

Route::post('/student/store', function (\App\Http\Requests\StudentRequest $request) {
    return (new \App\Http\Controllers\StudentController)->store($request);
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
    return view('admin.reportvehicle',compact('vehicles'));
});