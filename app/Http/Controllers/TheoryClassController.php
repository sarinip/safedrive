<?php

namespace App\Http\Controllers;

use App\Http\Requests\TheoryClassRequest;
use App\Http\Service\StudentService;
use App\Http\Service\StudentServiceImpl;
use App\Http\Service\TheoryClassService;
use App\Http\Service\TheoryClassServiceImpl;
use App\Models\TheoryClassStudent;
use App\Models\TheroyClass;
use Illuminate\Http\Request;

class TheoryClassController extends Controller
{

    private TheoryClassService $service;

    public function __construct()
    {
        $this->service = new TheoryClassServiceImpl();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TheoryClassRequest $request)
    {
        return $this->service->store($request);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\TheroyClass $theroyClass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->service->remove($id);
    }

    public function bookClass($id): \Illuminate\Http\RedirectResponse
    {
        return $this->service->reserve($id);
    }

    public static function isBook($id)
    {
        return TheoryClassStudent::where('student_id', session()->get('student_id')[0])->where('class_id', $id)->exists();
    }

    public function viewTable()
    {
    return $this->service->viewTable();
    }

}
