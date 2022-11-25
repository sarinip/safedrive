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

    //report table
    public function viewTable()
    {
    return $this->service->viewTable();
    }
}