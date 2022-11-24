@extends('layouts.master')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Class Schedule Report</h4>
                <form class="form-sample" href={{ url('report/vehicle') }}>
                    <div class="card-body">
                        <table id="datatable" class="display expandable-table dataTable no-footer display" style="width: 100%;"
                            role="grid">
                            <thead>
                                <tr>
                                    <th>Session</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Student Name</th>
                                    <th>Instructor Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedules as $schedule)
                                    <tr>
                                        <td>{{ $schedule->session }}</td>
                                        <td>{{ $schedule->schedule_date }}</td>
                                        <td>{{ $schedule->session_from_time }}</td>
                                        <td>{{ $schedule->status }}</td>
                                        <td>{{ $schedule->student_id }}</td>
                                        <td>{{ $schedule->instructor_id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Session</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Student Name</th>
                                    <th>Instructor Name</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
