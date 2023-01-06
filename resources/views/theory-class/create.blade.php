@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-9 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Theory Class Management</h4>
                    <form method="POST" class="form-sample" action="{{ url('theory-class/store') }}">
                        @csrf

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        @if (session()->has('error_message'))
                            <div class="alert alert-warning">
                                {{ session()->get('error_message') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Instructor Name</label>
                                    <div class="col-sm-9">
                                        <select id="instructor" name="instructor" class="form-control"
                                                onchange="getStudentName();">
                                            <option value="">Select</option>
                                            @foreach ($instructors as $instructor)
                                                <option value="{{ $instructor->id }}">{{$instructor->fname}} {{$instructor->lname}}</option>
                                            @endforeach
                                            @error('instructor')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Class Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="classname" name="classname" class="form-control"/>
                                        @error('classname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Class Date</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" name="classdate" placeholder="dd/mm/yyyy"/>
                                        @error('classdate')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">From Time</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="time" name="classfrom"/>
                                        @error('classfrom')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">To Time</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="time" name="classto"/>
                                        @error('classto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Head Count</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="headcount" />
                                        @error('headcount')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <button type="submit" id="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light" type="reset">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
