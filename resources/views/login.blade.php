@extends('layouts.master')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{asset('/images/logo.svg')}}" alt="logo">
                        </div>
                        <h4>Welcome to Driving School!</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="pt-3" method="post" action="{{url('/login')}}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                    placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                    placeholder="Password" name="password" required>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                    href="#">SIGN IN</button>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div> -->
                                <a href="#" class="auth-link text-black">Forgot password?</a>
                            </div>

                            <div class="text-center mt-4 font-weight-light">
                                Don't have an account? <a href="{{asset('/register')}} " class=" text-primary">Create
                                    your student account</a>
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
@endsection
