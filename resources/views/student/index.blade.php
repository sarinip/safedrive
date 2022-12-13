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
        <div class="col-md-6 grid-margin stretch-card">
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
            {{-- <p class="card-title mb-0">Exam Details</p> --}}
            {{-- <div class="table-responsive"> --}}
            {{-- <table class="table table-striped table-borderless"> --}}
            {{-- <thead> --}}
            {{-- <th>Exam Type</th> --}}
            {{-- <th>Date</th> --}}
            {{-- <th>Time</th> --}}
            {{-- <th>Status</th> --}}
            {{-- </thead> --}}
            {{-- <tbody> --}}
            {{-- @foreach ($exams as $exam) --}}
            {{-- <tr> --}}
            {{-- <td>{{ $exam->exam_type }}</td> --}}
            {{-- <td>{{ $exam->date }}</td> --}}
            {{-- <td>{{ $exam->time }}</td> --}}
            {{-- <td class="font-weight-medium"> --}}
            {{-- <div class="badge badge-info">{{ $exam->status }}</div> --}}
            {{-- </td> --}}
            {{-- </tr> --}}
            {{-- @endforeach --}}
            {{-- </tbody> --}}
            {{-- </table> --}}
            {{-- </div> --}}
            {{-- </div> --}}
            {{-- </div> --}}
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
                                @foreach ($schedules as $schdule)
                                    <tr>
                                        <td>{{ $schdule->session }}</td>
                                        <td>{{ $schdule->schedule_date }}</td>
                                        <td>{{ $schdule->session_from_time }}</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-info">{{ $schdule->status }}</div>
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
                    <div class="chartjs-size-monitor-shrink">
                        <p class="card-title mb-0">Payment Details</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Paid Amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $payment)
                                        <tr>
                                            <td>{{ $payment->id }}</td>
                                            <td>{{ $payment->Amount }}</td>
                                            <td class="font-weight-bold">{{ $payment->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
