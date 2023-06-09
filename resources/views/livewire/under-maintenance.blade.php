@extends('layouts.custom-app3')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content my-auto pt-0">
                <section class="section ">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-5 col-lg-7 text-center">
                                <h1 class="construction-heading text-white">Under Construction</h1>
                                <p class="mb-5 text-white op-8">The Page you're looking for is currently under maintenance and will be back soon. Subscribe to get notified</p>
                                <div class="main d-sm-flex">
                                    <div class="counter-item">
                                        <h4 class="count_down">0</h4>
                                        <h5>Days</h5>
                                    </div>
                                    <div class="counter-item">
                                        <h4 class="count_down">0</h4>
                                        <h5>Hours</h5>
                                    </div>
                                    <div class="counter-item">
                                        <h4 class="count_down">0</h4>
                                        <h5>Minutes</h5>
                                    </div>
                                    <div class="counter-item">
                                        <h4 class="count_down">0</h4>
                                        <h5>Seconds</h5>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-5">
                                <form action="javascript:void(0);" class="form mt-5">
                                    <div class="form-group custom-form-group">
                                        <input type="Email" class="form-control form-control-lg border-0" placeholder="Enter Your Email...">
                                        <button class="custom-form-btn btn btn-lg bg-primary-gradient text-white border-0" type="button" id="btn-addon">Subscribe <i class="fa fa-paper-plane ms-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

        <!-- COUNTDOWN JS -->
        @vite('resources/assets/js/count-down.js')

@endsection