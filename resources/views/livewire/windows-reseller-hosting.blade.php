@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section>
                    <div class="banner-2 banner-section banner-arrow-down">
                        <img src="{{asset('build/assets/images/patterns/1.png')}}" alt="img" class="patterns-2">
                        <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                        <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                        <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-6">
                        <div class="container">
                            <div class="row align-items-stretch">
                                <div class="col-lg-7">
                                    <div class="mb-4">
                                        <p class="mb-3 content-1 h5 text-white">Rock Solid Windows <span class="tx-info-dark">Reseller Hosting</span></p>
                                        <p class="mb-4 content-2 tx-18">
                                            Earn Money With Windows Reseller Hosting!
                                        </p>
                                        <ul class="list-unstyled mb-4">
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>State-of-the-Art Hosting Infrastructure</li>
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>99.9% Uptime Guarantee</li>
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Widely popular Parallels Plesk panel</li>
                                            <li class="list-item"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>30-Day Money-Back Guarantee</li>
                                        </ul>
                                    </div>
                                    <a href="#plans" class="btn btn-lg btn-secondary"><i class="fe fe-eye me-1"></i> View Plans</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="btn btn-lg btn-white"><i class="fe fe-shopping-cart me-1"></i> Buy Now</a>
                                </div>
                                <div class="col-lg-5">
                                    <div class="banner-bg mt-5 mt-lg-0">
                                        <img src="{{asset('build/assets/images/png/50.png')}}" class="img-fluid" alt="img">
                                        <div class="price-offer">
                                            <div>
                                                <p class="mb-1 tx-11 fw-bold lh-1 mt-2">Offer Price</p>
                                                <p class="mb-1 tx-16 fw-bold lh-1">Now Only</p>
                                                <h3 class="mb-0 text-white">$13</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image1 z-index-0 overflow-hidden">
                    <img src="{{asset('build/assets/images/patterns/23.png')}}" alt="img" class="patterns-1 op-2">
                    <img src="{{asset('build/assets/images/patterns/16.png')}}" alt="img" class="patterns-7 op-1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Features</span></div>
                            <div class="heading-title">Powerful Windows Reseller <span class="tx-primary">Hosting Features</span></div>
                            <div class="heading-description">Checkout These Features</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 linux-feature-list">
                                <div class="card feature-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-primary-transparent primary-shadow tx-primary rounded-circle tx-18"><i class="bi bi-gear-wide-connected"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Plesk Onyx 17.5.3</h5>
                                                <ul class="list-styled mb-0 ps-4 fw-500">
                                                    <li class="list-item mb-2">Complete Administrative Control</li>
                                                    <li class="list-item mb-2">Monitor Server Status around the clock</li>
                                                    <li class="list-item">Create Hosting Packages - Limit Disk Space, Bandwidth, Databases etc.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 linux-feature-list">
                                <div class="card feature-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-secondary-transparent secondary-shadow tx-secondary rounded-circle tx-18"><i class="bi bi-cpu"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">All in one Billing & Client Management Solution - WHMCS</h5>
                                                <ul class="list-styled mb-0 ps-4 fw-500">
                                                    <li class="list-item mb-2">Easily manage all Billing, Client Management and Support functions</li>
                                                    <li class="list-item mb-2">Integrated Domain Management</li>
                                                    <li class="list-item">Customizable, Simple and Secure
                                                        <span>* Not included in plan - Essential</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 linux-feature-list">
                                <div class="card feature-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-info-transparent info-shadow tx-info rounded-circle tx-18"><i class="bi bi-headset"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Reliable Support</h5>
                                                <ul class="list-styled mb-0 ps-4 fw-500">
                                                    <li class="list-item mb-2">99.9% Uptime Guarantee</li>
                                                    <li class="list-item mb-2">30 Day Money Back Guarantee</li>
                                                    <li class="list-item">24x7x365 Support</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 linux-feature-list">
                                <div class="card feature-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-pink-transparent pink-shadow tx-pink rounded-circle tx-18"><i class="bi bi-gift"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Robust Infrastructure</h5>
                                                <ul class="list-styled mb-0 ps-4 fw-500">
                                                    <li class="list-item mb-2">State-of-the-art Datacenters</li>
                                                    <li class="list-item mb-2">Dual Quad-Core Xeon powered Servers</li>
                                                    <li class="list-item">Redundant Scalable Servers</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 linux-feature-list">
                                <div class="card feature-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-danger-transparent danger-shadow tx-danger rounded-circle tx-18"><i class="bi bi-hdd-network"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Hosting Features & Addons</h5>
                                                <ul class="list-styled mb-0 ps-4 fw-500">
                                                    <li class="list-item mb-2">Unlimited Add-On Domains</li>
                                                    <li class="list-item mb-2">Unlimited Sub-Domains</li>
                                                    <li class="list-item">Unlimited Databases</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 linux-feature-list">
                                <div class="card feature-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-purple-transparent purple-shadow tx-purple rounded-circle tx-18"><i class="bi bi-envelope-check"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Advanced Email Hosting Included</h5>
                                                <ul class="list-styled mb-0 ps-4 fw-500">
                                                    <li class="list-item mb-2">Unlimited POP3 Email Accounts with SMTP</li>
                                                    <li class="list-item mb-2">IMAP Support</li>
                                                    <li class="list-item">Easy to use Webmail Interface</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-gray-100 bg-pattern-1" id="plans">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 filter-invert op-1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Choose Plan</span></div>
                            <div class="heading-title">Select Your <span class="tx-primary">Plan</span></div>
                            <div class="heading-description">Best Suited For Visitors From World Over</div>
                        </div>
                        <div class="text-center mb-4">
                            <div class="tab-style-1 border p-1 rounded-pill d-inline-block">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <button class="nav-link rounded-pill me-2 active" data-bs-toggle="pill" data-bs-target="#pills-monthly">Montly</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link rounded-pill" data-bs-toggle="pill" data-bs-target="#pills-yearly">Yearly</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-monthly">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card pricing-card border">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <span class="avatar avatar-lg bg-primary rounded-circle text-white"><i class="bi bi-hdd-stack fs-4"></i></span>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <h4 class="h5 mb-0">Starter Lite</h4>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Disk Space</p>
                                                        <h4 class="h5 mb-0">30GB</h4>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Bandwidth</p>
                                                        <h4 class="h5 mb-0">150GB</h4>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Domains</p>
                                                        <h4 class="h5 mb-0">Unlimited</h4>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Price</p>
                                                        <p class="h5 mb-0 tx-28 fw-600">$96.9<span class="tx-14 tx-muted op-7"> / month</span></p>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary-gradient">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card pricing-card border">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="ribbone"><span class="bg-secondary">25% Offer</span></div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <span class="avatar avatar-lg bg-primary rounded-circle text-white"><i class="bi bi-gem fs-4"></i></span>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <h5 class="mb-0">Premium Lite</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Disk Space</p>
                                                        <h5 class="mb-0">60GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Bandwidth</p>
                                                        <h5 class="mb-0">250GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Domains</p>
                                                        <h5 class="mb-0">Unlimited</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Price</p>
                                                        <h3 class="mb-0 fw-600">$256<span class="tx-14 tx-muted op-7"> / month</span></h3>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary-gradient">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card pricing-card border">
                                            <div class="card-body">
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <span class="avatar avatar-lg bg-primary rounded-circle text-white"><i class="bi bi-airplane fs-4"></i></span>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <h5 class="mb-0">Expert</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Disk Space</p>
                                                        <h5 class="mb-0">130GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Bandwidth</p>
                                                        <h5 class="mb-0">350GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Domains</p>
                                                        <h5 class="mb-0">Unlimited</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Price</p>
                                                        <h3 class="mb-0 fw-600">$654<span class="tx-14 tx-muted op-7"> / month</span></h3>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary-gradient">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card pricing-card border">
                                            <div class="card-body">
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <span class="avatar avatar-lg bg-primary rounded-circle text-white"><i class="bi bi-layers fs-4"></i></span>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <h5 class="mb-0">Professional</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Disk Space</p>
                                                        <h5 class="mb-0">380GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Bandwidth</p>
                                                        <h5 class="mb-0">660GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Domains</p>
                                                        <h5 class="mb-0">Unlimited</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Price</p>
                                                        <h3 class="mb-0 fw-600">$456<span class="tx-14 tx-muted op-7"> / month</span></h3>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary-gradient">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-yearly">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card pricing-card border">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-sm text-center">
                                                        <span class="avatar avatar-lg bg-primary rounded-circle text-white"><i class="bi bi-hdd-stack fs-4"></i></span>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <h4 class="h5 mb-0">Starter Lite</h4>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Disk Space</p>
                                                        <h4 class="h5 mb-0">30GB</h4>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Bandwidth</p>
                                                        <h4 class="h5 mb-0">150GB</h4>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Domains</p>
                                                        <h4 class="h5 mb-0">Unlimited</h4>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Price</p>
                                                        <p class="h5 mb-0 tx-28 fw-600">$916.9<span class="tx-14 tx-muted op-7"> / year</span></p>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary-gradient">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card pricing-card border">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="ribbone"><span class="bg-secondary">25% Offer</span></div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <span class="avatar avatar-lg bg-primary rounded-circle text-white"><i class="bi bi-gem fs-4"></i></span>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <h5 class="mb-0">Premium Lite</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Disk Space</p>
                                                        <h5 class="mb-0">60GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Bandwidth</p>
                                                        <h5 class="mb-0">250GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Domains</p>
                                                        <h5 class="mb-0">Unlimited</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Price</p>
                                                        <h3 class="mb-0 fw-600">$1256<span class="tx-14 tx-muted op-7"> / year</span></h3>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary-gradient">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card pricing-card border">
                                            <div class="card-body">
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <span class="avatar avatar-lg bg-primary rounded-circle text-white"><i class="bi bi-airplane fs-4"></i></span>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <h5 class="mb-0">Expert</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Disk Space</p>
                                                        <h5 class="mb-0">130GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Bandwidth</p>
                                                        <h5 class="mb-0">350GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Domains</p>
                                                        <h5 class="mb-0">Unlimited</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Price</p>
                                                        <h3 class="mb-0 fw-600">$1654<span class="tx-14 tx-muted op-7"> / year</span></h3>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary-gradient">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card pricing-card border">
                                            <div class="card-body">
                                                <div class="row justify-content-around align-items-center">
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <span class="avatar avatar-lg bg-primary rounded-circle text-white"><i class="bi bi-layers fs-4"></i></span>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <h5 class="mb-0">Professional</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Disk Space</p>
                                                        <h5 class="mb-0">380GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Bandwidth</p>
                                                        <h5 class="mb-0">660GB</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Domains</p>
                                                        <h5 class="mb-0">Unlimited</h5>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <p class="mb-1 fw-600 tx-muted op-8">Price</p>
                                                        <h3 class="mb-0 fw-600">$1456<span class="tx-14 tx-muted op-7"> / year</span></h3>
                                                    </div>
                                                    <div class="col-sm mb-4 mb-sm-0 text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary-gradient">Buy Now</a>
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

                <section class="section bg-pattern-2 bg-image2 text-white">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6">
                                <div class="heading-section text-start mb-4">
                                    <div class="heading-title text-white">Install these applications in just 1 - Click!</div>
                                    <div class="heading-description text-white op-8">50+ Plugins Available</div>
                                </div>
                                <p class="op-8">Est amet sit vero sanctus labore no sed ipsum ipsum nonumy.
                                    Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <div class="row justify-content-center">
                                    <div class="col-xl-3 col-md-4">
                                        <div class="card feature-card-15 text-center">
                                            <div class="card-body">
                                                <img src="{{asset('build/assets/images/png/apps/1.png')}}" alt="img" height="80" class="img-fluid app-img">
                                                <img src="{{asset('build/assets/images/png/apps/28.png')}}" alt="img" height="80" class="img-fluid app-img-white">
                                            </div>
                                        </div>
                                        <div class="card feature-card-15 text-center">
                                            <div class="card-body">
                                                <img src="{{asset('build/assets/images/png/apps/2.png')}}" alt="img" height="80" class="img-fluid app-img">
                                                <img src="{{asset('build/assets/images/png/apps/29.png')}}" alt="img" height="80" class="img-fluid app-img-white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4">
                                        <div class="card feature-card-15 text-center">
                                            <div class="card-body">
                                                <img src="{{asset('build/assets/images/png/apps/3.png')}}" alt="img" height="80" class="img-fluid app-img">
                                                <img src="{{asset('build/assets/images/png/apps/30.png')}}" alt="img" height="80" class="img-fluid app-img-white">
                                            </div>
                                        </div>
                                        <div class="card feature-card-15 text-center">
                                            <div class="card-body">
                                                <img src="{{asset('build/assets/images/png/apps/4.png')}}" alt="img" height="80" class="img-fluid app-img">
                                                <img src="{{asset('build/assets/images/png/apps/31.png')}}" alt="img" height="80" class="img-fluid app-img-white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4">
                                        <div class="card feature-card-15 text-center">
                                            <div class="card-body">
                                                <img src="{{asset('build/assets/images/png/apps/5.png')}}" alt="img" height="80" class="img-fluid app-img">
                                                <img src="{{asset('build/assets/images/png/apps/32.png')}}" alt="img" height="80" class="img-fluid app-img-white">
                                            </div>
                                        </div>
                                        <div class="card feature-card-15 text-center">
                                            <div class="card-body">
                                                <img src="{{asset('build/assets/images/png/apps/6.png')}}" alt="img" height="80" class="img-fluid app-img">
                                                <img src="{{asset('build/assets/images/png/apps/33.png')}}" alt="img" height="80" class="img-fluid app-img-white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Specifications</span></div>
                            <div class="heading-title">Technical <span class="tx-primary">Specifications</span></div>
                            <div class="heading-description">Key Features</div>
                        </div>
                        <div class="row feature-client-bg feature-bg-1">
                            <div class="col-md-12">
                                <div class="d-lg-flex spec-tabs">
                                    <div class="nav flex-column nav-pills mb-5 mb-lg-0" id="spec-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="spec-pills-1-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-1" type="button" role="tab" aria-controls="spec-pills-1" aria-selected="true">
                                            <span><i class="bi bi-hdd-stack"></i></span>
                                            Server Specifications
                                        </button>
                                        <button class="nav-link" id="spec-pills-2-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-2" type="button" role="tab" aria-controls="spec-pills-2" aria-selected="false">
                                            <span><i class="bi bi-code-slash"></i></span>
                                            Programming Support
                                        </button>
                                        <button class="nav-link" id="spec-pills-3-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-3" type="button" role="tab" aria-controls="spec-pills-3" aria-selected="false">
                                            <span><i class="bi bi-gear-wide-connected"></i></span>
                                            Plesk Features
                                        </button>
                                        <button class="nav-link" id="spec-pills-5-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-5" type="button" role="tab" aria-controls="spec-pills-5" aria-selected="false">
                                            <span><i class="bi bi-envelope-check"></i></span>
                                            Email & Domain Name Features
                                        </button>
                                    </div>
                                    <div class="tab-content" id="spec-pills-tabContent">
                                        <div class="tab-pane fade show active" id="spec-pills-1" role="tabpanel" aria-labelledby="spec-pills-1-tab">
                                            <div class="d-md-flex">
                                                <div>
                                                    <h4 class="mb-4">Server Specifications</h4>
                                                    <ul class="list-unstyled mb-0 fw-500">
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Dual E5530 2.40GHz Xeon quad core hyperthreaded processors</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>24 GB RAM</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>250 GB RAID 1 (mirrored) OS drive</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>1 TB RAID 1 (mirrored) customer data drive cached</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Battery backed, RAID controller for all drives</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Redundant Power, HVAC &amp; Fire-Detection Systems</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center ms-md-5 my-auto">
                                                    <img src="{{asset('build/assets/images/png/17.png')}}" alt="img" height="220">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spec-pills-2" role="tabpanel" aria-labelledby="spec-pills-2-tab">
                                            <div class="d-md-flex">
                                                <div>
                                                    <h4 class="mb-4">Programming Support</h4>
                                                    <ul class="list-unstyled mb-0 fw-500">
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>PHP 7.3/7.4, Perl, Python, RoR, GD, cURL, CGI, mcrypt3</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Apache 2.4x</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>MySQL 5</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Zend Optimizer, Zend Engine, ionCube Loader</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center ms-md-5 my-auto">
                                                    <img src="{{asset('build/assets/images/png/19.png')}}" alt="img" height="220">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spec-pills-3" role="tabpanel" aria-labelledby="spec-pills-3-tab">
                                            <div class="d-md-flex">
                                                <div>
                                                    <h4 class="mb-4">Plesk Features</h4>
                                                    <ul class="list-unstyled mb-0 fw-500">
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Create Hosting Plans</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Set up and Modify Customer Accounts</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Track traffic Usage by each Customer</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Brand your plesk panel</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Add custom buttons</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Dedicated Plesk Panel for Clients</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Upload and Manage Web Pages</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>View Website Statistics</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Install Over 250 Scripts with a single click</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center ms-md-5 my-auto">
                                                    <img src="{{asset('build/assets/images/png/18.png')}}" alt="img" height="220">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spec-pills-5" role="tabpanel" aria-labelledby="spec-pills-5-tab">
                                            <div class="d-md-flex">
                                                <div>
                                                    <h4 class="mb-4">Email & Domain Name Features</h4>
                                                    <ul class="list-unstyled mb-0 fw-500">
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Outlook, Thunderbird and Windows Mail compatible</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Blackberry, iPhone, Android and PDA support</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Feature packed Webmail</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Advance Spam/Virus Protection</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Mail Forwards, Email Aliases, Auto Responders</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Unlimited Mailing Lists, Catch All Accounts, Mail Spam Filters</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Parked Domains</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Free DNS Management</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Domain Forwarding, Path Forwarding, URL Masking</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center ms-md-5 my-auto">
                                                    <img src="{{asset('build/assets/images/png/19.png')}}" alt="img" height="220">
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
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">FAQ'S</span></div>
                            <div class="heading-title">We Are Here To <span class="tx-primary">Help You</span> </div>
                            <div class="heading-description">Browse Through The Most Frequently Asked Questions</div>
                        </div>
                        <div class="accordion accordion-style-1" id="acc-style-1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-1" aria-expanded="false" aria-controls="acc-1">
                                        What is reseller hosting?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Reseller Hosting allows you to create sub-packages within the allotted Disk Space and Bandwidth of your main Hosting package. You can use your Reseller Plesk panel to create Individual Custom packages (each with plesk) and provision them to your Customers. Additionally, you can use WHMCS for billing (Not supported on the base plan).</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        Which Control Panels do I get with a Reseller Hosting package?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">All Reseller Hosting packages come with Parallels Plesk. Plesk gives you administrative control of your Reseller Hosting package and allows your Customers to manage their individual Hosting packages, throught their Customer Plesk panel.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        How can I create Sub-Packages and manage them?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Your Reseller Plesk Control Panel allows you to create individual Hosting packages and completely manage them.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                        What is WHMCS and do I get WHMCS with your Reseller Hosting?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        WHMCS is a popular Billing platform used by a majority of Web Hosts. Yes, we do provide a free WHMCS license for all plans except the base plan.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        How can my Customers manage their Individual Packages?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Your Customers will be able to manage their own packages using the Customer Plesk panel.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                        What are the advantages of reseller hosting?
                                    </button>
                                </h2>
                                <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">If you're a Web Designer/Developer you can host and manage all your websites/clients with one Reseller Hosting package instead of going through the hassle of managing multiple shared Hosting packages. This also lowers your Web Hosting costs significantly.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                        Can I upgrade between plans?
                                    </button>
                                </h2>
                                <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, you can upgrade your existing plan to a higher plan at any time.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-8" aria-expanded="false" aria-controls="acc-8">
                                        Is there a money back guarantee?
                                    </button>
                                </h2>
                                <div id="acc-8" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, we offer a 100% Risk Free, 30 Day Money Back Guarantee.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-9" aria-expanded="false" aria-controls="acc-9">
                                        Do your Reseller Hosting plans include a One-Click Installer?
                                    </button>
                                </h2>
                                <div id="acc-9" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        Yes, all our Reseller Hosting plans come with applications that can be installed with a single click.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-10" aria-expanded="false" aria-controls="acc-10">
                                        How is technical support handled?
                                    </button>
                                </h2>
                                <div id="acc-10" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">We have a fully qualified Support team at hand to assist you. You can take a look at all our contact details here.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

@endsection