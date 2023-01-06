@extends('layouts.master')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Theory Class Schedule Detail Report</h4>
                <form class="form-sample" href={{ url('report/theory_class') }}>
                    <div class="card-body">
                        <table id="datatable" class="display expandable-table dataTable no-footer display" style="width: 100%;"
                            role="grid">
                            <thead>
                                <tr>
                                    <th>Instructor Name</th>
                                    <th>Class Name </th>
                                    <th>Class Date</th>
                                    <th>Class From Time</th>
                                    <th>Class To Time</th>
                                    <th>Head Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($theoryclasses as $theoryclass)
                                    <tr>
                                        <td>{{ $theoryclass->instructor->fname }}{{ $theoryclass->instructor->lname }}</td>
                                        <td>{{ $theoryclass->class_name }}</td>
                                        <td>{{ $theoryclass->class_date }}</td>
                                        <td>{{ $theoryclass->class_from_time }}</td>
                                        <td>{{ $theoryclass->class_to_time }}</td>
                                        <td>{{ $theoryclass->class_head_count }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Instructor Name</th>
                                    <th>Class Name </th>
                                    <th>Class Date</th>
                                    <th>Class From Time</th>
                                    <th>Class To Time</th>
                                    <th>Head Count</th>
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
