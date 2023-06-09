@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section class="banner-1 banner-section">
                    <img src="{{asset('build/assets/images/patterns/1.png')}}" alt="img" class="patterns-2">
                    <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-6">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <p class="mb-4 content-1 h5 text-white">Create A Beautiful Website <span class="tx-info-dark"> In Minutes</span></p>
                                <ul class="list-unstyled mb-4">
                                    <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Choose from 175 themes & 85,000 images</li>
                                    <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Easy Editing with a Drag & Drop Interface</li>
                                    <li class="list-item"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Go Live Instantly - Publish your website in minutes</li>
                                </ul>
                                <a href="#domain" class="btn btn-lg btn-secondary me-2">Get Started<i class="bi bi-arrow-right ms-1"></i></a>
                            </div>
                            <div class="col-lg-5">
                                <div class="text-lg-end text-center mt-5 mt-lg-0">
                                    <img src="{{asset('build/assets/images/png/11.png')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image2 bg-gray-100" id="domain">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Features</span></div>
                            <div class="heading-title">Why Do You Need <span class="tx-primary">Website Builder</span> </div>
                            <div class="heading-description">Checkout These Features</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card feature-card shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-primary text-white rounded-circle tx-18"><i class="bi bi-code-square"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Easy to Use Visual Editor</h5>
                                                <ul class="list-styled mb-0 ps-4 fw-500">
                                                    <li class="list-item mb-1">Real-time Editor</li>
                                                    <li class="list-item mb-1"> Intuitive Drag & Drop Interface</li>
                                                    <li class="list-item"> No Coding Skills Required</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card feature-card shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-secondary text-white rounded-circle tx-18"><i class="bi bi-activity"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">30+ Dynamic Components</h5>
                                                <ul class="list-styled mb-0 ps-4 fw-500">
                                                    <li class="list-item mb-1"> Dynamic components including Image Galleries, Blogs and Web</li>
                                                    <li class="list-item mb-1"> Ecommerce components like PayPal & Ebay included</li>
                                                    <li class="list-item"> Social widgets for instant Social Integration</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card feature-card shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-success text-white rounded-circle tx-18"><i class="bi bi-palette"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">180 Themes and Counting</h5>
                                                <ul class="list-styled mb-0 ps-4 fw-500">
                                                    <li class="list-item mb-1"> Personal, Blog and Professional Themes available</li>
                                                    <li class="list-item mb-1"> Access to 85,000 stock images</li>
                                                    <li class="list-item"> Completely Customizable</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card feature-card shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-info text-white rounded-circle tx-18"><i class="bi bi-hdd-network"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Completely Hosted Solution</h5>
                                                <ul class="list-styled mb-0 ps-4 fw-500">
                                                    <li class="list-item mb-1"> Powerful Web and Email Hosting Included</li>
                                                    <li class="list-item mb-1"> Completely Safe and Secure With a 99.9% Uptime Guarantee</li>
                                                    <li class="list-item"> Host your Website on your own Domain Name</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Choose</span></div>
                            <div class="heading-title">Pricing <span class="tx-primary">Plans</span></div>
                            <div class="heading-description">Choose A Suitable Plan</div>
                        </div>
                        <div class="text-center mb-4">
                            <div class="tab-style-1 border p-1 rounded-pill d-inline-block">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <button class="nav-link rounded-pill active" data-bs-toggle="pill" data-bs-target="#pills-monthly">Montly</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link rounded-pill" data-bs-toggle="pill" data-bs-target="#pills-yearly">Yearly</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-monthly">
                                <div class="card shadow-none mb-0">
                                    <div class="card-body p-0">
                                        <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-9 sub-pattern-2 filter-invert sub-pattern-3 op-2">
                                        <div class="table-responsive border br-7">
                                            <table class="table table-bordered pricing-table mb-0 table-hover border-hidden">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-lg rounded-circle bg-secondary-transparent tx-secondary tx-24"><i class="bi bi-headset"></i></span>
                                                                </div>
                                                                <div class="flex-grow-1 text-start">
                                                                    <p class="h4 mb-0">Contact Us!</p>
                                                                    <a href="{{url('contact-us')}}" class="tx-secondary op-8">Proceed <i class="bi bi-arrow-right ms-1"></i></a>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <p class="h4 mb-0">Starter</p>
                                                            <p class="h2 mb-0">$9<span class="tx-13 tx-muted op-7 ms-1">/ month</span></p>
                                                        </th>
                                                        <th>
                                                            <p class="h4 mb-0">Professional</p>
                                                            <p class="h2 mb-0">$15<span class="tx-13 tx-muted op-7 ms-1">/ month</span></p>
                                                        </th>
                                                        <th>
                                                            <p class="h4 mb-0">Business</p>
                                                            <p class="h2 mb-0">$29<span class="tx-13 tx-muted op-7 ms-1">/ month</span></p>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pricing-feature">No of Pages</td>
                                                        <td>1</td>
                                                        <td>50</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature">Web Space</td>
                                                        <td>5 GB</td>
                                                        <td>100 GB</td>
                                                        <td>Unlimited</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature">Data Transfer</td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-unmetered" class="plain-link">Unmetered</a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-unmetered" class="plain-link">Unmetered</a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-unmetered" class="plain-link">Unmetered</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature">Email Accounts</td>
                                                        <td>1</td>
                                                        <td>100</td>
                                                        <td>Unlimited</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="mb-0 d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-yearly">
                                <div class="card shadow-none mb-0">
                                    <div class="card-body p-0">
                                        <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-9 sub-pattern-2 filter-invert sub-pattern-3 op-2">
                                        <div class="table-responsive border br-7">
                                            <table class="table table-bordered pricing-table mb-0 table-hover border-hidden">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-lg rounded-circle bg-secondary-transparent tx-secondary tx-24"><i class="bi bi-headset"></i></span>
                                                                </div>
                                                                <div class="flex-grow-1 text-start">
                                                                    <p class="h4 mb-0">Contact Us!</p>
                                                                    <a href="{{url('contact-us')}}" class="tx-secondary op-8">Proceed <i class="bi bi-arrow-right ms-1"></i></a>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <p class="h4 mb-0">Starter</p>
                                                            <p class="h2 mb-0">$19<span class="tx-13 tx-muted op-7 ms-1">/ year</span></p>
                                                        </th>
                                                        <th>
                                                            <p class="h4 mb-0">Professional</p>
                                                            <p class="h2 mb-0">$45<span class="tx-13 tx-muted op-7 ms-1">/ year</span></p>
                                                        </th>
                                                        <th>
                                                            <p class="h4 mb-0">Business</p>
                                                            <p class="h2 mb-0">$99<span class="tx-13 tx-muted op-7 ms-1">/ year</span></p>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pricing-feature">No of Pages</td>
                                                        <td>1</td>
                                                        <td>50</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature">Web Space</td>
                                                        <td>5 GB</td>
                                                        <td>100 GB</td>
                                                        <td>Unlimited</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature">Data Transfer</td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-unmetered" class="plain-link">Unmetered</a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-unmetered" class="plain-link">Unmetered</a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-unmetered" class="plain-link">Unmetered</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature">Email Accounts</td>
                                                        <td>1</td>
                                                        <td>100</td>
                                                        <td>Unlimited</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="mb-0 d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0 d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="card feature-card-1 mb-0">
                            <div class="card-body p-5">
                                <p class="h2 mb-4 text-white">Money Back Guarantee</p>
                                <p class="mb-0">Duo takimata aliquyam takimata rebum magna sed sanctus est sit. Voluptua labore vero consetetur stet est duo amet ea diam. Gubergren ipsum dolores dolor gubergren takimata at sit stet. Lorem amet diam rebum ipsum eirmod amet no et. Sadipscing dolor.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-gray-100 overflow-hidden">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-3 sub-pattern-1 filter-invert op-1 z-index-0">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 mb-5 mb-lg-0">
                                <div class="text-center text-lg-start">
                                    <img src="{{asset('build/assets/images/png/12.png')}}" alt="img" width="400" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="heading-section">
                                    <div class="heading-title text-start">Online Website Editory & content <span class="tx-primary">Management Features</span> </div>
                                </div>
                                <div class="row fw-500 tx-muted mb-4">
                                    <div class="col-md-6">
                                        <div class="card border-top border-3 border-primary">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <span class="avatar text-bg-primary rounded-circle tx-20"><i class="bi bi-code"></i></span>
                                                    </div>
                                                    <h6 class="flex-grow-1 mb-0">Visual Editor</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-top border-3 border-secondary">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <span class="avatar text-bg-secondary rounded-circle tx-20"><i class="bi bi-code"></i></span>
                                                    </div>
                                                    <h6 class="flex-grow-1 mb-0">Drag & Drop Components</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-top border-3 border-warning">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <span class="avatar text-bg-warning rounded-circle tx-20"><i class="bi bi-code"></i></span>
                                                    </div>
                                                    <h6 class="flex-grow-1 mb-0">Built-in Lightbox</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-top border-3 border-success">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <span class="avatar text-bg-success rounded-circle tx-20"><i class="bi bi-code"></i></span>
                                                    </div>
                                                    <h6 class="flex-grow-1 mb-0">Favicon Customization</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="row fw-500 feature-client-bg feature-bg-1">
                                <div class="col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-item mb-2">
                                                <p class="mb-0 d-flex align-items-start">
                                                    <span class="tx-primary me-2"><i class="bi bi-check-circle"></i></span>
                                                    <span class="flex-grow-1 fw-500">Over 175 themes</span>
                                                </p>
                                            </li>
                                            <li class="list-item mb-2">
                                                <p class="mb-0 d-flex align-items-start">
                                                    <span class="tx-primary me-2"><i class="bi bi-check-circle"></i></span>
                                                    <span class="flex-grow-1 fw-500">1, 2 and 3 column layouts</span>
                                                </p>
                                            </li>
                                            <li class="list-item mb-2">
                                                <p class="mb-0 d-flex align-items-start">
                                                    <span class="tx-primary me-2"><i class="bi bi-check-circle"></i></span>
                                                    <span class="flex-grow-1 fw-500">100% Customizable page layouts</span>
                                                </p>
                                            </li>
                                        </ul>
                                </div>
                                <div class="col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-item mb-2">
                                                <p class="mb-0 d-flex align-items-start">
                                                    <span class="tx-primary me-2"><i class="bi bi-check-circle"></i></span>
                                                    <span class="flex-grow-1 fw-500">Standard HTML and CSS Templates</span>
                                                </p>
                                            </li>
                                            <li class="list-item mb-2">
                                                <p class="mb-0 d-flex align-items-start">
                                                    <span class="tx-primary me-2"><i class="bi bi-check-circle"></i></span>
                                                    <span class="flex-grow-1 fw-500">Easy Image Uploading and Editing</span>
                                                </p>
                                            </li>
                                            <li class="list-item">
                                                <p class="mb-0 d-flex align-items-start">
                                                    <span class="tx-primary me-2"><i class="bi bi-check-circle"></i></span>
                                                    <span class="flex-grow-1 fw-500">Stock photo library (85000 images)</span>
                                                </p>
                                            </li>
                                        </ul>
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
                                    Do I have to purchase a Hosting package to buy a Website Builder package?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">No, you don't have to worry about that. Our Website Builder packages come with a free Web and Email Hosting package.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                    Is there a demo version of your Website Builder?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, we do have a demo that you can try out before buying a Website Builder package.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                    Is there a money back guarantee on your Website Builder packages?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, we offer a Risk Free, 30 Day Money Back Guarantee with all our Website Builder packages.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                    What components are included with your Website Builder?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Our Website builder includes popular components like Blog, Image Gallery, PayPal, eBay and Google Maps.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                    Can I design/upload my own Theme?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">You can choose from over 180 stunning themes designed by expert designers. Our themes can be used for personal, professional as well as ecommerce Websites. You can also create <b>your own theme</b>.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                    Can I upgrade to a higher plan?
                                    </button>
                                </h2>
                                <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, you can upgrade to a higher plan at any time.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                    Will there be any advertisements on my site?
                                    </button>
                                </h2>
                                <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Absolutely Not! All our Website Builder packages are completely Ad-Free.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-8" aria-expanded="false" aria-controls="acc-8">
                                    Does the Website Builder include any SEO feature?
                                    </button>
                                </h2>
                                <div id="acc-8" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Our Website Builder packages come integrated with a Search Engine Optimization feature to help you rank higher on search engines.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-9" aria-expanded="false" aria-controls="acc-9">
                                    I own a website with another host - can I move my site on to website builder?
                                    </button>
                                </h2>
                                <div id="acc-9" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">No, I'm afraid you will not be able to migrate an existing Website directly on to a Website Builder package. However, you can move website files over by downloading them from your other host then uploading them to your website builder account. The website content can then be filled to achieve a similar result.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- MODAL -->
            <div class="modal fade" id="modal-unmetered" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Unmetered Web Hosting</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="bi bi-x fs-3"></i>
                            </button>
                        </div>
                        <div class="modal-body tx-14">
                            <h5 class="tx-16">How much disk space and bandwidth will my plan include?</h5>
                            <p class="tx-muted">Disk space and bandwidth is "Unmetered" which means you are not charged according to the amount of disk space or bandwidth you use.</p>
                            <p class="tx-muted">However, that being said, we do require all customers to be fully compliant with our Terms of Service and its policies, which includes our Acceptable Use Policy (“TOS”), and to only utilize disk space and bandwidth in the normal operation of a personal or small business website.</p>
                            <p class="tx-muted mb-4">For example, such customers who are using 25% or more of system resources for longer than 90 seconds would be in violation of our TOS, which includes our Acceptable Use Policy and other policies. <a href="{{url('terms-of-service')}}" class="plain-link">Please see our TOS</a> or contact us with any questions.</p>
                            <h5 class="tx-16">What happens if I exceed usage?</h5>
                            <p class="tx-muted">If we have concerns about your account's bandwidth or disk space utilization, you will receive an email asking you to reduce usage.</p>
                            <p class="tx-muted">Again, it is very rare for a customer who is managing a personal or small business website to exceed our TOS, which includes our Acceptable Use Policy and other policies.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->

@endsection

@section('scripts')

@endsection