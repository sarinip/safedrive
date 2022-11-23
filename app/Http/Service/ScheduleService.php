<?php

namespace App\Http\Service;

use App\Http\Requests\ScheduleRequest;
use App\Models\User;
use Illuminate\Http\Request;

interface ScheduleService
{

    public function store(ScheduleRequest $request,User $user);

    public function getScheduleCount(Request $request);

}
