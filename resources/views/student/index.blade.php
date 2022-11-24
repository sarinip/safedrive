@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Welcome SafeDrive</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card ">
            <div class="card-people mt-auto">
                <img src="{{ asset('images/dashboard/download2.png') }}" alt="people">
                <div class="weather-info">
                    <div class="d-flex">
                        <div>
                            <!-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>-->
                        </div>
                        <div class="ml-2">
                            <!-- <h4 class="location font-weight-normal">Bangalore</h4> -->
                            <!-- <h6 class="font-weight-normal">India</h6> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
        <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Next Class</p>
                        <p class="fs-30 mb-2">2nd Jan 2023</p>
                        <!-- <p>10.00% (30 days)</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Last Payment</p>
                        <p class="fs-30 mb-2">LKR 10,000</p>
                        <p>2 Jan 2023</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Next Exam</p>
                        <p class="fs-30 mb-2">23 Feb 2023</p>
                        <!-- <p>2.00% (30 days)</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Next Payment</p>
                        <p class="fs-30 mb-2">LKR 15,000</p>
                        <p>On or before 20 Feb 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <p class="card-title">Shedule classes</p>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>Session</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($schedules as $schdule)
                            <tr>
                                <td>{{ $schdule->session }}</td>
                                <td class="font-weight-bold">{{ $schdule->schedule_date }}</td>
                                <td>{{ $schdule->session_from_time }}</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-success">{{ $schdule->status }}</div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <p class="card-title">Payment Details</p>
                <p class="font-weight-500">The total number of sessions within the date range. It is the period time a
                    user is actively engaged with your website, page or app, etc</p>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Search Engine Marketing</td>
                                <td class="font-weight-bold">$362</td>
                                <td>21 Sep 2018</td>
                                <td class="font-weight-medium">
                                    <div class="badge badge-success">Completed</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Display Advertising</td>
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
    @endsection
