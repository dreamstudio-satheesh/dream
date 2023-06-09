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
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="mb-4">
                                        <p class="mb-3 content-1 h5 text-white">Powerful Linux <span class="tx-info-dark">Reseller Hosting</span></p>
                                        <p class="mb-4 content-2 tx-18">
                                            Share processes and data securely on a need to know basis without the need for reconciliation it combines a permissione.
                                        </p>
                                        <ul class="list-unstyled mb-4">
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>State-of-the-Art Hosting Infrastructure</li>
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>99.9% Uptime Guarantee</li>
                                            <li class="list-item"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>30-Day Money-Back Guarantee</li>
                                        </ul>
                                    </div>
                                    <a href="#plans" class="btn btn-lg btn-secondary"><i class="fe fe-eye me-1"></i> View Plans</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="btn btn-lg btn-white"><i class="fe fe-shopping-cart me-1"></i> Buy Now</a>
                                </div>
                                <div class="col-lg-5">
                                    <div class="banner-bg mt-5 mt-lg-0">
                                        <img src="{{asset('build/assets/images/png/47.png')}}" class="img-fluid" alt="img">
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
                            <div class="heading-title">Powerful Linux Reseller <span class="tx-primary">Hosting Features</span></div>
                            <div class="heading-description">Checkout These Features</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 linux-feature-list">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-primary-transparent primary-shadow tx-primary rounded-circle tx-18"><i class="bi bi-gear-wide-connected"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Powerful Hosting Control Panel - WHM</h5>
                                                <ul class="list-styled tx-16 mb-0 ps-3 fw-500">
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
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-secondary-transparent secondary-shadow tx-secondary rounded-circle tx-18"><i class="bi bi-cpu"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">All in one Billing & Client Management Solution - WHMCS</h5>
                                                <ul class="list-styled tx-16 mb-0 ps-3 fw-500">
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
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-success-transparent success-shadow tx-success rounded-circle tx-18"><i class="bi bi-diagram-3"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Easy to Use Customer Control Panel - cPanel</h5>
                                                <ul class="list-styled tx-16 mb-0 ps-3 fw-500">
                                                    <li class="list-item mb-2">World's Leading Customer Control Panel</li>
                                                    <li class="list-item mb-2">Manage Web Pages, View Website Statistics, Create Email Accounts etc.</li>
                                                    <li class="list-item">Comes with Softaculous Script Installer - Install Blogs, Shopping Carts etc.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 linux-feature-list">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-info-transparent info-shadow tx-info rounded-circle tx-18"><i class="bi bi-headset"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Reliable Support</h5>
                                                <ul class="list-styled tx-16 mb-0 ps-3 fw-500">
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
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-pink-transparent pink-shadow tx-pink rounded-circle tx-18"><i class="bi bi-gift"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Robust Infrastructure</h5>
                                                <ul class="list-styled tx-16 mb-0 ps-3 fw-500">
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
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar me-3 bg-danger-transparent danger-shadow tx-danger rounded-circle tx-18"><i class="bi bi-envelope-check"></i></span>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-3">Advanced Email Hosting Included</h5>
                                                <ul class="list-styled tx-16 mb-0 ps-3 fw-500">
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
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Your Plan</span></div>
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
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card bg-primary text-white">
                                            <div class="card-body">
                                                <svg class="pricing-icon bg-white-1" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#bccef4" d="M12,14.19531c-0.17551-0.00004-0.34793-0.04618-0.5-0.13379l-9-5.19726C2.02161,8.58794,1.85779,7.97612,2.13411,7.49773C2.22187,7.34579,2.34806,7.2196,2.5,7.13184l9-5.19336c0.30964-0.17774,0.69036-0.17774,1,0l9,5.19336c0.4784,0.27632,0.64221,0.88814,0.36589,1.36653C21.77813,8.65031,21.65194,8.7765,21.5,8.86426l-9,5.19726C12.34793,14.14913,12.17551,14.19527,12,14.19531z"/>
                                                    <path fill="#9ab5ee" d="M21.5,11.13184l-1.96411-1.13337L12.5,14.06152c-0.30947,0.17839-0.69053,0.17839-1,0L4.46411,9.99847L2.5,11.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,12.65031,2.34806,12.7765,2.5,12.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,11.34579,21.65194,11.2196,21.5,11.13184z"/>
                                                    <path fill="#5885e4" d="M21.5,15.13184l-1.96411-1.13337L12.5,18.06152c-0.30947,0.17838-0.69053,0.17838-1,0l-7.03589-4.06305L2.5,15.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,16.65031,2.34806,16.7765,2.5,16.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,15.34579,21.65194,15.2196,21.5,15.13184z"/>
                                                </svg>
                                                <h4 class="mb-3 text-white">Essential</h4>
                                                <p class="mb-4 op-7">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28 text-white">$79.9<span class="tx-14 op-7">&nbsp; / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">7 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">42 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">600 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-7 all-ease-03 text-white"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-white">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#9ab5ee" d="M21.951 9.67a1 1 0 0 0-.807-.68l-5.699-.828-2.548-5.164A.978.978 0 0 0 12 2.486v16.28l5.097 2.679a1 1 0 0 0 1.451-1.054l-.973-5.676 4.123-4.02a1 1 0 0 0 .253-1.025z"/>
                                                    <path fill="#5885e4" d="M11.103 2.998 8.555 8.162l-5.699.828a1 1 0 0 0-.554 1.706l4.123 4.019-.973 5.676a1 1 0 0 0 1.45 1.054L12 18.765V2.503c-.356.001-.703.167-.897.495z"/>
                                                </svg>
                                                <h4 class="mb-3">Advance</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$96.9<span class="tx-14 tx-muted op-7">&nbsp; / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">10 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">55 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">1000 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#9ab5ee" d="M19 6H5a3 3 0 0 0-3 3v2.72L8.837 14h6.326L22 11.72V9a3 3 0 0 0-3-3z"/>
                                                    <path fill="#5885e4" d="M10 6V5h4v1h2V5a2.002 2.002 0 0 0-2-2h-4a2.002 2.002 0 0 0-2 2v1h2zm-1.163 8L2 11.72V18a3.003 3.003 0 0 0 3 3h14a3.003 3.003 0 0 0 3-3v-6.28L15.163 14H8.837z"/>
                                                </svg>
                                                <h4 class="mb-3">Pro</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$125.5<span class="tx-14 tx-muted op-7">&nbsp; / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">13 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">110 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">1500 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                                    <path fill="#5885e4" d="m17.737 14.622-2.426 2.23a11.603 11.603 0 0 1-4.299 2.37l.644 3.004a1 1 0 0 0 1.469.661l3.905-2.202a3.035 3.035 0 0 0 1.375-3.304zM7.266 8.776l2.088-2.48-2.604-.628a2.777 2.777 0 0 0-3.387 1.357l-2.2 3.9a1 1 0 0 0 .661 1.469l3.073.659a12.887 12.887 0 0 1 2.369-4.277zm9.468.04a1.5 1.5 0 1 0-1.5-1.5 1.5 1.5 0 0 0 1.5 1.5z"/>
                                                    <path fill="#9ab5ee" d="M22.601 2.062a1 1 0 0 0-.713-.713A11.249 11.249 0 0 0 10.47 4.972L7.266 8.776a12.936 12.936 0 0 0-2.924 6.71 1 1 0 0 0 .284.837l3.1 3.1a1 1 0 0 0 .708.293c.028 0 .057-.001.086-.004a11.847 11.847 0 0 0 6.79-2.86l3.664-3.368A11.204 11.204 0 0 0 22.6 2.062Zm-5.867 6.754a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5Z"/>
                                                </svg>
                                                <h4 class="mb-3">Ultimate</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$150.5<span class="tx-14 tx-muted op-7">&nbsp; / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">15 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">250 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">1800 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-yearly">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card bg-primary text-white">
                                            <div class="card-body">
                                                <svg class="pricing-icon bg-white-1" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#bccef4" d="M12,14.19531c-0.17551-0.00004-0.34793-0.04618-0.5-0.13379l-9-5.19726C2.02161,8.58794,1.85779,7.97612,2.13411,7.49773C2.22187,7.34579,2.34806,7.2196,2.5,7.13184l9-5.19336c0.30964-0.17774,0.69036-0.17774,1,0l9,5.19336c0.4784,0.27632,0.64221,0.88814,0.36589,1.36653C21.77813,8.65031,21.65194,8.7765,21.5,8.86426l-9,5.19726C12.34793,14.14913,12.17551,14.19527,12,14.19531z"/>
                                                    <path fill="#9ab5ee" d="M21.5,11.13184l-1.96411-1.13337L12.5,14.06152c-0.30947,0.17839-0.69053,0.17839-1,0L4.46411,9.99847L2.5,11.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,12.65031,2.34806,12.7765,2.5,12.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,11.34579,21.65194,11.2196,21.5,11.13184z"/>
                                                    <path fill="#5885e4" d="M21.5,15.13184l-1.96411-1.13337L12.5,18.06152c-0.30947,0.17838-0.69053,0.17838-1,0l-7.03589-4.06305L2.5,15.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,16.65031,2.34806,16.7765,2.5,16.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,15.34579,21.65194,15.2196,21.5,15.13184z"/>
                                                </svg>
                                                <h4 class="mb-3 text-white">Essential</h4>
                                                <p class="mb-4 op-7">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28 text-white">$179.9<span class="tx-14 op-7">&nbsp; / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">7 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">42 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">600 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-7 all-ease-03 text-white"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-white">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#9ab5ee" d="M21.951 9.67a1 1 0 0 0-.807-.68l-5.699-.828-2.548-5.164A.978.978 0 0 0 12 2.486v16.28l5.097 2.679a1 1 0 0 0 1.451-1.054l-.973-5.676 4.123-4.02a1 1 0 0 0 .253-1.025z"/>
                                                    <path fill="#5885e4" d="M11.103 2.998 8.555 8.162l-5.699.828a1 1 0 0 0-.554 1.706l4.123 4.019-.973 5.676a1 1 0 0 0 1.45 1.054L12 18.765V2.503c-.356.001-.703.167-.897.495z"/>
                                                </svg>
                                                <h4 class="mb-3">Advance</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$196.9<span class="tx-14 tx-muted op-7">&nbsp; / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">10 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">55 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">1000 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#9ab5ee" d="M19 6H5a3 3 0 0 0-3 3v2.72L8.837 14h6.326L22 11.72V9a3 3 0 0 0-3-3z"/>
                                                    <path fill="#5885e4" d="M10 6V5h4v1h2V5a2.002 2.002 0 0 0-2-2h-4a2.002 2.002 0 0 0-2 2v1h2zm-1.163 8L2 11.72V18a3.003 3.003 0 0 0 3 3h14a3.003 3.003 0 0 0 3-3v-6.28L15.163 14H8.837z"/>
                                                </svg>
                                                <h4 class="mb-3">Pro</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$1125.5<span class="tx-14 tx-muted op-7">&nbsp; / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">13 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">110 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">1500 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                                    <path fill="#5885e4" d="m17.737 14.622-2.426 2.23a11.603 11.603 0 0 1-4.299 2.37l.644 3.004a1 1 0 0 0 1.469.661l3.905-2.202a3.035 3.035 0 0 0 1.375-3.304zM7.266 8.776l2.088-2.48-2.604-.628a2.777 2.777 0 0 0-3.387 1.357l-2.2 3.9a1 1 0 0 0 .661 1.469l3.073.659a12.887 12.887 0 0 1 2.369-4.277zm9.468.04a1.5 1.5 0 1 0-1.5-1.5 1.5 1.5 0 0 0 1.5 1.5z"/>
                                                    <path fill="#9ab5ee" d="M22.601 2.062a1 1 0 0 0-.713-.713A11.249 11.249 0 0 0 10.47 4.972L7.266 8.776a12.936 12.936 0 0 0-2.924 6.71 1 1 0 0 0 .284.837l3.1 3.1a1 1 0 0 0 .708.293c.028 0 .057-.001.086-.004a11.847 11.847 0 0 0 6.79-2.86l3.664-3.368A11.204 11.204 0 0 0 22.6 2.062Zm-5.867 6.754a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5Z"/>
                                                </svg>
                                                <h4 class="mb-3">Ultimate</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$1150.5<span class="tx-14 tx-muted op-7">&nbsp; / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">15 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">250 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">1800 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
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
                                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
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

                <section class="section bg-pattern-1 bg-image3">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Specifications</span></div>
                            <div class="heading-title">Technical <span class="tx-primary">Specifications</span></div>
                            <div class="heading-description">Key Features</div>
                        </div>
                        <div class="row">
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
                                            WHM (Admin Control Panel) Features
                                        </button>
                                        <button class="nav-link" id="spec-pills-4-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-4" type="button" role="tab" aria-controls="spec-pills-4" aria-selected="false">
                                            <span><i class="bi bi-gear"></i></span>
                                            cPanel (Client Control Panel) Features
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
                                                        <li class="list-item mb-2">
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
                                                    <img src="{{asset('build/assets/images/png/17.png')}}" alt="img" class="img-fluid" width="280">
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
                                                        <li class="list-item">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Zend Optimizer, Zend Engine, ionCube Loader</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center ms-md-5 my-auto">
                                                    <img src="{{asset('build/assets/images/png/19.png')}}" alt="img" class="img-fluid" width="280">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spec-pills-3" role="tabpanel" aria-labelledby="spec-pills-3-tab">
                                            <div class="d-md-flex">
                                                <div>
                                                    <h4 class="mb-4">WHM (Admin Control Panel) Features</h4>
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
                                                                <span>Receive Server Downtime Alerts</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Install 250+ applications and programming language modules</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Free DNS Management</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center ms-md-5 my-auto">
                                                    <img src="{{asset('build/assets/images/png/18.png')}}" alt="img" class="img-fluid" width="280">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spec-pills-4" role="tabpanel" aria-labelledby="spec-pills-4-tab">
                                            <div class="d-md-flex">
                                                <div>
                                                    <h4 class="mb-4">cPanel (Client Control Panel) Features</h4>
                                                    <ul class="list-unstyled mb-0 fw-500">
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Upload and Manage Web Pages</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>View Website Statistics with AWstats</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Brandable with your Company's Logo</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Install Over 250 Scripts with the Softaculous Script Library</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item mb-2">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Parked Domains</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-item">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Domain Forwarding, Path Forwarding, URL Masking</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center ms-md-5 my-auto">
                                                    <img src="{{asset('build/assets/images/png/17.png')}}" alt="img" class="img-fluid" width="280">
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
                                                        <li class="list-item">
                                                            <div class="d-flex align-items-start">
                                                                <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                                <span>Unlimited Mailing Lists, Catch All Accounts, Mail Spam Filters</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center ms-md-5 my-auto">
                                                    <img src="{{asset('build/assets/images/png/19.png')}}" alt="img" class="img-fluid" width="280">
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
                                        Which hosting control panels do you offer?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">You can buy Plesk or cPanel license during the server purchase, or at a later time when the need arises.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        Which billing panels do you offer??
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">We offer WHMCS as a billing panel for your dedicated server. You can purchase the license from us at a minimal cost and install the application on your dedicated server.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        What are the functions of the Server Administration Panel??
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Every server comes with its Server Administration Panel by default. This panel allows you to carry out crucial server administration tasks and monitor resource consumption like GUI-based CPU, Memory, Storage & Inodes utilisation, IPs and Storage (for HDD servers only) details and functions to Rebuild, Restart, Web-based VNC and reset access credentials.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                        Can I configure my own RAID for drives?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        <P>The Dedicated Servers come pre-configured with RAID 1. At present, we don’t allow customisation of RAID level.</P>
                                        <P>Would love to hear about such new features requests to help us serve you better.</P>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        What is the port speed of the server?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">The server uplink port speed is up to 1 Gbps.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                        How long does it take for the server to be ready?
                                    </button>
                                </h2>
                                <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">After the payment, your server will be provisioned in about 30 minutes and you can access it via SSH. The disk resize operation, however, may still run in the background for a while after provisioning.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                        What is your backup policy?
                                    </button>
                                </h2>
                                <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">You are responsible for your backups and web content. It is recommended that you keep copies of your content safe and make your own backups. You can take a backup from your cPanel or use a remote backup solution.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-8" aria-expanded="false" aria-controls="acc-8">
                                        What is the level of support that you provide with the server?
                                    </button>
                                </h2>
                                <div id="acc-8" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">To ensure high uptime and accessibility at all times, we are available 24x7 for any hardware, network, booting, O.S. or login issues. Our System Administration Support will also assist you with basic cPanel & Firewall setup and their issues.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-9" aria-expanded="false" aria-controls="acc-9">
                                        Is Additional Storage available for all server configurations?
                                    </button>
                                </h2>
                                <div id="acc-9" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        <P>At present, the additional storage feature is only available with our HDD servers in the US data centre.</P>
                                        <P>Would love to hear about such new features requests to help us serve you better.</P>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-10" aria-expanded="false" aria-controls="acc-10">
                                        Can I use a Dedicated Server for email marketing?
                                    </button>
                                </h2>
                                <div id="acc-10" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Dedicated Servers can be used for Websites, Databases, Custom Applications, Ecommerce, DNS, File Storage and Emails. Emails, however, must be restricted to personal, organisational or professional purposes. The use of Dedicated Servers to send out mass emails/marketing is NOT recommended and can attract penalties.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-11" aria-expanded="false" aria-controls="acc-11">
                                        Can I use virtualisation software on the server?
                                    </button>
                                </h2>
                                <div id="acc-11" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Our Dedicated Servers are virtualised (1:1). Thus, nested virtualisation will not work due to network restrictions on the host system.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-12" aria-expanded="false" aria-controls="acc-12">
                                        Can I use virtualisation software on the server?
                                    </button>
                                </h2>
                                <div id="acc-12" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">We don’t have any backup solution at the moment. Yet, we strongly recommend that you maintain a remote backup to avoid any hassles during any ill-fated incident.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

@endsection