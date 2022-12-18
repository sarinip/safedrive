@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Packages Information</h4>
                    <form class="form-sample" method="post" action="{{ url('package/store') }}">
                        @csrf
                        @if (session()->has('success'))
                            <input type="hidden" name="id" value="{{ $package['id'] }}" />
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <input type="hidden" name="id" value="{{ $package['id'] }}" />
                        <div class="form-sample">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Package Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="package_name"
                                                value="{{ $package['package_name'] }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Price LKR</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="price"
                                                value="{{ $package['price'] }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Hours</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="hours"
                                                value="{{ $package['hours'] }}" />
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6"> --}}
                                {{-- <div class="form-group row"> --}}
                                {{-- <label class="col-sm-3 col-form-label">Exam Time</label> --}}
                                {{-- <div class="col-sm-9"> --}}
                                {{-- <input type="time" class="form-control" name="time" --}}
                                {{-- value="{{ $exam['time'] }}" /> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
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
    @endsection
