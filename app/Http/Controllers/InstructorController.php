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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->service->getInstructor($id);
    }
}