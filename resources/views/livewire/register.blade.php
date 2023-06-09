@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section class="section banner-section bg-pattern-1">
                    <img src="{{asset('build/assets/images/patterns/2.png')}}" alt="img" class="patterns-6 op-1 z-index-0 top-14p">
                    <img src="{{asset('build/assets/images/patterns/2.png')}}" alt="img" class="patterns-1 op-1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Register</span></div>
                            <div class="heading-title">User <span class="tx-primary">Registration</span></div>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-7 col-lg-9 mt-3">
                                <a href="{{url('index')}}">
                                    <img src="{{asset('build/assets/images/brand/logo-color.png')}}" alt="img" class="auth-logo logo-color mb-4 mx-auto">
                                    <img src="{{asset('build/assets/images/brand/logo-white.png')}}" alt="img" class="auth-logo logo-dark mb-4 mx-auto">
                                </a>
                                <div class="card border">
                                    <div class="card-body p-sm-6">
                                        <h3 class="mb-1">Register</h3>
                                        <p class="mb-4 tx-muted">Register here to continue.</p>
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="mb-2 fw-500">First Name<span class="tx-danger ms-1">*</span></label>
                                                        <input class="form-control ms-0" type="text" placeholder="Enter First Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="mb-2 fw-500">
                                                            <span class="d-inline-flex">Last Name</span>
                                                            <span class="tx-muted op-7 ms-1 tx-12 fw-normal">(optional)</span>
                                                        </label>
                                                        <input class="form-control ms-0" type="text" placeholder="Enter Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="mb-2 fw-500">Email<span class="tx-danger ms-1">*</span></label>
                                                        <input class="form-control ms-0" type="email" placeholder="Enter your Email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="mb-2 fw-500">Phone<span class="tx-danger ms-1">*</span></label>
                                                        <input class="form-control ms-0" type="text" placeholder="Enter Mobile Number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="mb-2 fw-500">Create a Password<span class="tx-danger ms-1">*</span></label>
                                                        <div class="input-group">
                                                            <input class="form-control ms-0 border-end-0" type="password" placeholder="Create a Password" id="password">
                                                            <a href="javascript:void(0)" class="input-group-text bg-transparent tx-muted">
                                                                <i class="fe fe-eye tx-muted op-7" id="showPassword"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="mb-2 fw-500">Confirm Password<span class="tx-danger ms-1">*</span></label>
                                                        <input class="form-control ms-0" type="password" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                        <label class="form-check-label tx-15" for="flexCheckChecked">
                                                        Remember me
                                                        </label>
                                                    </div>
                                                    <div class="d-grid mb-3">
                                                        <a href="{{url('index')}}" class="btn btn-primary"> Create an Account</a>
                                                    </div>
                                                    <div class="d-grid mb-3">
                                                        <button type="button" class="btn btn-white border"><img src="{{asset('build/assets/images/png/45.png')}}" class="me-2" alt="img" width="20">Continue with Google</button>
                                                    </div>
                                                    <div class="text-center">
                                                        <p class="mb-0 tx-14">Already have an account ?
                                                            <a href="{{url('login')}}" class="tx-primary ms-1">Login</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image6 bg-gray-100 overflow-hidden">
                    <img src="{{asset('build/assets/images/patterns/7.png')}}" alt="img" class="patterns-6 op-1 top-0">
                    <img src="{{asset('build/assets/images/patterns/7.png')}}" alt="img" class="patterns-5 op-1 transform-rotate-180">
                    <img src="{{asset('build/assets/images/patterns/11.png')}}" alt="img" class="patterns-3 op-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-5">
                                <p class="h2">Join 1000+ Subscribers</p>
                                <p class="mb-0">Stay in the loop with everything you need to know</p>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <form action="javascript:void(0);" class="mb-2 mt-3 mt-md-0">
                                    <div class="form-group custom-form-group">
                                        <input type="text" class="form-control form-control-lg rounded-pill" placeholder="Your Email Address">
                                        <button class="custom-form-btn btn btn-lg btn-primary bg-primary-gradient rounded-pill border-0" type="button" id="btn-addon">Subscribe</button>
                                    </div>
                                </form>
                                <p class="text-center">We can take care your data with our <a href="{{url('privacy-policy')}}" class="tx-primary">privacy policy</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

        <!-- SHOW PASSWORD JS -->
        @vite('resources/assets/js/show-password.js')

@endsection