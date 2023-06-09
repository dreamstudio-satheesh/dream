@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section class="banner-1 banner-section banner-arrow-down">
                    <img src="{{asset('build/assets/images/patterns/1.png')}}" alt="img" class="patterns-2">
                    <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-6">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <p class="mb-3 content-1 h5 text-white">WHOIS <span class="tx-info-dark">Lookup</span> </p>
                                <p class="content-2 mb-4">Check to see who has registered any Web address. If the Web address is available, you can register it through us</p>
                                <a href="#domain" class="btn btn-lg btn-secondary me-2">Get Started<i class="bi bi-arrow-right ms-1"></i></a>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center mt-5 mt-lg-0">
                                    <img src="{{asset('build/assets/images/png/20.png')}}" class="img-fluid" alt="img" height="300" width="300">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section custom-bg z-index-0 bg-gray-100" id="domain">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Get Domain</span></div>
                            <div class="heading-title">Perform Whois <span class="tx-primary">Lookup</span> </div>
                            <div class="heading-description">Check Whether Your Domain Name Available Or Not</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <form action="javascript:void(0);" class="position-relative">
                                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-9 sub-pattern-2 filter-invert">
                                    <div class="form-group custom-form-group">
                                        <input type="search" class="form-control form-control-lg" placeholder="Eg. mybrand.com">
                                        <button class="custom-form-btn btn btn-lg btn-primary bg-primary-gradient border-0" type="button" id="btn-addon">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row align-items-center mt-5">
                            <div class="col-xl-3 col-md-6">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="tx-primary">.audio</h3>
                                            <small>Starts at : <span class="badge badge-lg bg-danger">$987.98</span></small>
                                        </div>
                                        <p>Takimata kasd kasd amet consetetur tempor clita at amet, tempor.</p>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{url('register-domain')}}" class="btn btn-primary">Register</a>
                                            <a href="{{url('domain-transfer')}}" class="btn btn-outline-primary">Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="tx-primary">.gov</h3>
                                            <small>Starts at : <span class="badge badge-lg bg-danger">$453.76</span></small>
                                        </div>
                                        <p>Takimata kasd kasd amet consetetur tempor clita at amet, tempor.</p>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{url('register-domain')}}" class="btn btn-primary">Register</a>
                                            <a href="{{url('domain-transfer')}}" class="btn btn-outline-primary">Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="tx-primary">.co.uk</h3>
                                            <small>Starts at : <span class="badge badge-lg bg-danger">$235.72</span></small>
                                        </div>
                                        <p>Takimata kasd kasd amet consetetur tempor clita at amet, tempor.</p>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{url('register-domain')}}" class="btn btn-primary">Register</a>
                                            <a href="{{url('domain-transfer')}}" class="btn btn-outline-primary">Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="tx-primary">.edu</h3>
                                            <small>Starts at : <span class="badge badge-lg bg-danger">$567.23</span></small>
                                        </div>
                                        <p>Takimata kasd kasd amet consetetur tempor clita at amet, tempor.</p>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{url('register-domain')}}" class="btn btn-primary">Register</a>
                                            <a href="{{url('domain-transfer')}}" class="btn btn-outline-primary">Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image6">
                    <img src="{{asset('build/assets/images/patterns/12.png')}}" alt="img" class="patterns-8 sub-pattern-1 z-index-0 op-1">
                    <img src="{{asset('build/assets/images/patterns/11.png')}}" alt="img" class="patterns-3 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Benefits</span></div>
                            <div class="heading-title">Free Add-Ons With Every <span class="tx-primary">Domain Name</span> </div>
                            <div class="heading-description">Checkout Add-On Benefits</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-envelope-paper outline fade-in"></i>
                                                <i class="bi bi-envelope-paper-fill filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">Free Email Forwarding</h5>
                                        </div>
                                        <p class="mb-0">Amet ipsum justo no dolores lorem tempor clita elitr et ut, amet aliquyam et sed invidunt at kasd accusam, dolor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-nut outline fade-in"></i>
                                                <i class="bi bi-nut-fill filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">Bulk Tools</h5>
                                        </div>
                                        <p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-cpu outline fade-in"></i>
                                                <i class="bi bi-cpu-fill filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">DNS Management</h5>
                                        </div>
                                        <p class="mb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-menu-app outline fade-in"></i>
                                                <i class="bi bi-menu-app-fill filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">Easy To Use Control Panel</h5>
                                        </div>
                                        <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem corporis suscipit laboriosam, nisi ut aliquid commodi consequatur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-shield-exclamation outline fade-in"></i>
                                                <i class="bi bi-shield-fill-exclamation filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">Domain Theft Protection</h5>
                                        </div>
                                        <p class="mb-0">Nam libero tempore, nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas est.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-skip-forward outline fade-in"></i>
                                                <i class="bi bi-skip-forward-fill filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">Domain Forwarding</h5>
                                        </div>
                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 overflow-hidden">
                    <img src="{{asset('build/assets/images/patterns/14.png')}}" alt="img" class="patterns-2 z-index-0 filter-invert op-3">
                    <img src="{{asset('build/assets/images/patterns/7.png')}}" alt="img" class="patterns-5 left-0 transform-rotate-180 op-1 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Protection</span></div>
                            <div class="heading-title">Why Domain Protection Is <span class="tx-primary"> Important?</span> </div>
                            <div class="heading-description">See How Whois Is Helpful</div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 text-center text-xl-start">
                                <img src="{{asset('build/assets/images/png/79.png')}}" alt="img" class="img-fluid mb-5 mb-xl-0">
                            </div>
                            <div class="col-xl-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card shadow-none">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <div class="me-4 avatar avatar-lg rounded-circle bg-primary-gradient">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#fff" viewBox="0 0 46 60"><path d="M22.89,43 L23,43 C30.29,43 36,39.394 36,34.79 L36,20.21 C36,20.195 35.992,20.183 35.992,20.169 C35.992,20.113 36,20.057 36,20 C36,15.514 30.29,12 23,12 C17.27,12 12.289,14.233 10.607,17.555 C10.2122384,18.309802 10.0040937,19.1482101 10,20 C10,20.073 10,20.136 10,20.188 C9.99943107,20.1953223 9.99943107,20.2026777 10,20.21 L10,34.79 C10,39.35 15.659,42.956 22.89,43 Z M12,24.292 C12.042,24.333 12.095,24.37 12.139,24.41 C12.339,24.599 12.555,24.781 12.782,24.958 C12.859,25.019 12.931,25.081 13.011,25.141 C13.3276342,25.3735973 13.6557112,25.5902015 13.994,25.79 C14.062,25.83 14.137,25.866 14.207,25.905 C14.495,26.067 14.795,26.2213333 15.107,26.368 C15.229,26.425 15.353,26.48 15.479,26.534 C15.77,26.661 16.071,26.779 16.379,26.891 C16.498,26.934 16.614,26.98 16.735,27.02 C17.162,27.164 17.6,27.296 18.055,27.409 C18.111,27.423 18.17,27.433 18.226,27.446 C18.626,27.5426667 19.0386667,27.627 19.464,27.699 C19.613,27.725 19.764,27.746 19.916,27.768 C20.2706667,27.8213333 20.631,27.8646667 20.997,27.898 C21.148,27.912 21.297,27.928 21.45,27.939 C21.96,27.976 22.475,28 23,28 C23.525,28 24.041,27.975 24.55,27.939 C24.701,27.928 24.85,27.912 24.999,27.898 C25.369,27.864 25.7336667,27.8203333 26.093,27.767 C26.238,27.746 26.383,27.725 26.527,27.701 C26.977,27.624 27.419,27.536 27.848,27.431 L27.929,27.414 C28.403,27.296 28.858,27.159 29.301,27.009 C29.38,26.983 29.456,26.953 29.534,26.925 C29.908,26.7916667 30.2693333,26.6486667 30.618,26.496 C30.684,26.467 30.751,26.438 30.818,26.408 C31.9901149,25.8900985 33.0660078,25.1773449 34,24.3 L34,25 C34,28.252 28.963,31 23,31 C17.037,31 12,28.252 12,25 L12,24.292 Z M12.391,18.461 C13.72,15.835 18.083,14 23,14 C28.963,14 34,16.748 34,20 L33.992,20.161 C33.834,23.381 28.9,26 23,26 C17.1,26 12.166,23.381 12.008,20.161 C12.008,20.136 12.008,20.024 12,20 C12.0054242,19.4631186 12.1395059,18.9353646 12.391,18.461 Z M13.927,30.772 C14.027,30.832 14.135,30.888 14.239,30.946 C14.4996667,31.092 14.7703333,31.2306667 15.051,31.362 C15.173,31.42 15.296,31.477 15.422,31.532 C15.733,31.668 16.055,31.793 16.386,31.912 C16.48,31.945 16.569,31.983 16.665,32.012 C17.093,32.156 17.5356667,32.2853333 17.993,32.4 C18.099,32.426 18.21,32.447 18.318,32.472 C18.676,32.5546667 19.0426667,32.6283333 19.418,32.693 C19.577,32.72 19.737,32.744 19.898,32.767 C20.25,32.819 20.607,32.86 20.97,32.894 C21.124,32.908 21.277,32.925 21.434,32.936 C21.948,32.973 22.469,32.997 23.002,32.997 C23.535,32.997 24.056,32.973 24.57,32.936 C24.727,32.925 24.88,32.908 25.034,32.894 C25.397,32.86 25.754,32.819 26.106,32.767 C26.267,32.744 26.427,32.72 26.586,32.693 C26.96,32.6263333 27.3266667,32.5526667 27.686,32.472 C27.794,32.447 27.905,32.426 28.011,32.4 C28.4676667,32.286 28.9103333,32.1566667 29.339,32.012 C29.439,31.98 29.524,31.942 29.618,31.912 C29.949,31.793 30.271,31.668 30.582,31.532 C30.708,31.477 30.831,31.42 30.953,31.362 C31.2336667,31.2286667 31.5043333,31.09 31.765,30.946 C31.865,30.888 31.976,30.832 32.077,30.772 C32.741842,30.3823113 33.3607338,29.9190648 33.922,29.391 C33.947,29.367 33.979,29.346 34.004,29.321 L34.004,30 C34.004,33.252 28.967,36 23.004,36 C17.041,36 12.004,33.252 12.004,30 L12.004,29.321 C12.029,29.346 12.061,29.367 12.086,29.391 C12.6460149,29.9188224 13.2635541,30.3820607 13.927,30.772 Z M12,34.321 C12.025,34.346 12.057,34.367 12.082,34.391 C12.6432662,34.9190648 13.262158,35.3823113 13.927,35.772 C14.027,35.832 14.135,35.888 14.239,35.946 C14.4996667,36.092 14.7703333,36.2306667 15.051,36.362 C15.173,36.42 15.296,36.477 15.422,36.532 C15.733,36.668 16.055,36.793 16.386,36.912 C16.48,36.945 16.569,36.983 16.665,37.012 C17.093,37.156 17.5356667,37.2853333 17.993,37.4 C18.099,37.426 18.21,37.447 18.318,37.472 C18.676,37.5546667 19.0426667,37.6283333 19.418,37.693 C19.577,37.72 19.737,37.744 19.898,37.767 C20.25,37.819 20.607,37.86 20.97,37.894 C21.124,37.908 21.277,37.925 21.434,37.936 C21.948,37.973 22.469,37.997 23.002,37.997 C23.535,37.997 24.056,37.973 24.57,37.936 C24.727,37.925 24.88,37.908 25.034,37.894 C25.397,37.86 25.754,37.819 26.106,37.767 C26.267,37.744 26.427,37.72 26.586,37.693 C26.96,37.6263333 27.3266667,37.5526667 27.686,37.472 C27.794,37.447 27.905,37.426 28.011,37.4 C28.4676667,37.286 28.9103333,37.1566667 29.339,37.012 C29.439,36.98 29.524,36.942 29.618,36.912 C29.949,36.793 30.271,36.668 30.582,36.532 C30.708,36.477 30.831,36.42 30.953,36.362 C31.2336667,36.2286667 31.5043333,36.09 31.765,35.946 C31.865,35.888 31.976,35.832 32.077,35.772 C32.741842,35.3823113 33.3607338,34.9190648 33.922,34.391 C33.947,34.367 33.979,34.346 34.004,34.321 L34.004,34.79 C34,38.156 28.963,41 23,41 L22.9,41 C16.989,40.964 12,38.12 12,34.79 L12,34.321 Z"/><path d="M5.367,47.408 L22.412,59.808 C22.7625781,60.0628521 23.2374219,60.0628521 23.588,59.808 L40.633,47.408 C43.969601,45.011711 45.9632657,41.167768 46,37.06 L46,5 C46,4.44771525 45.5522847,4 45,4 L42.748,4 C36.0970975,4.0144927 29.5122396,2.68098839 23.391,0.08 C23.1413055,-0.0269595095 22.8586945,-0.0269595095 22.609,0.08 C16.4877604,2.68098839 9.90290253,4.0144927 3.252,4 L1,4 C0.73478351,4 0.480429597,4.10535684 0.292893219,4.29289322 C0.10535684,4.4804296 -2.66453526e-15,4.73478351 0,5 L0,37.06 C0.0367343111,41.167768 2.03039896,45.011711 5.367,47.408 Z M2,6 L3.252,6 C10.0288448,6.01429393 16.7411545,4.68359247 23,2.085 C29.2588455,4.68359247 35.9711552,6.01429393 42.748,6 L44,6 L44,37.06 C43.9643184,40.5281967 42.2767606,43.7714428 39.457,45.791 L23,57.764 L6.543,45.791 C3.72323936,43.7714428 2.03568159,40.5281967 2,37.06 L2,6 Z"/><path d="M7.721,44.174 L22.412,54.862 C22.7625781,55.1168521 23.2374219,55.1168521 23.588,54.862 L38.281,44.173 C40.583391,42.5301663 41.964736,39.8881908 42,37.06 L42,8.973 C42.0002597,8.43259844 41.5711419,7.98975239 41.031,7.973 C34.9801597,7.7912137 29.0047178,6.57813374 23.362,4.386 C23.1294364,4.29399053 22.8705636,4.29399053 22.638,4.386 C16.9952822,6.57813374 11.0198403,7.7912137 4.969,7.973 C4.4288581,7.98975239 3.99974028,8.43259844 4,8.973 L4,37.06 C4.03557137,39.8888646 5.41769522,42.5312804 7.721,44.174 Z M6,9.934 C11.8183505,9.65776054 17.5561718,8.46125604 23,6.389 C28.4438282,8.46125604 34.1816495,9.65776054 40,9.934 L40,37.06 C39.9657528,39.2509006 38.8884576,41.2940467 37.1,42.56 L23,52.817 L8.9,42.557 C7.11204254,41.2906081 6.03489164,39.2477357 6,37.057 L6,9.934 Z"/><path d="M19.74 18.379C20.8445494 18.1207487 21.9756802 17.9935384 23.11 18 24.5331707 17.9852783 25.9500135 18.1913952 27.31 18.611 27.4069006 18.6424819 27.5081141 18.658676 27.61 18.659 28.102455 18.6589517 28.5215697 18.3003843 28.5978367 17.8138709 28.6741037 17.3273575 28.3848172 16.8577395 27.916 16.707 26.3602515 16.2239936 24.7389376 15.9854857 23.11 16 21.8175881 15.9928938 20.5289027 16.1392514 19.271 16.436 18.9129273 16.5094192 18.6234409 16.772355 18.51602 17.1217362 18.408599 17.4711173 18.5003604 17.8512718 18.7553336 18.1131785 19.0103068 18.3750852 19.3878631 18.4770107 19.74 18.379zM14.553 20.9C14.7903497 21.0186659 15.0651326 21.0381283 15.3168386 20.9541012 15.5685446 20.8700742 15.7765321 20.6894485 15.895 20.452 15.9947752 20.2333562 16.1481925 20.0434764 16.341 19.9 16.8380563 19.6572708 17.0442291 19.0575563 16.8015 18.5605 16.5587708 18.0634437 15.9590563 17.8572709 15.462 18.1 14.8673284 18.4294812 14.3922827 18.9388337 14.105 19.555 13.9853831 19.792654 13.9654037 20.0681783 14.0494827 20.3206032 14.1335618 20.573028 14.3147669 20.7815406 14.553 20.9z"/></svg>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="">Secure Your Data</h5>
                                                        <p class="mb-0">Sed eos kasd ea dolore justo et, diam amet clita stet dolor mnis voluptas est acere possimus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card shadow-none">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <div class="me-4 avatar avatar-lg rounded-circle bg-secondary-gradient">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#fff" data-name="Layer 1" viewBox="0 0 68 68"><path d="M61.86,58.59H6.14a2.86,2.86,0,0,1-2.86-2.85V15.86A2.86,2.86,0,0,1,6.14,13H20.21a1,1,0,0,1,0,2H6.14a.86.86,0,0,0-.86.85V55.74a.86.86,0,0,0,.86.85H61.86a.86.86,0,0,0,.86-.85V15.86a.86.86,0,0,0-.86-.85H47.79a1,1,0,0,1,0-2H61.86a2.86,2.86,0,0,1,2.86,2.85V55.74A2.86,2.86,0,0,1,61.86,58.59Z"/><path d="M59.39 51H8.61a1 1 0 0 1-1-1V18.36a1 1 0 0 1 1-1h7.14a1 1 0 0 1 0 2H9.61V49H58.39V19.36H52.25a1 1 0 0 1 0-2h7.14a1 1 0 0 1 1 1V50A1 1 0 0 1 59.39 51zM45.51 67h-23a1 1 0 0 1-.9-1.43l4-8.41a1 1 0 0 1 .9-.57h15a1 1 0 0 1 .91.57l4 8.41a1 1 0 0 1-.06 1A1 1 0 0 1 45.51 67zM24.07 65H43.92l-3.07-6.41H27.14z"/><path d="M53.14,44H14.86a1,1,0,0,1-1-1V19.16a1,1,0,1,1,2,0V42H52.14V19.16a1,1,0,1,1,2,0V43A1,1,0,0,1,53.14,44Z"/><path d="M14.86,44a1,1,0,0,1-.85-.47,1,1,0,0,1,.32-1.38L51.48,19l-4.36-3.91A1,1,0,0,1,47,13.7a1,1,0,0,1,1.42-.08l5.35,4.8a1,1,0,0,1,.33.83,1,1,0,0,1-.47.76L15.39,43.83A1,1,0,0,1,14.86,44Z"/><path d="M53.14 44a1 1 0 0 1-.53-.15L14.33 20a1 1 0 0 1-.47-.76 1 1 0 0 1 .33-.83l5.35-4.8A1 1 0 0 1 21 13.7a1 1 0 0 1-.08 1.41L16.52 19 53.67 42.13A1 1 0 0 1 54 43.51 1 1 0 0 1 53.14 44zM27.37 8.94a1 1 0 0 1-.75-.33A1 1 0 0 1 26.7 7.2l6.63-5.95a1 1 0 0 1 1.34 0L41.3 7.2A1 1 0 1 1 40 8.69L34 3.34 28 8.69A1 1 0 0 1 27.37 8.94z"/><path d="M33.81,25a7,7,0,0,1-5.66-11.1,6.8,6.8,0,0,1,1.2-1.27A6.92,6.92,0,0,1,33.81,11a7.06,7.06,0,0,1,4.48,1.62,6.93,6.93,0,0,1,1.19,1.29A6.85,6.85,0,0,1,40.82,18,7,7,0,0,1,33.81,25Zm0-12a5,5,0,0,0-3.18,1.16A5,5,0,0,0,28.82,18a5,5,0,0,0,10,0,4.88,4.88,0,0,0-1-2.92A5,5,0,0,0,33.81,13Z"/><path d="M38,23.16a1,1,0,0,1-.7-.3L29,14.57a1,1,0,0,1,0-1.42,1,1,0,0,1,1.41,0l8.3,8.3a1,1,0,0,1,0,1.41A1,1,0,0,1,38,23.16Z"/><path d="M47.79 23.5a1 1 0 0 1-1-1V8.94H21.21V22.5a1 1 0 0 1-2 0V7.94a1 1 0 0 1 1-1H47.79a1 1 0 0 1 1 1V22.5A1 1 0 0 1 47.79 23.5zM47.79 67H20.21a1 1 0 0 1 0-2H47.79a1 1 0 0 1 0 2zM36.5 54.72h-5a1 1 0 0 1 0-2h5a1 1 0 0 1 0 2z"/></svg>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="">Prevent Spam Emails</h5>
                                                        <p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore corporis suscipit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card shadow-none">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <div class="me-4 avatar avatar-lg rounded-circle bg-success-gradient">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#fff" viewBox="0 0 48 48"><path d="M43.5 48H23.1c-2.4 0-4.5-2.1-4.5-4.5V30.9h2v12.6c0 1.4 1.1 2.5 2.5 2.5h20.4c1.4 0 2.5-1.1 2.5-2.5v-39C46 3.1 44.9 2 43.5 2H23.1c-1.4 0-2.5 1.1-2.5 2.5v8.3h-2V4.5c0-2.4 2.1-4.5 4.5-4.5h20.4C45.9 0 48 2.1 48 4.5v39c0 2.4-2.1 4.5-4.5 4.5z"/><path d="M44.1 39H22.5V26.9h2V37h17.6V6.7H24.5v10.2h-2V4.7h21.6zM30.5 41.5h5.6v2h-5.6z"/><path d="M15.3 36.8v-8.7H0V15.6h15.3V6.9l4.9 5.2 9.6 9.8-14.5 14.9zM2 26.1h15.3v5.7l9.7-9.9-9.7-10v5.7H2v8.5z"/></svg>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="">Prevent Spam Calls</h5>
                                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card shadow-none">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <div class="me-4 avatar avatar-lg rounded-circle bg-danger-gradient">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#fff" viewBox="0 0 60 60"><path d="M51.367,4.61C47.112,4.1,36.628,2.64,31.168.245a2.9,2.9,0,0,0-2.334,0C23.372,2.64,12.888,4.1,8.632,4.61A3,3,0,0,0,6,7.588v28.48A20.993,20.993,0,0,0,18.628,55.327L28.8,59.75a3.073,3.073,0,0,0,2.392,0l10.177-4.424A20.993,20.993,0,0,0,54,36.068V7.588A3,3,0,0,0,51.367,4.61ZM52,36.068A18.993,18.993,0,0,1,40.575,53.493L30.4,57.918a1,1,0,0,1-.794,0L19.425,53.493A18.993,18.993,0,0,1,8,36.068V7.588A1,1,0,0,1,8.873,6.6c4.343-.527,15.059-2.019,20.766-4.522a.937.937,0,0,1,.724,0c5.7,2.5,16.421,3.994,20.763,4.52A1,1,0,0,1,52,7.588Z"/><path d="M48.273,8.244c-5.279-.723-12.615-1.981-17.581-3.875a1.915,1.915,0,0,0-1.386,0c-4.959,1.892-12.3,3.15-17.58,3.874A2.006,2.006,0,0,0,10,10.226V36.068A17,17,0,0,0,20.224,51.66l8.979,3.9a2.05,2.05,0,0,0,1.594,0l8.979-3.9A17,17,0,0,0,50,36.068V10.226A2.008,2.008,0,0,0,48.273,8.244ZM16,46.256V44a2,2,0,0,1,2-2H29V53.294l-7.979-3.468A14.969,14.969,0,0,1,16,46.256ZM38,18H22V14.229a.988.988,0,0,1,.6-.917A18.978,18.978,0,0,1,30,12a18.988,18.988,0,0,1,7.4,1.312.989.989,0,0,1,.6.917Zm5,2a1,1,0,0,1,0,2H17a1,1,0,0,1,0-2Zm-4,4v4.171a.974.974,0,0,1-.438.842A8.988,8.988,0,0,1,34.645,30a.978.978,0,0,1-.977-.567A3.7,3.7,0,0,0,30,27.035a3.7,3.7,0,0,0-3.668,2.4.958.958,0,0,1-.977.565,8.986,8.986,0,0,1-3.915-.983.974.974,0,0,1-.44-.843V24Zm-13.8,7.991c.076.006.151.009.226.009a2.967,2.967,0,0,0,2.76-1.832A1.726,1.726,0,0,1,30,29.035a1.727,1.727,0,0,1,1.809,1.131A2.943,2.943,0,0,0,34.8,31.991a14.275,14.275,0,0,0,3.116-.558A11.191,11.191,0,0,1,36.464,35H32.68a1.989,1.989,0,0,0-1.859,1.258L30,38.31l-.82-2.048A1.989,1.989,0,0,0,27.32,35H23.536a11.177,11.177,0,0,1-1.447-3.567A14.252,14.252,0,0,0,25.205,31.991ZM37.8,40H31.478l1.2-3H39ZM27.321,37l1.2,3H22.2L21,37ZM38.979,49.826,31,53.294V42H42a2,2,0,0,1,2,2v2.256A14.969,14.969,0,0,1,38.979,49.826ZM48,36.068a14.973,14.973,0,0,1-2.04,7.54A3.99,3.99,0,0,0,42,40H39.956l.9-2.263A2,2,0,0,0,39,35h-.242a11.9,11.9,0,0,0,1.3-4.647A3,3,0,0,0,41,28.171V24h2a3,3,0,0,0,0-6H40V14.229a2.986,2.986,0,0,0-1.82-2.759A20.985,20.985,0,0,0,30,10a20.975,20.975,0,0,0-8.179,1.47A2.985,2.985,0,0,0,20,14.229V18H17a3,3,0,0,0,0,6h2v4.171a3.005,3.005,0,0,0,.943,2.182A11.9,11.9,0,0,0,21.242,35H21a2,2,0,0,0-1.858,2.741l.9,2.259H18a3.99,3.99,0,0,0-3.96,3.608A14.973,14.973,0,0,1,12,36.068l0-25.841C17.384,9.489,24.882,8.2,29.981,6.239,35.123,8.2,42.619,9.489,48,10.226Z"/><path d="M24 28h1a1 1 0 000-2H24a1 1 0 000 2zM35 28h1a1 1 0 000-2H35a1 1 0 000 2z"/></svg>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="">Prevents Domain Theft</h5>
                                                        <p class="mb-0">Sed eos kasd ea dolore justo et, diam amet clita stet dolor, sit consetetur clita sanctus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <section class="section blob-bg-sec banner-pd-3">
                    <img src="{{asset('build/assets/images/patterns/18.png')}}" alt="img" class="patterns-5 transform-rotate-180 height-inherit bottom-0 op-1">
                    <img src="{{asset('build/assets/images/patterns/18.png')}}" alt="img" class="patterns-7 height-inherit bottom-0">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="heading-section text-start mb-4">
                                    <div class="heading-title text-white">Best Technical Support 24/7</div>
                                    <div class="heading-description text-white op-8">Support and Guidance</div>
                                </div>
                                <p class="mb-3 op-8">Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd, sed et et erat elitr consetetur et aliquyam. Et lorem ipsum Sit ipsum sanctus ea.</p>
                                <p class="tx-20 fw-500">Call Us : <a href="tel:123-789-7854" class="text-white me-1">123-789-7854</a> (Or) <a href="{{url('contact-us')}}" class="text-white ms-1">Chat Now</a></p>
                                <a href="{{url('contact-us')}}" class="btn btn-lg btn-secondary">Contact Now</a>
                            </div>
                            <div class="col-lg-5">
                                <div class="text-center mt-5 mt-lg-0">
                                    <img src="{{asset('build/assets/images/png/57.png')}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">FAQ's</span></div>
                            <div class="heading-title">We Are Here To <span class="tx-primary">Help You</span> </div>
                            <div class="heading-description">Browse Through The Most Frequently Asked Questions</div>
                        </div>
                        <div class="accordion accordion-style-1" id="acc-style-1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-1" aria-expanded="false" aria-controls="acc-1">
                                        What is a Premium Domain ?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Premium Domains are highly sought after domain names made up of important keywords and brand friendly words/phrases. They are usually privately owned and are sold at a much higher price than an ordinary domain name.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        Why are Premium Domains so expensive?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Typically, Premium Domains are short, popular names that contain important keywords/keyphrases and hence command a higher value. Since they have been registered previously, they are well-established and boast of a higher page rank on the search engines. Hence, because they are well-geared to attract more traffic, they come at a higher price which is reflective of their value.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        Will renewal rate for Premium Domains be as expensive?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">No. In most cases, Premium Domains renew at the regular price of that TLD.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                        How do I search for a Premium Domain?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">We have a dedicated page that allows you to search for Premium Domains under the Domains Tab. Alternatively, when you perform a regular domain search, we will show you the best available Premium Domains that closely match the domain you've searched for. Finally, if the domain you searched for via our regular domain search happens to be a Premium Domain itself, it will be prominently highlighted on our results page as a Premium Domain.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        What is the procedure to procure a Premium Domain?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">After you complete the purchase of a Premium Domain with us, we will proceed to complete the transfer of ownership. This may take upto 5-7 days. A confirmation email will be sent to your registered email address as soon as ownership of the domain has been transferred to your account. You can then proceed to manage the domain as you would manage a regular domain name.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

@endsection