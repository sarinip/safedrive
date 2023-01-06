@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Packages Information</h4>
                    <form class="form-sample" method="POST" action="{{ url('/package/store') }}">
                        @csrf
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="form-sample">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Package Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="package_name" />
                                            @error('package_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="price" />
                                                @error('price')
                                                    <div class="alert alert-danger">{{ $message }}
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Hours</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" name="hours" />
                                                    @error('hours')
                                                        <div class="alert alert-danger">{{ $message }}
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Vehicle Type</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="vehicle_type">
                                                            <option>Select</option>
                                                            <option>Car / Van </option>
                                                            <option>Car (Auto)</option>
                                                            <option>Three wheeler</option>
                                                            <option>Motorbike</option>
                                                            <option>Heavy Vehicle</option>
                                                        </select>
                                                        @error('vehicle_type')
                                                            <div class="alert alert-danger">{{ $message }}
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary mr-2" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row"> -->
                        <div class=" col-lg-12 grid-margin stretch-card card">
                            <div class="card-body">
                                <h4 class="card-title">Package Details</h4>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Package ID</th>
                                                <th>Package Name</th>
                                                <th>Package Price</th>
                                                <th>Package Hours</th>
                                                <th>Vehicle Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($packages as $package)
                                                <tr>
                                                    <td>{{ $package->id }}</td>
                                                    <td>{{ $package->package_name }}</td>
                                                    <td>{{ $package->price }}</td>
                                                    <td>{{ $package->hours }}</td>
                                                    <td>{{ $package->vehicle_type }}</td>
                                                    <td>
                                                        <a class="btn btn-warning btn-icon-text"
                                                            href="{{ url('/package/edit/' . $package->id) }}"><i
                                                                class="ti-pencil-alt"></i></a>
                                                        <a type="button" class="btn btn-danger btn-icon-text"
                                                            href="{{ url('/package/delete/' . $package->id) }}">
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
                    @endsection
