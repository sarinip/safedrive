<!------ Include the above in your HEAD tag ---------->
@extends('student::layouts.master')

@section('content')

<div class="row">
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Payment Details</p>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>Installment</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Installment 1</td>
                                <td class="font-weight-bold">$362</td>
                                <td>21 Sep 2018</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-success">Completed</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Installment 2</td>
                                <td class="font-weight-bold">$551</td>
                                <td>28 Sep 2018</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-warning">Pending</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Card Details
                        </h4>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="cardNumber">
                                    Card Holder Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="cardNumber"
                                        placeholder="Valid Card Number" required autofocus />
                                    <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-lock"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cardNumber">
                                    Card Number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="cardNumber"
                                        placeholder="Valid Card Number" required autofocus />
                                    <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-lock"></span></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-md-7">
                                    <div class="form-group">
                                        <label for="expityMonth">
                                            Expiry Date</label>
                                        <input type="text" class="form-control" id="expityMonth" placeholder="MM/YY"
                                            required />
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cvCode">
                                            CVV</label>
                                        <input type="password" class="form-control" id="cvCode" placeholder="CVV"
                                            required />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <button type="button" class="btn btn-info btn-lg btn-block">
                    Amount LKR
                    <lable class=" float-right">4200.00</lable>
                </button>
                <!-- <ul class="nav nav-pills nav-stacked"> -->
                <!-- <li class="active"><a href="#"><span class="badge pull-right"><span -->
                <!-- class="glyphicon glyphicon-usd"></span>4200</span>Payment</a> -->
                <!-- </li> -->
                <!-- </ul> -->
                <br />
                <a href="http://www.jquery2dotnet.com" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
            </div>
        </div>
    </div>
</div>


@endsection