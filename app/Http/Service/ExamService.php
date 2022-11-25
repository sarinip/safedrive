<?php

namespace App\Http\Service;

use App\Http\Requests\ExamRequest;

interface ExamService
{

    public function store(ExamRequest $request);

    public function getExam($id);

    public function viewExam();

   public function deleteExam($id);

    public function viewTable();
}