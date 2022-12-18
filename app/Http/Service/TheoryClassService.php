<?php

namespace App\Http\Service;

use App\Http\Requests\TheoryClassRequest;
use App\Http\Requests\TheroyClassRequest;

interface TheoryClassService
{
    public function store(TheoryClassRequest $request);

    public function remove($id);

}
