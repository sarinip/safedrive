@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Instructor Details</h4>
                    <form class="form-sample">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fname" class=" form-control" />
                                        @error('fname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="lname" class="form-control" />
                                            @error('lname')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="date" name="dob"
                                                    placeholder="dd/mm/yyyy" />
                                                @error('dob')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">NIC</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="nic" class="form-control" />
                                                    @error('nic')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @endif
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
                                                        <input type="text" id="addressNo" class="form-control" />
                                                        @error('addressNo')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Address Line 1</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="address1" class="form-control" />
                                                            @error('address1')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Address Line 2</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="address2" class="form-control" />
                                                                @error('address2')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">City</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="city" class="form-control" />
                                                                    @error('city')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Postal Code</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="postcode" class="form-control" />
                                                                        @error('postcode')
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Telephone</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" name="telephone" class="form-control" />
                                                                            @error('telephone')
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
                                                                            <button class="btn btn-light" id="cancel">Cancel</button>
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
                                                                        <th>Instructor ID</th>
                                                                        <th>Instructor Name</th>
                                                                        <th>NIC</th>
                                                                        <th>Address</th>
                                                                        <th>Email</th>
                                                                        <th>Telephone</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($instructors as $instructor)
                                                                        <tr>
                                                                            <td>{{ $instructor->instructor_id }}</td>
                                                                            <td>{{ $instructor->fname }}{{ $instructor->lname }}</td>
                                                                            <td>{{ $instructor->nic }}</td>
                                                                            <td>{{ $instructor->address1 }}{{ $instructor->address2 }}{{ $instructor->city }}{{ $instructor->postcode }}
                                                                            </td>
                                                                            <td>{{ $instructor->email }}</td>
                                                                            <td>{{ $instructor->telephone }}</td>
                                                                            <td>
                                                                                <a class="btn btn-warning btn-icon-text"
                                                                                    href="{{ url('/instructor/edit/' . $instructor->id) }}"><i
                                                                                        class="ti-pencil-alt"></i>
                                                                                    <a type="button" class="btn btn-danger btn-icon-text"
                                                                                        href="{{ url('/instructor/delete/' . $instructor->id) }}">
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
                                            </div>
                                        @endsection
