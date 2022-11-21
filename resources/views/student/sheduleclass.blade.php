@extends('student::layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    Schedule a lesson
                </h4>
                <form class="forms-sample">
                    <div class="form-group row">
                        <label Id="lblIndtructor" class="col-sm-3 col-form-label">Instructor Name</label>
                        <div class="col-sm-9">
                            <select Id="dpdIndtructor" class="form-control">
                                <option>Select</option>
                                <option>Mr. Rohan Perera</option>
                                <option>Ms. Nayomi Herath</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lblDate" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" id="txtDate" class="form-control" placeholder="dd/mm/yyy">
                                <div class="input-group-append btn-group" role="group">
                                    <button type="button" id="btnCalender" class="btn btn-outline-secondry">
                                        <i class="ti-calendar"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <p class="font-weight-bold text-info">
                                Morning Sessions
                            </p>
                            <button id="btn9am" type="button" class="btn btn-outline-info btn-fw">9 AM</button>
                            <button id="btn10am" type="button" class="btn btn-outline-info btn-fw">10 AM</button>
                            <button id="btn11am" type="button" class="btn btn-outline-info btn-fw">11 AM</button>
                            <button id="btn12am" type="button" class="btn btn-outline-info btn-fw">12 AM</button>
                        </div>
                        <div class="col-sm-6">
                            <p class="font-weight-bold text-info">
                                Evening Sessions
                            </p>
                            <button id="btn1pm" type="button" class="btn btn-outline-info btn-fw">1 PM</button>
                            <button id="btn2pm" type="button" class="btn btn-outline-info btn-fw">2 PM</button>
                            <button id="btn3pm" type="button" class="btn btn-outline-info btn-fw">3 PM</button>
                            <button id="btn4pm" type="button" class="btn btn-outline-info btn-fw">4 PM</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <p class="font-weight-bold text-info">
                                Morning Available Time Slots
                            </p>
                            <button type="button" class="btn btn-outline-info btn-fw">9.00-9.30 AM</button>
                            <button type="button" class="btn btn-outline-info btn-fw">9.30-10.00 AM</button>
                            <button type="button" class="btn btn-outline-info btn-fw">10.00-10.30 AM</button>
                            <button type="button" class="btn btn-outline-info btn-fw">10.30-11.00 AM</button>
                            <button type="button" class="btn btn-outline-info btn-fw">11.00-11.30 AM</button>
                            <button type="button" class="btn btn-outline-info btn-fw">11.30-12.00 PM</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <p class="font-weight-bold text-info">
                                Evening Available Time Slots
                            </p>
                            <button type="button" class="btn btn-outline-info btn-fw">1.00-1.30 PM</button>
                            <button type="button" class="btn btn-outline-info btn-fw">1.30-2.00 PM</button>
                            <button type="button" class="btn btn-outline-info btn-fw">2.00-2.30 PM</button>
                            <button type="button" class="btn btn-outline-info btn-fw">2.30-3.00 PM</button>
                            <button type="button" class="btn btn-outline-info btn-fw">3.00-3.30 PM</button>
                            <button type="button" class="btn btn-outline-info btn-fw">3.30-4.00 PM</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="form-group">
                                <button type="submit" id="btnConfirm" class=" btn btn-primary mr-2">Confirm</button>
                                <button id="btnCancel" class="btn btn-light">Cancel</button>
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
                                        <h4>Isabella Becker</h4>
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
                                <h4>17 Jan,2022</h4>
                                <p class="card-text">Date</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <i class="ti-time icon-md text-info d-flex align-self-center mr-3"></i>
                            <div class="media-body">
                                <h4>12.00-12.30 PM</h4>
                                <p class="card-text">Time</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <i class="ti-star icon-md text-info d-flex align-self-center mr-3"></i>
                            <div class="media-body">
                                <h4>30 min</h4>
                                <p class="card-text">Duration</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
