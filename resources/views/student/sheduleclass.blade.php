@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    Schedule a lesson
                </h4>
                <form class="forms-sample" action="{{ url('schedule/store') }}" method="POST">
                    @csrf
                    @if(session()->has('schedule_error_message'))
                        <div class="alert alert-danger">
                            {{ session()->get('schedule_error_message') }}
                        </div>
                    @endif
                    <div class="form-group row">

                        <label Id="lblIndtructor" class="col-sm-3 col-form-label">Instructor Name</label>
                        <div class="col-sm-9">
                            <select id="dpdIndtructor" name="instructor" class="form-control" onchange="getInstructorName();">
                                <option value="">Select</option>
                                @foreach($instructors as $instructor)
                                   <option value="{{ $instructor->id }}">{{ $instructor->fname }} {{ $instructor->lname }}</option>
                                @endforeach
                            </select>
                            @error('instructor')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="lblDate" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="date" class="form-control" date-pattern="yyyy-mm-dd" name="scheduledate" id="scheduledate" onchange="getScheduleDate();">
                            </div>
                            @error('scheduledate')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label Id="lblIndtructor" class="col-sm-3 col-form-label">Session</label>
                        <div class="col-sm-9">
                            <select  class="form-control" name="schedulesession" id="session" onchange="getSession();">
                                <option value="">Select</option>
                                <option value="Practical">Practical</option>
                                <option value="Theory">Theory</option>
                            </select>
                            <input type="hidden" name="timeslot" id="timeslot">
                            @error('schedulesession')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="form-group row" >
                        <div class="col-sm-6">
                            <p class="font-weight-bold text-info">
                                Morning Sessions
                            </p>
                            <div class="chip ivoryia-chip m-2 px-2 " onclick="selectedTimeSlot(this);"><span class="p-2"><em class="bi bi-clock"></em> 09 AM</div>
                            <div class="chip ivoryia-chip m-2 px-2 " onclick="selectedTimeSlot(this);"><span class="p-2"><em class="bi bi-clock"></em> 10 AM</div>
                            <div class="chip ivoryia-chip m-2 px-2 " onclick="selectedTimeSlot(this);"><span class="p-2"><em class="bi bi-clock"></em> 11 AM</div>
                            <div class="chip ivoryia-chip m-2 px-2 " onclick="selectedTimeSlot(this);"><span class="p-2"><em class="bi bi-clock"></em> 12 AM</div>
                        </div>
                        <div class="col-sm-6">
                            <p class="font-weight-bold text-info">
                                Evening Sessions
                            </p>
                            <div class="chip ivoryia-chip m-2 px-2 " onclick="selectedTimeSlot(this);"><span class="p-2"><em class="bi bi-clock"></em> 01 PM</div>
                            <div class="chip ivoryia-chip m-2 px-2 " onclick="selectedTimeSlot(this);"><span class="p-2"><em class="bi bi-clock"></em> 02 PM</div>
                            <div class="chip ivoryia-chip m-2 px-2 " onclick="selectedTimeSlot(this);"><span class="p-2"><em class="bi bi-clock"></em> 03 PM</div>
                            <div class="chip ivoryia-chip m-2 px-2 " onclick="selectedTimeSlot(this);"><span class="p-2"><em class="bi bi-clock"></em> 04 PM</div>
                        </div>
                        @error('timeslot')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="form-group">
                                <button type="submit" id="btnConfirm" class=" btn btn-primary mr-2">Confirm</button>
                                <button id="btnCancel"  type="reset" class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Session Summary</h4>
                <form class="form-sample">
                    <div class="card-body">
                        <ul class="icon-data-list">
                            <li>
                                <div class="d-flex">
                                    <img src="{{asset('/images/faces/face1.jpg')}}" alt="user">
                                    <div>
                                        <h4 id="instructorname">Not Selected</h4>
                                        <p class="card-text">Instuctor</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <i class="ti-calendar icon-md text-info d-flex align-self-center mr-3"></i>
                            <div class="media-body">
                                <h4 id="appinmentdate">Not Selected</h4>
                                <p class="card-text">Date</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <i class="ti-blackboard icon-md text-info d-flex align-self-center mr-3"></i>
                            <div class="media-body">
                                <h4 id="timesession">Not Selected</h4>
                                <p class="card-text">Session</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <i class="ti-time icon-md text-info d-flex align-self-center mr-3"></i>
                            <div class="media-body">
                                <h4 id="scheduletimeslot">Not Selected</h4>
                                <p class="card-text">Time</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <i class="ti-star icon-md text-info d-flex align-self-center mr-3"></i>
                            <div class="media-body">
                                <h4 id="duration">Not Selected</h4>
                                <p class="card-text">Duration</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="media">
                            <i class="ti-user icon-md text-info d-flex align-self-center mr-3"></i>
                            <div class="media-body">
                                <h4 id="headcount">0</h4>
                                <p class="card-text">Current Session Head Count</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
