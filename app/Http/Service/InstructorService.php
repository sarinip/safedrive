<?php

namespace App\Http\Service;

use App\Http\Requests\InstructorRequest;

interface InstructorService
{

    public function store(InstructorRequest $request);

    public function getInstructor($id);

    public function viewTable();
}
