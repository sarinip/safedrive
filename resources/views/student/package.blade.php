@extends('student::layouts.master')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Select Your Driving Package</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Driving Package
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Car + Three wheeletr + motorcycle
                            </td>
                            <td>
                                LKR 13,000
                            </td>
                            <td>
                                <input type="checkbox" class="form-check-input">
                            </td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mr-2"
                        href="{{asset('student/profile')}}">Continue</button>
                    <button class="btn btn-light" href="{{asset('/login')}}">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection