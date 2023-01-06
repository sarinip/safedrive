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
                                        <label class="col-sm-3 col-form-label">Student ID</label>
                                        <div class="col-sm-9">
                                            {{-- <select id="dpdIndtructor" name="instructor" class="form-control" --}}
                                            {{-- onchange="getStudentName();"> --}}
                                            {{-- <option value="">Select</option> --}}
                                            {{-- @foreach ($students as $student) --}}
                                            {{-- <option value="{{ $student->id }}">{{ $student->fname }} --}}
                                            {{-- {{ $student->lname }}</option> --}}
                                            {{-- @endforeach --}}
                                            {{-- </select> --}}
                                            <input type="text" class="form-control" name="studentid" />
                                            @error('studentid')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Exam Type</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="examtype" id="examtype" value="Practical"
                                                    onclick="myFunction()">
                                                    <option>Select</option>
                                                    <option>Writing</option>
                                                    <option>Practical</option>
                                                </select>
                                                @error('examtype')
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
                                                <label class="col-sm-3 col-form-label">Exam Date</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="date" placeholder="dd/mm/yyyy"
                                                        name="date" />
                                                    @error('date')
                                                        <div class="alert alert-danger">{{ $message }}
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row ">
                                                    <label class="col-sm-3 col-form-label">Vehicle Class</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="class">
                                                            <option>Select</option>
                                                            <option>Car / Van </option>
                                                            <option>Car (Auto)</option>
                                                            <option>Three wheeler</option>
                                                            <option>Motorbike</option>
                                                            <option>Heavy Vehicle</option>
                                                        </select>
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
                                                        <label class="col-sm-3 col-form-label">Exam Time</label>
                                                        <div class="col-sm-9">
                                                            <input type="time" class="form-control" name="time" />
                                                            @error('time')
                                                                <div class="alert alert-danger">{{ $message }}
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Status</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control" name="status">
                                                                    <option>Select</option>
                                                                    <option>Scheduled</option>
                                                                    <option>Completed</option>
                                                                    <option>cancelled</option>
                                                                </select>
                                                                @error('status')
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
                                                    @foreach ($exams as $exam)
                                                        <tr>
                                                            <td>{{ $exam->student_id }}</td>
                                                            <td>{{ $exam->student->fname }}{{ $exam->student->lname }}</td>
                                                            <td>{{ $exam->exam_type }}</td>
                                                            <td>{{ $exam->date }}</td>
                                                            <td>{{ $exam->time }}</td>
                                                            <td>{{ $exam->status }}</td>
                                                            <td>
                                                                <a class="btn btn-warning btn-icon-text"
                                                                    href="{{ url('/exam/edit/' . $exam->id) }}"><i class="ti-pencil-alt"></i>
                                                                    <a type="button" class="btn btn-danger btn-icon-text"
                                                                        href="{{ url('/exam/delete/' . $exam->id) }}">
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
                                <script>
                                    // Here the value is stored in new variable x
                                    function myFunction() {
                                        var x = document.getElementById("examtype").value;
                                        document.getElementById("vehicleclass").innerHTML = x;
                                    }
                                </script>
                            @endsection
