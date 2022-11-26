<?php

namespace App\Http\Controllers;
use App\Http\Requests\PaymentRequest;
use App\Http\Service\PaymentService;
use App\Http\Service\PaymentServiceImpl;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    private PaymentService $service;
        public function __construct()
 {
     $this->service = new PaymentServiceImpl();
 }

    public function store(PaymentRequest $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        return $this->service->getPayment($id);
    }

    public function dashView()
    {
    return $this->service->viewPaymet();
    }

    //report table
    public function viewTable()
    {
    return $this->service->viewTable();
    }
}