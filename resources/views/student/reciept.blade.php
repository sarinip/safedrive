@extends('layouts.core')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-3 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <h2 class="text-center text-primary">Thank You!</h2>
                            <h4 class="text-center">Payment done Successfully</h4>
                            <h5 class="text-center"><span class="text-black">Invoice No: SD</span>
                                <span class="text-black" name="invoiceno">{{ $payment['id'] }}
                                </span>
                            </h5>
                            <h5 class="text-center"><span class="text-black">Student ID:</span>
                                <span class="text-black" name="studentid">{{ $payment['student_id'] }}
                                </span>
                            </h5>
                            <h5 class="text-center"><span class="text-black">Paid Amount: LKR</span>
                                <span class="text-black" name="amount">{{ $payment['Amount'] }}
                                </span>
                            </h5>
                            <div class="mt-3 text-center">
                                <a class="btn btn-primary btn-lg font-weight-medium auth-form-btn"
                                    href="{{ url('/dashboard') }}">Home</a>
                            </div>
                            <div class="text-center" style="margin-top: 50px;">
                                <a><u class="text-info">Print Reciept</u></a>
                                <p>Copyright © 2022. Driving School Management System. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
