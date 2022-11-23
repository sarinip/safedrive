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

Route::get('/student/register', function () {
    return view('student.register');
});

Route::post('/student/store', function (\App\Http\Requests\StudentRequest $request) {
    return (new \App\Http\Controllers\StudentController)->store($request);
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