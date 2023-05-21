@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section>
                    <div class="banner-3 banner-section">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="mb-4">
                                        <p class="mb-3 content-1 h5 text-white">Powerful Best Cloud Hosting with <span class="tx-info-dark">High Security</span></p>
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Power Packed With Features</li>
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Versatile On Applications</li>
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Money Back Guarantee</li>
                                        </ul>
                                        <p class="tx-18">Start your business at just<span class="h2 text-white"> $13.8</span><span class="op-5 tx-14"> / month</span></p>
                                    </div>
                                    <a href="#plans" class="btn btn-lg btn-secondary d-inline-flex align-items-center"><i class="fe fe-eye me-1"></i> View Plans</a>
                                </div>
                                <div class="col-lg-5">
                                    <div class="text-lg-end text-center mt-5 mt-lg-0">
                                        <img src="{{asset('build/assets/images/png/59.png')}}" class="img-fluid" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image3">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-2 filter-invert op-1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Cloud Hosting</span></div>
                            <div class="heading-title">What Does mean by <span class="tx-primary">Cloud Hosting?</span></div>
                            <div class="heading-description">Check This Out and follow the steps</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="card shadow-none text-center feature-card-12">
                                    <div class="card-body">
                                        <div class="mb-3 bg-gray-transparent p-2 br-50 d-inline-block">
                                            <img src="{{asset('build/assets/images/svg/12.svg')}}" width="50" height="50" alt="img">
                                        </div>
                                        <h5 class="">Blazing-Fast Load Time</h5>
                                        <p class="tx-muted">With full SSD storage, highly optimized servers, and state of the art NGINX caching, host websites at best-in-class speeds.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card shadow-none text-center feature-card-12">
                                    <div class="card-body">
                                        <div class="mb-3 bg-gray-transparent p-2 br-50 d-inline-block">
                                            <img src="{{asset('build/assets/images/svg/13.svg')}}" width="50" height="50" alt="img">
                                        </div>
                                        <h5 class="">Instant Scaling</h5>
                                        <p class="tx-muted mb-0">No need to move your hosting as your traffic grows. Ramp up your resources at the click of a button - instantly add RAM and CPU without a reboot.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="card shadow-none text-center feature-card-12">
                                    <div class="card-body">
                                        <div class="mb-3 bg-gray-transparent p-2 br-50 d-inline-block">
                                            <img src="{{asset('build/assets/images/svg/14.svg')}}" width="50" height="50" alt="img">
                                        </div>
                                        <h5 class="">Fully managed servers</h5>
                                        <p class="tx-muted">Server management, patches and bug fixes are handled by our experts to ensure you can focus on building and running your website.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 text-center mb-4 d-none d-lg-block">
                                <img src="{{asset('build/assets/images/png/60.png')}}" class="reseller-img img-fluid" alt="img" width="350">
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card shadow-none text-center feature-card-12">
                                    <div class="card-body">
                                        <div class="mb-3 bg-gray-transparent p-2 br-50 d-inline-block">
                                            <img src="{{asset('build/assets/images/svg/15.svg')}}" width="50" height="50" alt="img">
                                        </div>
                                        <h5 class="">Quick Setup</h5>
                                        <p class="tx-muted mb-0">You can use your Cloud Hosting package from the moment you have completed your purchase - no delays, no elaborate setups!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="card shadow-none text-center feature-card-12">
                                    <div class="card-body">
                                        <div class="mb-3 bg-gray-transparent p-2 br-50 d-inline-block">
                                            <img src="{{asset('build/assets/images/svg/16.svg')}}" width="50" height="50" alt="img">
                                        </div>
                                        <h5 class="">cPanel for Management</h5>
                                        <p class="tx-muted">Just like Shared Hosting - manage your website and associated services like Email and sub-domains with the simplicity and ease of cPanel.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card shadow-none text-center feature-card-12">
                                    <div class="card-body">
                                        <div class="mb-3 bg-gray-transparent p-2 br-50 d-inline-block">
                                            <img src="{{asset('build/assets/images/svg/17.svg')}}" width="50" height="50" alt="img">
                                        </div>
                                        <h5 class="">1-click Application installer</h5>
                                        <p class="tx-muted mb-0">Choose between 100+ applications and CMSes to quickly start setting up your website.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-2 bg-image2">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-title text-white">Technical Specifications</div>
                            <div class="heading-description text-white op-8">Check it out the below specifications</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card shadow-none feature-card-11 text-white">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="icon">
                                            <span class=""><i class="fe fe-clock"></i></span>
                                        </div>
                                        <div>
                                            <h5 class="mb-2 text-white">Powerful SSD Storage</h5>
                                            <p class="mb-0 op-8">Build your business online with superior and durable SSD hosting servers, which enable faster load times for your website.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shadow-none feature-card-11">
                                    <div class="card-body d-flex align-items-center text-white">
                                        <div class="icon">
                                            <span class=""><i class="fe fe-star"></i></span>
                                        </div>
                                        <div>
                                            <h5 class="mb-2 text-white">cPANEL for Management</h5>
                                            <p class="mb-0 op-8">Industry-leading cPanel pre-installed on top of a Shared Cloud web hosting architecture to ensure the product is easy to use.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shadow-none feature-card-11">
                                    <div class="card-body d-flex align-items-center text-white">
                                        <div class="icon">
                                            <span class=""><i class="fe fe-check-circle"></i></span>
                                        </div>
                                        <div>
                                            <h5 class="mb-2 text-white">Pre-Integrated Caching</h5>
                                            <p class="mb-0 op-8">Your page will load from the cloud hosting Server at lightning-fast speed due to optimal caching configuration!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shadow-none feature-card-11">
                                    <div class="card-body d-flex align-items-center text-white">
                                        <div class="icon">
                                            <span class=""><i class="fe fe-shield"></i></span>
                                        </div>
                                        <div>
                                            <h5 class="mb-2 text-white">Fully Managed</h5>
                                            <p class="mb-0 op-8">All server configuration, patching is managed by us. You just need to manage your website and content from cPanel.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section pb-0">
                    <img src="{{asset('build/assets/images/patterns/11.png')}}" alt="img" class="patterns-3 z-index-0">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4 z-index-0">
                    <img src="{{asset('build/assets/images/patterns/24.png')}}" alt="img" class="patterns-8 sub-pattern-1 op-1 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Features</span></div>
                            <div class="heading-title">Cloud Web Hosting <span class="tx-primary">Features</span></div>
                            <div class="heading-description">Check These Features</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card feature-card-4 feature-card-4-primary hover mt-5">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="icon p-2 br-5 transform-rotate-45 d-inline-block mb-4">
                                                <span class="avatar feature-avatar all-ease-03 rounded-circle transform-rotate--45 tx-20">
                                                    <i class="bi bi-star-half"></i>
                                                </span>
                                            </div>
                                            <h5 class="mb-3">Reliable Cloud Platform</h5>
                                            <p class="mb-0">We use multiple cloud providers like Amazon AWS, Microsoft Azure to host your websites. Less worries, more choices and built for business websites.Your business websites.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card feature-card-4 feature-card-4-secondary hover mt-5">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="icon p-2 br-5 transform-rotate-45 d-inline-block mb-4">
                                                <span class="avatar feature-avatar all-ease-03 rounded-circle transform-rotate--45 tx-20">
                                                    <i class="bi bi-recycle"></i>
                                                </span>
                                            </div>
                                            <h5 class="mb-3">On Demand Cloud Backups</h5>
                                            <p class="mb-0">Website backup's are essential for business websites. We backup all your website, database and emails on regular basis to prevent data loss. Everything runs automatically without worries.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card feature-card-4 feature-card-4-success hover mt-5">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="icon p-2 br-5 transform-rotate-45 d-inline-block mb-4">
                                                <span class="avatar feature-avatar all-ease-03 rounded-circle transform-rotate--45 tx-20">
                                                    <i class="bi bi-shield-check"></i>
                                                </span>
                                            </div>
                                            <h5 class="mb-3">Cloud Hosting Security</h5>
                                            <p class="mb-0">Keep your data protected from malware,SQL injections and other attacks. FastWebHost cloud hosting platform uses advanced network firewalls,intrusion detection systems (IDS).</p>
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

                <section class="section bg-pattern-1" id="plans">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 filter-invert op-1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Your Plan</span></div>
                            <div class="heading-title">Select Your <span class="tx-primary">Plan</span></div>
                            <div class="heading-description">Best Suited For Visitors From World Over</div>
                        </div>
                        <div class="text-center mb-4">
                            <div class="tab-style-1 border p-1 rounded-pill d-inline-block">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item me-2" role="presentation">
                                        <button class="nav-link rounded-pill me-2 active" data-bs-toggle="pill" data-bs-target="#pills-monthly" aria-selected="true" role="tab">Montly</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link rounded-pill" data-bs-toggle="pill" data-bs-target="#pills-yearly" aria-selected="false" tabindex="-1" role="tab">Yearly</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card border">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#bccef4" d="M12,14.19531c-0.17551-0.00004-0.34793-0.04618-0.5-0.13379l-9-5.19726C2.02161,8.58794,1.85779,7.97612,2.13411,7.49773C2.22187,7.34579,2.34806,7.2196,2.5,7.13184l9-5.19336c0.30964-0.17774,0.69036-0.17774,1,0l9,5.19336c0.4784,0.27632,0.64221,0.88814,0.36589,1.36653C21.77813,8.65031,21.65194,8.7765,21.5,8.86426l-9,5.19726C12.34793,14.14913,12.17551,14.19527,12,14.19531z"/>
                                                    <path fill="#9ab5ee" d="M21.5,11.13184l-1.96411-1.13337L12.5,14.06152c-0.30947,0.17839-0.69053,0.17839-1,0L4.46411,9.99847L2.5,11.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,12.65031,2.34806,12.7765,2.5,12.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,11.34579,21.65194,11.2196,21.5,11.13184z"/>
                                                    <path fill="#5885e4" d="M21.5,15.13184l-1.96411-1.13337L12.5,18.06152c-0.30947,0.17838-0.69053,0.17838-1,0l-7.03589-4.06305L2.5,15.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,16.65031,2.34806,16.7765,2.5,16.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,15.34579,21.65194,15.2196,21.5,15.13184z"/>
                                                </svg>
                                                <h4 class="mb-3">Essential</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$79.9<span class="tx-14 tx-muted op-7">&nbsp; / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">7 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">42 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">600 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" class="ms-1 op-3 all-ease-03 tx-primary" aria-label="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted."><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border">
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
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">7 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">55 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">1000 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" class="ms-1 op-3 all-ease-03 tx-primary" aria-label="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted."><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border">
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
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">7 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">110 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">1500 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" class="ms-1 op-3 all-ease-03 tx-primary" aria-label="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted."><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border border-primary">
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
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">7 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">250 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">1800 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" class="ms-1 op-3 all-ease-03 tx-primary" aria-label="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted."><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-primary">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-yearly" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card border">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#bccef4" d="M12,14.19531c-0.17551-0.00004-0.34793-0.04618-0.5-0.13379l-9-5.19726C2.02161,8.58794,1.85779,7.97612,2.13411,7.49773C2.22187,7.34579,2.34806,7.2196,2.5,7.13184l9-5.19336c0.30964-0.17774,0.69036-0.17774,1,0l9,5.19336c0.4784,0.27632,0.64221,0.88814,0.36589,1.36653C21.77813,8.65031,21.65194,8.7765,21.5,8.86426l-9,5.19726C12.34793,14.14913,12.17551,14.19527,12,14.19531z"/>
                                                    <path fill="#9ab5ee" d="M21.5,11.13184l-1.96411-1.13337L12.5,14.06152c-0.30947,0.17839-0.69053,0.17839-1,0L4.46411,9.99847L2.5,11.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,12.65031,2.34806,12.7765,2.5,12.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,11.34579,21.65194,11.2196,21.5,11.13184z"/>
                                                    <path fill="#5885e4" d="M21.5,15.13184l-1.96411-1.13337L12.5,18.06152c-0.30947,0.17838-0.69053,0.17838-1,0l-7.03589-4.06305L2.5,15.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,16.65031,2.34806,16.7765,2.5,16.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,15.34579,21.65194,15.2196,21.5,15.13184z"/>
                                                </svg>
                                                <h4 class="mb-3">Essential</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$179.9<span class="tx-14 tx-muted op-7">&nbsp; / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">7 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">42 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">600 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" class="ms-1 op-3 all-ease-03 tx-primary" aria-label="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted."><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border">
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
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">7 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">55 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">1000 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" class="ms-1 op-3 all-ease-03 tx-primary" aria-label="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted."><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border">
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
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">7 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">110 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">1500 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" class="ms-1 op-3 all-ease-03 tx-primary" aria-label="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted."><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border border-primary">
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
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">7 cPanel Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">250 GB SSD Disk Space</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">1800 GB Data Transfer</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Unlimited Websites</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free WHMCS</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" class="ms-1 op-3 all-ease-03 tx-primary" aria-label="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted."><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-primary">Buy Now</a>
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
                                        What is Cloud Hosting?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Cloud Hosting is a faster and more advanced form of Shared Hosting. It gives you access to the simple and familiar cPanel, and is powered by robust Cloud Technologies. Cloud Hosting gives you the power to scale your RAM and CPU resources, and is run on a full SSD server.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        What is the difference between Cloud Hosting and Shared Hosting?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">The basic difference between Cloud Hosting and Shared Hosting is the underlying technology that powers both products. With Cloud hosting, you get everything that Shared Hosting offers along with the ability to scale your CPU and RAM, and an extra boost for your website with an all SSD server stack.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        What is SSD, and how is it different from the existing server?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        SSD (Solid State Drives) are a form of storage technology. It is a much faster storage than the existing HDD (Hard Disk Drive) storage. Faster storage means your data gets written to and read from your storage faster. This means that your websites will load much faster if they are running on SSD storage.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                        What is Caching?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                    <p>Website caching is a service that helps load your web pages faster, without having to overload the server during situations of high traffic. We use NGINX Plus caching to ensure that your visitors don't get any lag while loading your website.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        What is the limit for additional CPU and RAM?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Upto 8 GB RAM and 8 cores can be added with any Cloud Hosting Plan.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                        Is a Dedicated IP available?
                                    </button>
                                </h2>
                                <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">For Cloud Hosting (US) packages, you can purchase a Dedicated IP for an additional cost by raising a support ticket. Unfortunately, for Cloud Hosting (IN) packages, we do not provide a Dedicated IP</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                        How do I install an SSL certificate on my Website?
                                    </button>
                                </h2>
                                <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">To install SSL on your cloud server, you need to get in touch with our support team and we will get it installed for you.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-8" aria-expanded="false" aria-controls="acc-8">
                                        Do you provide any one click install scripts along with Cloud Hosting?
                                    </button>
                                </h2>
                                <div id="acc-8" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes - we provide 'Quick Install' which is accessible from your cPanel. Quick Install allows you to plug and play various scripts like WordPress, Drupal, Joomla, shopping carts like Zencart, Magento and various other billing, social networking, support and chat modules.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-9" aria-expanded="false" aria-controls="acc-9">
                                        Is Upgrade/Downgrade possible?
                                    </button>
                                </h2>
                                <div id="acc-9" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">No, an upgrade or downgrade is not possible between the plans. However, you can purchase additional RAM and CPU cores as per your requirement.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-10" aria-expanded="false" aria-controls="acc-10">
                                        What is your backup policy?
                                    </button>
                                </h2>
                                <div id="acc-10" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">You are responsible for your backups and web content. We create our own weekly backups , and can restore your web, email and database content from those per your request. However, this is NOT a procedure you should rely on to keep copies of your content safe; we recommend you make your own backups. You can take a backup from your cPanel or better, use a remote backup solution.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

@endsection