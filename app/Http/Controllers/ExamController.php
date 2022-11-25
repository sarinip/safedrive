<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExamRequest;
use App\Http\Service\ExamService;
use App\Http\Service\ExamServiceImpl;

class ExamController extends Controller
{

    private ExamService $service;

    public function __construct()
    {
        $this->service = new ExamServiceImpl();
    }

    public function store(ExamRequest $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        return $this->service->getExam($id);
    }

    public function destroy($id)
    {
        return $this->service->deleteExam($id);
    }

    //update form table
    public function showTable()
    {
        return $this->service->viewExam();
    }

    //report table
    public function viewTable()
    {
        return $this->service->viewTable();
    }
}
