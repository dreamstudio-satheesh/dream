@extends('layouts.custom-app2')

@section('styles')

@endsection

@section('content')

        <div class="page justify-content-center">
            <div class="main-content app-content pt-0">
                <section class="section banner-pd-1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Login</span></div>
                            <div class="heading-title">Login to your <span class="tx-primary">Account</span></div>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-4 col-lg-6 mt-3">
                                <a href="{{url('index')}}">
                                    <img src="{{asset('build/assets/images/brand/logo-color.png')}}" alt="img" class="auth-logo logo-color mb-4 mx-auto">
                                    <img src="{{asset('build/assets/images/brand/logo-white.png')}}" alt="img" class="auth-logo logo-dark mb-4 mx-auto">
                                </a>
                                <div class="card border mb-0">
                                    <div class="card-body p-sm-6">
                                        <h3 class="mb-1">Login</h3>
                                        <p class="mb-4 tx-muted">Sign in to your account to continue.</p>
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label class="mb-2 fw-500">Email<span class="tx-danger ms-1">*</span></label>
                                                        <input class="form-control ms-0" type="email" placeholder="Enter your Email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label class="mb-2 fw-500">Password<span class="tx-danger ms-1">*</span></label>
                                                        <div class="input-group">
                                                            <input class="form-control ms-0 border-end-0" type="password" placeholder="Enter your Password" id="password">
                                                            <a href="javascript:void(0)" class="input-group-text bg-transparent tx-muted">
                                                                <i class="fe fe-eye tx-muted op-7" id="showPassword"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="d-flex mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label tx-15" for="flexCheckDefault">
                                                                Remember me
                                                            </label>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="{{url('forgot-password')}}" class="tx-primary ms-1 tx-13">Forgot Password?</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid mb-3">
                                                        <a href="{{url('index')}}" class="btn btn-primary"> Login</a>
                                                    </div>
                                                    <div class="d-grid mb-3">
                                                        <button type="button" class="btn btn-white border"><img src="{{asset('build/assets/images/png/45.png')}}" class="me-2" alt="img" width="20">Continue with Google</button>
                                                    </div>
                                                    <div class="text-center">
                                                        <p class="mb-0 tx-14">Don't have an account yet?
                                                            <a href="{{url('register')}}" class="tx-primary ms-1">Sign Up</a>
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
        </div>

@endsection

@section('scripts')

        <!-- SHOW PASSWORD JS -->
        @vite('resources/assets/js/show-password.js')

@endsection