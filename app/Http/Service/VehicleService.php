<?php

namespace App\Http\Service;

use App\Http\Requests\VehicleRequest;

interface VehicleService
{

    public function store(VehicleRequest $request);

    public function getVehicle($id);

    public function viewVehicle();

    public function deleteVehicle($id);

    public function viewTable();
}