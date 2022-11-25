<?php

namespace App\Http\Service;

use App\Http\Requests\PaymentRequest;

interface PaymentService
{

    public function store(PaymentRequest $request);

    public function getPayment($id);

    public function viewTable();
}