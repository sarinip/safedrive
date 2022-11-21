@extends('layouts.core')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{ asset('/images/Logo-01.png') }}" alt="logo">
                        </div>
                        <h4>New here?</h4>
                        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                        <form class="pt-3" action="{{ url('student/store') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <input type="text" name="fname" class="form-control form-control-lg" placeholder="First Name" value="{{old('fname')}}">
                                @error('fname')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" name="lname" class=" form-control form-control-lg" placeholder="last name" value="{{old('lname')}}">
                                @error('lname')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="date" name="dob" class=" form-control form-control-lg" placeholder="dob">
                                @error('dob')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" name="nic" class=" form-control form-control-lg" placeholder="nic">
                                @error('nic')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="text" name="addressNo" class=" form-control form-control-lg" placeholder="adrs no">
                                @error('addressNo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" name="address1" class=" form-control form-control-lg" placeholder="adr 1">
                                @error('address1')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" name="address2" class=" form-control form-control-lg" placeholder="adr 2">
                                @error('address2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" name="city" class=" form-control form-control-lg" placeholder="city">
                                @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" name="postcode" class=" form-control form-control-lg" placeholder="post code">
                                @error('postcode')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" name="telephone" class=" form-control form-control-lg" placeholder="tel">
                                @error('telephone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class=" form-control form-control-lg" placeholder="email">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class=" form-control form-control-lg" placeholder="Password">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class=" form-control form-control-lg" placeholder="Confirm Password">
                                @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @endif
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" id="chkagree" class="form-check-input">
                                        I agree to all Terms & Conditions
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Already have an account? <a href="{{asset('/login')}}" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->


@endsection
