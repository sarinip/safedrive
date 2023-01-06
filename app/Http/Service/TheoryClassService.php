<?php

namespace App\Http\Service;

use App\Http\Requests\TheoryClassRequest;
use App\Http\Requests\TheroyClassRequest;
use App\Models\User;

interface TheoryClassService
{
    public function store(TheoryClassRequest $request);

    public function remove($id);

    public function reserve($id);

    public function isReserved($id);

     public function viewTable();


}
