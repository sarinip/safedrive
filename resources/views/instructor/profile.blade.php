@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body text-center" method="post" action="{{url('instructor/profile')}}">
                <form class=" form-sample">
                    <div class="form-group">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle text-center"
                            style="width: 150px;" alt="Avatar" />
                    </div>
                    <div class="input-group ">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="No file choose"
                                aria-label="Recipient' s username">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary" type="button">Upload</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Personal Details</h4>
                <form class="form-sample">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="fname" value="{{ $instructor->fname }}"
                                        class=" form-control" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="lname" class="form-control" value="{{ $instructor->lname }}"
                                        readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="date" name="dob" value="{{ $instructor->dob }}"
                                        placeholder="dd/mm/yyyy" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIC</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nic" value="{{ $instructor->nic }}" class="form-control"
                                        readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description">
                        Contact Details
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address No.</label>
                                <div class="col-sm-9">
                                    <input type="text" id="addressNo" class="form-control"
                                        value="{{ $instructor->addressNo }}" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address Line 1</label>
                                <div class="col-sm-9">
                                    <input type="text" id="address1" class="form-control"
                                        value="{{ $instructor->address1 }}" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address Line 2</label>
                                <div class="col-sm-9">
                                    <input type="text" id="address2" class="form-control"
                                        value="{{ $instructor->address2 }}" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" id="city" class="form-control" value="{{ $instructor->city }}"
                                        readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Postal Code</label>
                                <div class="col-sm-9">
                                    <input type="text" id="postcode" class="form-control"
                                        value="{{ $instructor->postcode }}" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Telephone</label>
                                <div class="col-sm-9">
                                    <input type="text" id="telephone" class="form-control"
                                        value="{{ $instructor->telephone }}" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light" id="cancel">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection