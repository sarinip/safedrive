@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Exam Information</h4>
                    <form class="form-sample" method="POST" action="{{ url('/exam/store') }}">
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
                                        <label class="col-sm-3 col-form-label">Instructor</label>
                                        <div class="col-sm-9">
                                            <select id="instructor" name="instructor" class="form-control">
                                                <option value="">Select</option>
                                                @foreach ($instructors as $instructor)
                                                    <option value="{{ $instructor->id }}">{{ $instructor->fname }}
                                                        {{ $instructor->lname }}</option>
                                                @endforeach
                                            </select>
                                            @error('instructor')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Exam Type</label>
                                        <div class="col-sm-9">
                                            <select id="instructor" name="instructor" class="form-control">
                                                <option value="">Select</option>
                                                @foreach ($instructors as $instructor)
                                                    <option value="{{ $instructor->id }}">{{ $instructor->fname }}
                                                        {{ $instructor->lname }}</option>
                                                @endforeach
                                            </select>
                                            @error('instructor')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-3 col-form-label">Exam Date</label>--}}
{{--                                        <div class="col-sm-9">--}}
{{--                                            <input class="form-control" type="date" placeholder="dd/mm/yyyy"--}}
{{--                                                   name="date"/>--}}
{{--                                            @error('date')--}}
{{--                                            <div class="alert alert-danger">{{ $message }}--}}
{{--                                            </div>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-3 col-form-label">Exam Time</label>--}}
{{--                                        <div class="col-sm-9">--}}
{{--                                            <input type="time" class="form-control" name="time"/>--}}
{{--                                            @error('time')--}}
{{--                                            <div class="alert alert-danger">{{ $message }}--}}
{{--                                            </div>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-3 col-form-label">Status</label>--}}
{{--                                        <div class="col-sm-9">--}}
{{--                                            <select class="form-control" name="status">--}}
{{--                                                <option>Select</option>--}}
{{--                                                <option>Scheduled</option>--}}
{{--                                                <option>Completed</option>--}}
{{--                                                <option>cancelled</option>--}}
{{--                                            </select>--}}
{{--                                            @error('status')--}}
{{--                                            <div class="alert alert-danger">{{ $message }}--}}
{{--                                            </div>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                --}}{{-- @includeIf('examnew', ['examtype' => 'Practical']) --}}
{{--                                --}}{{-- <div class="col-md-6"> --}}
{{--                                --}}{{-- <div class="form-group row "> --}}
{{--                                --}}{{-- <label class="col-sm-3 col-form-label">Vehicle Class</label> --}}
{{--                                --}}{{-- <div class="col-sm-9"> --}}
{{--                                --}}{{-- <select class="form-control" name="class"> --}}
{{--                                --}}{{-- <option>Select</option> --}}
{{--                                --}}{{-- <option>Dual Purpose</option> --}}
{{--                                --}}{{-- <option>Light Vehicle</option> --}}
{{--                                --}}{{-- <option>Heavy Vehicle</option> --}}
{{--                                --}}{{-- </select> --}}
{{--                                --}}{{-- <input type="text" name="class" class="form-control" /> --}}
{{--                                --}}{{-- @error('class') --}}
{{--                                --}}{{-- <div class="alert alert-danger">{{ $message }}</div> --}}
{{--                                --}}{{-- @endif --}}
{{--                                --}}{{-- </div> --}}
{{--                            </div>--}}
                        </div>

                </div>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary mr-2"></input>
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
            <h4 class="card-title">Exam Details</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Sudent ID</th>
                        <th>Stunet Name</th>
                        <th>Exam Type</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
