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
                        <form class="pt-3" method="get" action="">
                            <h5 class="text-center"><span class="text-black">Invoice No:</span>
                                <span class="text-black" name="invoiceno" value="{{ $payment->id }}">
                                </span>
                            </h5>
                            <h5 class="text-center"><span class="text-black">Student ID:</span>
                                <span class="text-black" name="studentid" value="{{ $payment->student_id }}">
                                </span>
                            </h5>
                            <h5 class="text-center"><span class="text-black">Paid Amount: LKR</span>
                                <span class="text-black" name="amount" value="{{ $payment->amount }}">
                                </span>
                            </h5>
                            <div class="mt-3 text-center">
                                <button class="btn btn-primary btn-lg font-weight-medium auth-form-btn"
                                    href="#">Home</button>
                            </div>
                            <div class="text-center" style="margin-top: 50px;">
                                <a><u class="text-info">Print Reciept</u></a>
                                <p>Copyright © 2022. Driving School Management System. All rights reserved.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection
