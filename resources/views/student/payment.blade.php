@extends('layouts.core')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-3 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <h3 class="text-center">Payment Details</h3>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="pt-3" method="post" action="{{ url('/payment/store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="floatingInput">Amount</label>
                                    <input type="text" class="form-control form-control-lg" id="txtAmount"
                                           value="{{ \App\Http\Controllers\PackageController::getSubscribeAmount() }}" name="amount">
                                    @error('amount')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="floatingInput">Name on Card</label>
                                    <input type="text" class="form-control form-control-lg" id="txtCardName"
                                           name="cardname" required>
                                    @error('cardname')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="floatingInput">Card Number</label>
                                    <input type="text" class="form-control form-control-lg" id="txtCardNo"
                                           name="cardnumber" required>
                                    @error('cardnumber')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @endif
                                </div>

                                <div class="row">

                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <label for="floatingInput">Expiry Date</label>
                                            <input type="text" class="form-control form-control-lg" id="txtExpDate"
                                                   placeholder="MM/YY" name="expdate" required>
                                            @error('expdate')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <label for="floatingInput">CVV</label>
                                            <input type="text" class="form-control form-control-lg" id="txtcvv"
                                                   name="cvv" required>
                                            @error('cvv')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="mt-3">
                                    <button class=" btn btn-block btn-success btn-lg font-weight-medium auth-form-btn"
                                            type="submit">PAY >>
                                    </button>
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
