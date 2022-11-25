@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Exam Information</h4>
                    <form class="form-sample" method="post" action="{{ url('exam/store') }}">
                        @csrf
                        <div class="form-sample">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Student ID</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="studentid"
                                                value="{{ $exam['student_id'] }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Exam Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="examtype" value="{{ $exam['exam_type'] }}">
                                                <option>Writing</option>
                                                <option>Practical</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Exam Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="date" placeholder="dd/mm/yyyy"
                                                name="date" value="{{ $exam['date'] }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Exam Time</label>
                                        <div class="col-sm-9">
                                            <input type="time" class="form-control" name="time"
                                                value="{{ $exam['time'] }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="status" value="{{ $exam['status'] }}">
                                                <option>Scheduled</option>
                                                <option>Completed</option>
                                                <option>cancelled</option>
                                            </select>
                                        </div>
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
                </div>
            </div>
        </div>
    </div>

@endsection
