@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Vehicle Information</h4>
                    <form class="form-sample" method="post" action="{{ url('/vehicle/store') }}">
                        @csrf
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Registration No.</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="reg_no" class="form-control" />
                                        @error('reg_no')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Owner Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="owner_name" class="form-control" />
                                            @error('owner_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Registration Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="reg_date" class="form-control" />
                                                @error('reg_date')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Vehicle Class</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="class" class="form-control" />
                                                    @error('class')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Insurance Up To.</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" name="insurance_up_to" class="form-control" />
                                                        @error('insurance_up_to')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Vehicle Model</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="model" class="form-control" />
                                                            @error('model')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 text-right">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row"> -->
                            <div class=" col-lg-12 grid-margin stretch-card card">
                                <div class="card-body">
                                    <h4 class="card-title">Vehical Details</h4>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>
                                                        Registration No.
                                                    </th>
                                                    <th>
                                                        Vehicle Class
                                                    </th>
                                                    <th>
                                                        Vehicle Model
                                                    </th>
                                                    <th>
                                                        Insurance Up To.
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($vehicles as $vehicle)
                                                    <tr>
                                                        <td>
                                                            {{ $vehicle->id }}
                                                        </td>
                                                        <td>
                                                            {{ $vehicle->reg_no }}
                                                        </td>
                                                        <td>
                                                            {{ $vehicle->class }}
                                                        </td>
                                                        <td>
                                                            {{ $vehicle->model }}
                                                        </td>
                                                        <td>
                                                            {{ $vehicle->insurance_up_to }}
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('vehicle.new', $vehicle->id) }}" method="POST">
                                                                <button
                                                                    class="btn btn-warning btn-rounded btn-icon"href="{{ url('instructors/vehicles/' . $vehicle->id) }}"><i
                                                                        class="ti-pencil-alt"></i></button>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-danger btn-rounded btn-icon">
                                                                    <i class="ti-trash"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        @endsection
