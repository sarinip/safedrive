<?php

namespace App\Http\Service;

use App\Http\Requests\InstructorRequest;

interface InstructorService
{

    public function store(InstructorRequest $request);

    public function getInstructor($id);

    public function viewTable();

    public function viewInstructor();

    public function deleteInstructor($id);
}
