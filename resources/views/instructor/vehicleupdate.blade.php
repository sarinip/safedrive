@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Vehicle Information</h4>
                    <div class="form-sample" method="post" action="{{ url('vehicle/store') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $vehicle['id'] }}" />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Registration No.</label>
                                    <div class="col-sm-9">

                                        <input type="text" value="{{ $vehicle['reg_no'] }}" name="reg_no"
                                            class="form-control" />
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
                                            <input type="text" name="owner_name" value="{{ $vehicle['owner_name'] }}"
                                                class="form-control" />
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
                                                <input type="date" value="{{ $vehicle['reg_date'] }}" name="reg_date"
                                                    class="form-control" />
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
                                                    <input type="text" name="class" value="{{ $vehicle['class'] }}"
                                                        class="form-control" />
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
                                                        <input type="date" name="insurance_up_to"
                                                            value="{{ $vehicle['insurance_up_to'] }}" class="form-control" />
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
                                                            <input type="text" name="model" value="{{ $vehicle['model'] }}"
                                                                class="form-control" />
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
                                                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endsection
