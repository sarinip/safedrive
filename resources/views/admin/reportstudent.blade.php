@extends('layouts.master')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Student Detail Report</h4>
                <form class="form-sample" href={{ url('report/student') }}>
                    <div class="card-body">
                        <table id="datatable" class="display expandable-table dataTable no-footer display" style="width: 100%;"
                            role="grid">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full name</th>
                                    <th>Date of Birth</th>
                                    <th>NIC</th>
                                    <th>Address</th>
                                    <th>Postal Code</th>
                                    <th>Telephone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->fname }}{{ $student->lname }}</td>
                                        <td>{{ $student->dob }}</td>
                                        <td>{{ $student->nic }}</td>
                                        <td>{{ $student->addressNo }}{{ $student->address1 }}{{ $student->address2 }}{{ $student->city }}
                                        </td>
                                        <td>{{ $student->postcode }}</td>
                                        <td>{{ $student->telephone }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Full name</th>
                                    <th>Date of birth</th>
                                    <th>NIC</th>
                                    <th>Address</th>
                                    <th>Telephone</th>
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
