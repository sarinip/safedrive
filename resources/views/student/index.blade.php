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
        {{-- <div class="col-md-6 grid-margin stretch-card"> --}}
        {{-- <div class="card"> --}}
        {{-- <div class="card-body"> --}}
        {{-- <div class="chartjs-size-monitor"> --}}
        {{-- <div class="chartjs-size-monitor-expand"> --}}
        {{-- <div class=""></div> --}}
        {{-- </div> --}}
        {{-- <div class="chartjs-size-monitor-shrink"> --}}
        {{-- <div class=""></div> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- <h4 class="card-title">Exams</h4> --}}
        {{-- <div class="table-responsive"> --}}
        {{-- <table class="table table-striped table-borderless"> --}}
        {{-- <thead> --}}
        {{-- <tr> --}}
        {{-- <th>Exam</th> --}}
        {{-- <th>Date</th> --}}
        {{-- <th>Time</th> --}}
        {{-- <th>Status</th> --}}
        {{-- </tr> --}}
        {{-- </thead> --}}
        {{-- <tbody> --}}
        {{-- @foreach ($exams as $exam) --}}
        {{-- <tr> --}}
        {{-- <td>{{ $exam->exam_type }}</td> --}}
        {{-- <td class="font-weight-bold">{{ $exam->date }}</td> --}}
        {{-- <td>{{ $exam->time }}</td> --}}
        {{-- <td class="font-weight-medium"> --}}
        {{-- <div class="badge badge-success">{{ $exam->status }}</div> --}}
        {{-- </td> --}}
        {{-- </tr> --}}
        {{-- @endforeach --}}
        {{-- </tbody> --}}
        {{-- </table> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}
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
                                @foreach ($schedules as $schdule)
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
