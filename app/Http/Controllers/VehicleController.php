<?php

namespace App\Http\Controllers;

use App\Http\Service\VehicleService;
use App\Http\Service\VehicleServiceImpl;
use App\Http\Requests\VehicleRequest;
use Illuminate\Http\Request;



class VehicleController extends Controller
{

  private VehicleService $service;

    public function __construct()
    {
        $this->service = new VehicleServiceImpl();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $request)
    {
        return $this->service->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->service->getVehicle($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            return $this->service->deleteVehicle($id);

    }

    public function showTable()
    {
     return $this->service->viewVehicle();
    }
}