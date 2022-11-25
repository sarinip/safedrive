@extends('layouts.master')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Vehicle Detail Report</h4>
                <form class="form-sample" href={{ url('report/vehicle') }}>
                    <div class="card-body">
                        <table id="example1" class="table table-bord">
                            <thead>
                                <tr>
                                    <th> #</th>
                                    <th>Instructor Name</th>
                                    <th>Registration No.</th>
                                    <th>Registration Date</th>
                                    <th>Owner Name</th>
                                    <th>Vehicle Class</th>
                                    <th>Vehicle Model</th>
                                    <th>Insurance Up To.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicles as $vehicle)
                                    <tr>
                                        <td> {{ $vehicle->id }}</td>
                                        <td> {{ $vehicle->instructor->fname }}{{ $vehicle->instructor->lname }}</td>
                                        <td> {{ $vehicle->reg_no }}</td>
                                        <td> {{ $vehicle->reg_date }}</td>
                                        <td> {{ $vehicle->owner_name }}</td>
                                        <td> {{ $vehicle->model }}</td>
                                        <td> {{ $vehicle->class }}</td>
                                        <td> {{ $vehicle->insurance_up_to }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th> #</th>
                                    <th>Instructor No.</th>
                                    <th>Registration No.</th>
                                    <th>Registration Date</th>
                                    <th>Owner Name</th>
                                    <th>Vehicle Class</th>
                                    <th>Vehicle Model</th>
                                    <th>Insurance Up To.</th>
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
