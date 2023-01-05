@extends('layouts.core')

@section('content')
    {{-- <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Pricing</h1>
        <p class="lead">Subscribe your package here.</p>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Car / Van</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">LKR 12000 <small class="text-muted">/3 mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                </div>
            </div>
        </div>

    </div> --}}
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-8 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('/images/Logo-01.png') }}" alt="logo">
                            </div>
                            <h4>Subscription Plans</h4>
                            {{-- <h6 class="font-weight-light">Select your subscription here.</h6> --}}
                            <form method="post" action="{{ url('/package/subscribe') }}" >
                                @csrf

                                @if (session()->has('error_message'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error_message') }}
                                    </div>
                                @endif

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Package Name
                                            </th>
                                            <th>
                                                Vehicle Type
                                            </th>
                                            <th>
                                                Hours
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                Select
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($packages as $package)
                                            <tr>
                                                <td>
                                                    {{ $package->package_name }}
                                                </td>
                                                <td>
                                                    {{ $package->vehicle_type }}
                                                </td>
                                                <td>
                                                    {{ $package->hours }}h
                                                </td>
                                                <td>
                                                    LKR {{ $package->price }}
                                                </td>
                                                <td>
                                                    <input class="form-check-input " name="packages{{ $package->id }}" type="checkbox"
                                                           value="{{ $package->id }}"
                                                           id="flexCheckDefault">
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr colspan="5">
                                            <td class="d-flex justify-content-end">

                                                <div class="row">
                                                    <div class="form-group">
                                                        <button type="submit" id="btnConfirm"
                                                                class=" btn btn-primary mr-2">Confirm
                                                        </button>
                                                        <button id="btnCancel" type="reset" class="btn btn-light">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection
