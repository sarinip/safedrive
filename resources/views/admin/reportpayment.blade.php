@extends('layouts.master')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Student Report</h4>
                <form class="form-sample" href={{ url('report/vehicle') }}>
                    <div class="card-body">
                        <table id="datatable" class="display expandable-table dataTable no-footer display" style="width: 100%;"
                            role="grid">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Student name</th>
                                    <th>Amount</th>
                                    <th>Payment Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->id }}</td>
                                        <td>{{ $payment->fname }}{{ $student->lname }}</td>
                                        <td>{{ $payment->dob }}</td>
                                        <td>{{ $payment->nic }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Student name</th>
                                    <th>Amount</th>
                                    <th>Payment Date</th>
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
