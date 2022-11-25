@extends('layouts.master')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Instructor Detail Report</h4>
                <form class="form-sample" href={{ url('report/vehicle') }}>
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
                                    <th>Telephone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($instructors as $instructor)
                                    <tr>
                                        <td>{{ $instructor->id }}</td>
                                        <td>{{ $instructor->fname }}{{ $instructor->lname }}</td>
                                        <td>{{ $instructor->dob }}</td>
                                        <td>{{ $instructor->nic }}</td>
                                        <td>{{ $instructor->addressNo }}{{ $instructor->address1 }}{{ $instructor->address2 }}{{ $instructor->city }}
                                        </td>
                                        <td>{{ $instructor->postcode }}</td>
                                        <td>{{ $instructor->telephone }}</td>
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
