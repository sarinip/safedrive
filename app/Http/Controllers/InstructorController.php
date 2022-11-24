<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\InstructorRequest;
use App\Http\Service\InstructorService;
use App\Http\Service\InstructorServiceImpl;
use App\Models\Instructor;


class InstructorController extends Controller
{
    private InstructorService $service;

    public function __construct()
    {
        $this->service = new InstructorServiceImpl();
    }

    public function store(InstructorRequest $request)
    {
        return $this->service->store($request);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Instructor $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Instructor $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Instructor $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        //
    }


    public function show($id)
    {
        return $this->service->getInstructor($id);
    }
}

