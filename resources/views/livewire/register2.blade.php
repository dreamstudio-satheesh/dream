@extends('layouts.custom-app2')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content pt-0">
                <section class="section banner-pd-1">
                    <div class="container">
                        <div class="text-center mb-5">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Register</span></div>
                            <h2>User <span class="tx-primary">Registration</span></h2>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-7 col-lg-9 mt-3">
                                <a href="{{url('index')}}">
                                    <img src="{{asset('build/assets/images/brand/logo-color.png')}}" alt="img" class="auth-logo logo-color mb-4 mx-auto">
                                    <img src="{{asset('build/assets/images/brand/logo-white.png')}}" alt="img" class="auth-logo logo-dark mb-4 mx-auto">
                                </a>
                                <div class="card border mb-0">
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
            </div>

@endsection

@section('scripts')

        <!-- SHOW PASSWORD JS -->
        @vite('resources/assets/js/show-password.js')

@endsection