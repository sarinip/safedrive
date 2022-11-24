@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
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
                    <p class="card-title">Schedule Approval</p>
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th>Session</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($schedules as $schdule)
                                    <tr>
                                        <td>{{ $schdule->session }}</td>
                                        <td class="font-weight-bold">{{ $schdule->schedule_date }}</td>
                                        <td>{{ $schdule->session_from_time }}</td>
                                        <td class="font-weight-medium">
                                            @if($schdule->status == 'REJECTED')
                                                <div class="badge badge-danger">{{ $schdule->status }}</div>
                                            @else
                                            <div class="badge badge-success">{{ $schdule->status }}</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($schdule->status == 'PENDING')
                                                <div class="template-demo d-flex flex-nowrap">
                                                    <a href="{{ url('/schedule/approve/'.$schdule->id) }}"
                                                       class="btn btn-success btn-rounded btn-icon">
                                                        <i class="ti-check"></i>
                                                    </a>
                                                    <a href="{{ url('/schedule/reject/'.$schdule->id) }}"
                                                       class="btn btn-danger btn-rounded btn-icon">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
