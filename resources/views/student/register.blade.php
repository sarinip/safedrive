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
                                            <label for="floatingInput">First Name *</label>
                                            <input type="text" name="fname" class="form-control form-control-lg">
                                            @error('fname')
                                                <div class="alert alert-danger">{{ $message }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <div class="form-group">
                                                <label for="floatingInput">Last Name *</label>
                                                <input type="text" name="lname" class=" form-control form-control-lg">
                                                @error('lname')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 ">
                                                <div class="form-group">
                                                    <label for="floatingInput">Date of Birth *</label>
                                                    <input type="date" name="dob" class=" form-control form-control-lg">
                                                    @error('dob')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div class="form-group required">
                                                        <label for="floatingInput">NIC *</label>
                                                        <input type="text" name="nic" class=" form-control form-control-lg">
                                                        @error('nic')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="floatingInput">Addresss No. *</label>
                                                            <input type="text" name="addressNo" class=" form-control form-control-lg">
                                                            @error('addressNo')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="floatingInput">Addresss Line 1 *</label>
                                                                <input type="text" name="address1" class=" form-control form-control-lg">
                                                                @error('address1')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="floatingInput">Addresss Line 2 </label>
                                                                    <input type="text" name="address2" class=" form-control form-control-lg">
                                                                    @error('address2')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="floatingInput">City *</label>
                                                                        <input type="text" name="city" class=" form-control form-control-lg">
                                                                        @error('city')
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="floatingInput">Postal Code *</label>
                                                                            <input type="text" name="postcode" class=" form-control form-control-lg">
                                                                            @error('postcode')
                                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="floatingInput">Telephone *</label>
                                                                                <input type="text" name="telephone" class=" form-control form-control-lg">
                                                                                @error('telephone')
                                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label for="floatingInput">Email *</label>
                                                                                    <input type="email" name="email" class=" form-control form-control-lg">
                                                                                    @error('email')
                                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label for="floatingInput">Password *</label>
                                                                                        <input type="password" name="password" class=" form-control form-control-lg">
                                                                                        @error('password')
                                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label for="floatingInput">Confirm Password *</label>
                                                                                            <input type="password" name="password_confirmation"
                                                                                                class=" form-control form-control-lg">
                                                                                            @error('password_confirmation')
                                                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                                                @endif
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    {{-- <div class="mb-4">
                                                                                        <div class="form-check">
                                                                                            <label for="floatingInput">Amount</label>
                                                                                            <label class="form-check-label text-muted">
                                                                                                <input type="checkbox" id="chkagree" class="form-check-input">
                                                                                                I agree to all Terms & Conditions
                                                                                            </label>
                                                                                        </div>
                                                                                    </div> --}}
                                                                                    <div class="mt-3">
                                                                                        <button tupe="submit"
                                                                                            class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                                                                            SIGN
                                                                                            UP
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="text-center mt-4 font-weight-light">
                                                                                        Already have an account? <a href="{{ url('/login') }}" class="text-primary">Login</a>
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
