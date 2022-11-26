@extends('layouts.master')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Exams Detail Report</h4>
                <form class="form-sample" href={{ url('report/exam') }}>
                    <div class="card-body">
                        <table id="datatable" class="display expandable-table dataTable no-footer display" style="width: 100%;"
                            role="grid">
                            <thead>
                                <tr>
                                    <th>Sudent ID</th>
                                    <th>Student Name</th>
                                    <th>Exam Type</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exams as $exam)
                                    <tr>
                                        <td>{{ $exam->student_id }}</td>
                                        <td>{{ $exam->student->fname }}{{ $exam->student->lname }}</td>
                                        <td>{{ $exam->exam_type }}</td>
                                        <td>{{ $exam->date }}</td>
                                        <td>{{ $exam->time }}</td>
                                        <td>{{ $exam->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sudent ID</th>
                                    <th>Stunet Name</th>
                                    <th>Exam Type</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
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
