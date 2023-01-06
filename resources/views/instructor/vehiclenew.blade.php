@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Vehicle Information</h4>
                    <form class="form-sample" method="post" action="{{ url('/vehicle/store') }}">
                        @csrf
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Instructor ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="instructor_id" class="form-control" />
                                        @error('instructor_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                        <select class="form-control" name="class">
                                                            <option>Select</option>
                                                            <option>Car / Van </option>
                                                            <option>Car (Auto)</option>
                                                            <option>Heavy Vehicle</option>
                                                            <option>Three wheeler</option>
                                                            <option>Motorbike</option>
                                                        </select>
                                                        {{-- <input type="text" name="class" class="form-control" /> --}}
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
                                                            <label class="col-sm-3 col-form-label">Vehicle Maker/Model</label>
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
                                                                <button type="submit" class="btn btn-primary btn-text">Submit</button>
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
                                                            Instructor ID.
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
                                                                {{ $vehicle->instructor_id }}
                                                            </td>
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
                                                                <a class="btn btn-warning btn-icon-text"
                                                                    href="{{ url('/vehicle/edit/' . $vehicle->id) }}"><i class="ti-pencil-alt"></i></a>
                                                                <a type="button" class="btn btn-danger btn-icon-text"
                                                                    href="{{ url('/vehicle/delete/' . $vehicle->id) }}">
                                                                    <i class="ti-trash"></i>
                                                                </a>
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
