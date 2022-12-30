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
                            <h6 class="font-weight-light">Student signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" action="{{ url('student/store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="fname" class="form-control form-control-lg"
                                                   placeholder="First Name" value="{{ old('fname') }}">
                                            @error('fname')
                                            <div class="alert alert-danger">{{ $message }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <input type="text" name="lname" class=" form-control form-control-lg"
                                                   placeholder="Last Name" value="{{ old('lname') }}">
                                            @error('lname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <input type="date" name="dob" class=" form-control form-control-lg"
                                                   placeholder="Date of Birth">
                                            @error('dob')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <input type="text" name="nic" class=" form-control form-control-lg"
                                                   placeholder="NIC No.">
                                            @error('nic')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="addressNo" class=" form-control form-control-lg"
                                                   placeholder="Addresss No.">
                                            @error('addressNo')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="address1" class=" form-control form-control-lg"
                                                   placeholder="Addresss Line 1">
                                            @error('address1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="address2" class=" form-control form-control-lg"
                                                   placeholder="Addresss Line 2">
                                            @error('address2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="city" class=" form-control form-control-lg"
                                                   placeholder="City">
                                            @error('city')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="postcode" class=" form-control form-control-lg"
                                                   placeholder="Postal Code">
                                            @error('postcode')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="telephone" class=" form-control form-control-lg"
                                                   placeholder="Telephone">
                                            @error('telephone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class=" form-control form-control-lg"
                                                   placeholder="Email">
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="password" name="password" class=" form-control form-control-lg"
                                                   placeholder="Password">
                                            @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation"
                                                   class=" form-control form-control-lg" placeholder="Confirm Password">
                                            @error('password_confirmation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @endif
                                        </div>
                                    </div>
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
                                    <button tupe="submit"
                                            class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                        SIGN
                                        UP
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="{{ url('/login') }}"
                                                                class="text-primary">Login</a>
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
