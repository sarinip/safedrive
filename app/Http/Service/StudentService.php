<?php

namespace App\Http\Service;

use App\Http\Requests\StudentRequest;

interface StudentService
{

    public function store(StudentRequest $request);

    public function getStudent($id);
}
