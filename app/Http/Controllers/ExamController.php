<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    //report table
    public function viewTable()
    {
    return $this->service->viewTable();
    }
}
