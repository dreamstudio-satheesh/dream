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
                                        <p class="mb-3 content-1 h5 text-white">WordPress powered by our <span class="tx-info-dark">Cloud Hosting</span> </p>
                                        <p class="mb-4 content-2 tx-18">
                                            A secure, reliable and powerful platform crafted for WordPress
                                        </p>
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Effordable Cost</li>
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Power Packed With Tools</li>
                                            <li class="list-item"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Money Return Guarantee</li>
                                        </ul>
                                    </div>
                                    <a href="#plans" class="btn btn-lg btn-secondary me-2"><i class="fe fe-eye me-2"></i> View Plans</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="btn btn-lg btn-white"><i class="fe fe-shopping-cart me-2"></i> Buynow</a>
                                </div>
                                <div class="col-lg-5">
                                    <div class="banner-bg banner-img2 mt-5 mt-lg-0">
                                        <div class="price-main text-start">
                                            <p class="mb-1 op-7">Starts at</p>
                                            <h1 class="mb-2 tx-50 text-white">$9.25 <span class="tx-14 op-7">/ month</span></h1>
                                            <p class="tx-14 mb-0">30 Days Money Return Available</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1">
                    <img src="{{asset('build/assets/images/patterns/3.png')}}" alt="img" class="patterns-7 op-1 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Features</span></div>
                            <div class="heading-title">It just works <span class="tx-primary">Auto-magically</span></div>
                            <div class="heading-description">Check These Features</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card feature-card-4 feature-card-4-primary">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="p-2 bg-primary-transparent rounded-circle d-inline-block mb-3">
                                                <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle text-bg-primary tx-24">
                                                    <i class="bi bi-star-half outline"></i>
                                                    <i class="bi bi-star-fill filled"></i>
                                                </span>
                                            </div>
                                            <h4 class="mb-3">Auto-Setup</h4>
                                            <p class="mb-0">No need for any legwork - Your WordPress hosting comes pre-configured with the latest version of WordPress and is ready-to-use the moment you buy it.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card feature-card-4 feature-card-4-secondary">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="p-2 bg-secondary-transparent rounded-circle d-inline-block mb-3">
                                                <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle text-bg-secondary tx-24">
                                                    <i class="bi bi-eject outline"></i>
                                                    <i class="bi bi-eject-fill filled"></i>
                                                </span>
                                            </div>
                                            <h4 class="mb-3">Auto-Updates</h4>
                                            <p class="mb-0">Any patches or version upgrades released by WordPress are automatically installed for your packages, not only making your sites future-proof but also more secure.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card feature-card-4 feature-card-4-success">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="p-2 bg-success-transparent rounded-circle d-inline-block mb-3">
                                                <span class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle text-bg-success tx-24">
                                                    <i class="bi bi-lightning outline"></i>
                                                    <i class="bi bi-lightning-fill filled"></i>
                                                </span>
                                            </div>
                                            <h4 class="mb-3">Auto-Caching</h4>
                                            <p class="mb-0">Get the best-performing WordPress sites with our Cloud Hosting. With cache and CDN auto-configured on all your packages, pages load much faster with the least amount of resources.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-3 op-1 z-index-0 filter-invert">
                    <img src="{{asset('build/assets/images/patterns/22.png')}}" alt="img" class="patterns-8 op-9 z-index-0 dark-opacity1">
                    <img src="{{asset('build/assets/images/patterns/22.png')}}" alt="img" class="patterns-7 op-9 z-index-0 dark-opacity1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Protection</span></div>
                            <div class="heading-title">Security <span class="tx-primary">Suite</span></div>
                            <div class="heading-description">Dolor sit duo no ut gubergren</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-5 text-center text-lg-start">
                                <img src="{{asset('build/assets/images/png/30.png')}}" alt="img" class="img-fluid mb-5 mb-xl-0">
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="tab-style-3 mb-4">
                                    <ul class="nav nav-pills d-md-flex d-block justify-content-center" role="tablist">
                                        <li class="nav-item position-relative me-md-4 mb-4 mb-md-0" role="presentation">
                                            <a href="javascript:void(0);" class="tab-style-3-link stretched-link active" data-bs-toggle="pill" data-bs-target="#autoBackups" aria-selected="false" role="tab" tabindex="-1"></a>
                                            <div class="card feature-card-3 shadow-none mb-0">
                                                <div class="card feature-card-3 shadow-none mb-0 bg-transparent">
                                                    <div class="card-body px-3 py-2 text-center">
                                                        <div class="tx-16 fw-600 mb-0">
                                                            <i class="bi bi-arrow-up-circle me-1"></i>
                                                            <span>Auto Backups</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a href="javascript:void(0);" class="tab-style-3-link stretched-link" data-bs-toggle="pill" data-bs-target="#autoSecured" aria-selected="true" role="tab"></a>
                                            <div class="card feature-card-3 shadow-none mb-0">
                                                <div class="card feature-card-3 shadow-none mb-0 bg-transparent">
                                                    <div class="card-body px-3 py-2 text-center">
                                                        <div class="tx-16 fw-600 mb-0">
                                                            <i class="bi bi-shield-check me-1"></i>
                                                            <span>Auto Secured</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="autoBackups">
                                        <div class="card shadow-none bg-transparent">
                                            <div class="card-body px-0">
                                                <div class="d-flex mb-4">
                                                    <span class="avatar bg-primary-transparent tx-primary rounded-circle tx-20 me-3"><i class="bi bi-clock-history"></i></span>
                                                    <span class="tx-15 tx-muted my-auto">Get a time machine for all your WordPress sites. With CodeGuard automatically set up for any site you create, your data is always protected and regularly backed up.</span>
                                                </div>
                                            <ul class="list-unstyled mb-0 fw-500 ps-2">
                                                    <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Prevent malicious coding from hackers</li>
                                                    <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Prevent Hosting Server Corruption</li>
                                                    <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Restore accidentally deleted files</li>
                                                    <li class="list-item"><i class="bi bi-check-circle tx-primary me-2"></i>For moving the site from one server to another</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="autoSecured">
                                        <div class="card shadow-none bg-transparent">
                                            <div class="card-body px-0">
                                                <div class="d-flex mb-4">
                                                    <span class="avatar bg-primary-transparent tx-primary rounded-circle tx-20 me-3"><i class="bi bi-shield-check"></i></span>
                                                    <span class="tx-15 tx-muted my-auto">No need to worry about viruses or hacking attempts. All your WordPress sites will be regularly scanned for malware with SiteLock's advanced security tools.</span>
                                                </div>
                                                <ul class="list-unstyled mb-0 fw-500 ps-2">
                                                    <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Improve performance</li>
                                                    <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>No Plugin needed</li>
                                                    <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Web application Firewall</li>
                                                    <li class="list-item"><i class="bi bi-check-circle tx-primary me-2"></i>Blacklist Monitoring & Removal</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-gray-100 bg-pattern-1 bg-image1" id="plans">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Choose</span></div>
                            <div class="heading-title">Select Your <span class="tx-primary">Plan</span> </div>
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
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#bccef4" d="M12,14.19531c-0.17551-0.00004-0.34793-0.04618-0.5-0.13379l-9-5.19726C2.02161,8.58794,1.85779,7.97612,2.13411,7.49773C2.22187,7.34579,2.34806,7.2196,2.5,7.13184l9-5.19336c0.30964-0.17774,0.69036-0.17774,1,0l9,5.19336c0.4784,0.27632,0.64221,0.88814,0.36589,1.36653C21.77813,8.65031,21.65194,8.7765,21.5,8.86426l-9,5.19726C12.34793,14.14913,12.17551,14.19527,12,14.19531z"/>
                                                    <path fill="#9ab5ee" d="M21.5,11.13184l-1.96411-1.13337L12.5,14.06152c-0.30947,0.17839-0.69053,0.17839-1,0L4.46411,9.99847L2.5,11.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,12.65031,2.34806,12.7765,2.5,12.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,11.34579,21.65194,11.2196,21.5,11.13184z"/>
                                                    <path fill="#5885e4" d="M21.5,15.13184l-1.96411-1.13337L12.5,18.06152c-0.30947,0.17838-0.69053,0.17838-1,0l-7.03589-4.06305L2.5,15.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,16.65031,2.34806,16.7765,2.5,16.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,15.34579,21.65194,15.2196,21.5,15.13184z"/>
                                                </svg>
                                                <h4 class="mb-3">Starter Lite</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$79.9<span class="tx-14 tx-muted op-7"> / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-500 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">1 WordPress Installation</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Dual Core CPU Core</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">2 GB RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">5 GB Storage</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Unlimited Email Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                                    <path fill="#9ab5ee" d="M21.951 9.67a1 1 0 0 0-.807-.68l-5.699-.828-2.548-5.164A.978.978 0 0 0 12 2.486v16.28l5.097 2.679a1 1 0 0 0 1.451-1.054l-.973-5.676 4.123-4.02a1 1 0 0 0 .253-1.025z"/>
                                                    <path fill="#5885e4" d="M11.103 2.998 8.555 8.162l-5.699.828a1 1 0 0 0-.554 1.706l4.123 4.019-.973 5.676a1 1 0 0 0 1.45 1.054L12 18.765V2.503c-.356.001-.703.167-.897.495z"/>
                                                </svg>
                                                <h4 class="mb-3">Performance Lite</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$96.9<span class="tx-14 tx-muted op-7"> / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-500 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">2 WordPress Installation</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Quad Core CPU Core</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">4 GB RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">20 GB Storage</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Unlimited Email Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                                <h4 class="mb-3">Business Lite</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$125.5<span class="tx-14 tx-muted op-7"> / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-500 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">3 WordPress Installation</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Hexa Core CPU Core</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">6 GB RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">40 GB Storage</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Unlimited Email Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border-top border-primary border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                                    <path fill="#5885e4" d="m17.737 14.622-2.426 2.23a11.603 11.603 0 0 1-4.299 2.37l.644 3.004a1 1 0 0 0 1.469.661l3.905-2.202a3.035 3.035 0 0 0 1.375-3.304zM7.266 8.776l2.088-2.48-2.604-.628a2.777 2.777 0 0 0-3.387 1.357l-2.2 3.9a1 1 0 0 0 .661 1.469l3.073.659a12.887 12.887 0 0 1 2.369-4.277zm9.468.04a1.5 1.5 0 1 0-1.5-1.5 1.5 1.5 0 0 0 1.5 1.5z"/>
                                                    <path fill="#9ab5ee" d="M22.601 2.062a1 1 0 0 0-.713-.713A11.249 11.249 0 0 0 10.47 4.972L7.266 8.776a12.936 12.936 0 0 0-2.924 6.71 1 1 0 0 0 .284.837l3.1 3.1a1 1 0 0 0 .708.293c.028 0 .057-.001.086-.004a11.847 11.847 0 0 0 6.79-2.86l3.664-3.368A11.204 11.204 0 0 0 22.6 2.062Zm-5.867 6.754a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5Z"/>
                                                </svg>
                                                <h4 class="mb-3">Professional Lite</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$150.5<span class="tx-14 tx-muted op-7"> / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-500 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">5 WordPress Installation</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Hexa Core CPU Core</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">6 GB RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">40 GB Storage</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Unlimited Email Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                            <div class="tab-pane fade" id="pills-yearly">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#bccef4" d="M12,14.19531c-0.17551-0.00004-0.34793-0.04618-0.5-0.13379l-9-5.19726C2.02161,8.58794,1.85779,7.97612,2.13411,7.49773C2.22187,7.34579,2.34806,7.2196,2.5,7.13184l9-5.19336c0.30964-0.17774,0.69036-0.17774,1,0l9,5.19336c0.4784,0.27632,0.64221,0.88814,0.36589,1.36653C21.77813,8.65031,21.65194,8.7765,21.5,8.86426l-9,5.19726C12.34793,14.14913,12.17551,14.19527,12,14.19531z"/>
                                                    <path fill="#9ab5ee" d="M21.5,11.13184l-1.96411-1.13337L12.5,14.06152c-0.30947,0.17839-0.69053,0.17839-1,0L4.46411,9.99847L2.5,11.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,12.65031,2.34806,12.7765,2.5,12.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,11.34579,21.65194,11.2196,21.5,11.13184z"/>
                                                    <path fill="#5885e4" d="M21.5,15.13184l-1.96411-1.13337L12.5,18.06152c-0.30947,0.17838-0.69053,0.17838-1,0l-7.03589-4.06305L2.5,15.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,16.65031,2.34806,16.7765,2.5,16.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,15.34579,21.65194,15.2196,21.5,15.13184z"/>
                                                </svg>
                                                <h4 class="mb-3">Starter Lite</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$399<span class="tx-14 tx-muted op-7"> / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-500 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">1 WordPress Installation</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Dual Core CPU Core</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">2 GB RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">5 GB Storage</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Unlimited Email Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                                    <path fill="#9ab5ee" d="M21.951 9.67a1 1 0 0 0-.807-.68l-5.699-.828-2.548-5.164A.978.978 0 0 0 12 2.486v16.28l5.097 2.679a1 1 0 0 0 1.451-1.054l-.973-5.676 4.123-4.02a1 1 0 0 0 .253-1.025z"/>
                                                    <path fill="#5885e4" d="M11.103 2.998 8.555 8.162l-5.699.828a1 1 0 0 0-.554 1.706l4.123 4.019-.973 5.676a1 1 0 0 0 1.45 1.054L12 18.765V2.503c-.356.001-.703.167-.897.495z"/>
                                                </svg>
                                                <h4 class="mb-3">Performance Lite</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$599<span class="tx-14 tx-muted op-7"> / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-500 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">2 WordPress Installation</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Quad Core CPU Core</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">4 GB RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">20 GB Storage</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Unlimited Email Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                                <h4 class="mb-3">Business Lite</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$799<span class="tx-14 tx-muted op-7"> / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-500 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">3 WordPress Installation</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Hexa Core CPU Core</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">6 GB RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">40 GB Storage</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Unlimited Email Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border-top border-primary border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                                    <path fill="#5885e4" d="m17.737 14.622-2.426 2.23a11.603 11.603 0 0 1-4.299 2.37l.644 3.004a1 1 0 0 0 1.469.661l3.905-2.202a3.035 3.035 0 0 0 1.375-3.304zM7.266 8.776l2.088-2.48-2.604-.628a2.777 2.777 0 0 0-3.387 1.357l-2.2 3.9a1 1 0 0 0 .661 1.469l3.073.659a12.887 12.887 0 0 1 2.369-4.277zm9.468.04a1.5 1.5 0 1 0-1.5-1.5 1.5 1.5 0 0 0 1.5 1.5z"/>
                                                    <path fill="#9ab5ee" d="M22.601 2.062a1 1 0 0 0-.713-.713A11.249 11.249 0 0 0 10.47 4.972L7.266 8.776a12.936 12.936 0 0 0-2.924 6.71 1 1 0 0 0 .284.837l3.1 3.1a1 1 0 0 0 .708.293c.028 0 .057-.001.086-.004a11.847 11.847 0 0 0 6.79-2.86l3.664-3.368A11.204 11.204 0 0 0 22.6 2.062Zm-5.867 6.754a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5Z"/>
                                                </svg>
                                                <h4 class="mb-3">Professional Lite</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$999<span class="tx-14 tx-muted op-7"> / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-500 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">5 WordPress Installation</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Hexa Core CPU Core</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">6 GB RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">40 GB Storage</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Unlimited Email Accounts</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1 fw-600">Free SSL Certificate <a href="javascript:void(0);" data-bs-toggle="tooltip" title="All Our Shared Hosting Servers now come with a pre-installed SSL by Let's Encrypt. This means your site will automatically be flagged as 'SECURE' and will ensure all information sent over the site is fully encrypted." class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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

                <section class="section section-2 text-white">
                    <img src="{{asset('build/assets/images/patterns/12.png')}}" alt="img" class="patterns-8 sub-pattern-1 z-index-0 op-1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-title text-white">Wordpress Powers 27% of Websites on the Internet </div>
                            <div class="heading-description text-white op-8">Build anything - a blog, a static website or an ecommerce shop</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="card bg-transparent shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 text-center">
                                                <div class="mb-2">
                                                    <span class="avatar bg-info rounded-circle tx-20 shadow"><i class="bi bi-palette"></i></span>
                                                </div>
                                                <h5 class="mb-2 text-white">Ready-made Themes</h5>
                                                <p class="mb-0 op-8">Choose from over 25,000+ themes available for any type of business, portfolio, or blog.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-transparent shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 text-center">
                                                <div class="mb-2">
                                                    <span class="avatar bg-secondary rounded-circle tx-20 shadow"><i class="bi bi-lightning-charge"></i></span>
                                                </div>
                                                <h5 class="mb-2 text-white">Diversified Plugins</h5>
                                                <p class="mb-0 op-8">Add features to your websites by installing plugins in a few clicks.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 text-center">
                                <img src="{{asset('build/assets/images/png/9.png')}}" class="img-fluid" alt="img">
                            </div>

                            <div class="col-lg-4">
                                <div class="card bg-transparent shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 text-center">
                                                <div class="mb-2">
                                                    <span class="avatar bg-success rounded-circle tx-20 shadow"><i class="bi bi-window"></i></span>
                                                </div>
                                                <h5 class="mb-2 text-white">SEO Friendly</h5>
                                                <p class="mb-0 op-8">With pre-integrated SEO friendly module, drive maximum traffic to your site through search engines.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-transparent shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 text-center">
                                                <div class="mb-2">
                                                    <span class="avatar bg-danger rounded-circle tx-20 shadow"><i class="bi bi-phone"></i></span>
                                                </div>
                                                <h5 class="mb-2 text-white">Mobile Compatible</h5>
                                                <p class="mb-0 op-8">Create and even edit your site on any mobile device seamlessly.</p>
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
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Hosting</span></div>
                            <div class="heading-title">Your WordPress Site - powered by our <span class="tx-primary">Cloud Hosting</span> </div>
                            <div class="heading-description">Checkout These Features</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card shadow-none bg-transparent">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="bg-info-transparent rounded-circle d-inline-block me-3">
                                                <span class="avatar feature-avatar-1 bg-primary-radial-gradient avatar-lg rounded-circle tx-24"><i class="bi bi-lightning"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h4 class="mb-2">Blazing-Fast Load Time</h4>
                                                <p class="mb-0">With top-of-the-line hardware and caching - which stores your site's most used pages, and a globally distributed CDN, your site is served upto 2x faster.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shadow-none bg-transparent">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="bg-info-transparent rounded-circle d-inline-block me-3">
                                                <span class="avatar feature-avatar-1 bg-primary-radial-gradient avatar-lg rounded-circle tx-24"><i class="bi bi-window-desktop"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h4 class="mb-2">Instant Scaling</h4>
                                                <p class="mb-0">No need to move your hosting as your traffic grows. Ramp up your resources at the click of a button - instantly add RAM and CPU without a reboot.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shadow-none bg-transparent">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="bg-info-transparent rounded-circle d-inline-block me-3">
                                                <span class="avatar feature-avatar-1 bg-primary-radial-gradient avatar-lg rounded-circle tx-24"><i class="bi bi-shield-check"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h4 class="mb-2">Your Data - Safeguarded</h4>
                                                <p class="mb-0">Our industry-leading Ceph-based storage system stores your website data across 3 distinct devices to ensure redundancy and safety.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shadow-none bg-transparent">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="bg-info-transparent rounded-circle d-inline-block me-3">
                                                <span class="avatar feature-avatar-1 bg-primary-radial-gradient avatar-lg bg-gray-100 rounded-circle tx-24"><i class="bi bi-robot"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h4 class="mb-2">Automatic Failover</h4>
                                                <p class="mb-0">If we detect a hardware issue, we automatically move your site to another server, ensuring that your site is always up and you never lose traffic.</p>
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
                                        What is Shared Web Hosting?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">In Shared Web Hosting, multiple clients are hosted on a single server i.e. the clients share the server's resources. This helps reduce the cost, since the cost of the server and its resources are spread over all the clients/packages hosted on the server. Shared Hosting is perfect for personal websites, small and mid-sized businesses that do not require all the resources of a server.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        Can I host multiple Web sites within one Shared Hosting plan?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes! Our Pro and Business shared hosting plans allow you to host more than one Website, by adding secondary domains through your hosting control panel i.e. Plesk.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        Is there a Money Back Guarantee?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, we offer a 100% Risk Free, 30 day Money Back Guarantee.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                        Is Email hosting included in my package?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, all our Hosting packages come with Unlimited Email Hosting.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        Can I upgrade to a higher plan?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, you can easily upgrade to one of our higher plans at any time.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                        Is my data safe? Do you take backups?
                                    </button>
                                </h2>
                                <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, your data is a 100% secure and is backed-up every 5 days.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                        Do you include protection from viruses?
                                    </button>
                                </h2>
                                <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, all our servers are protected by Clam AV.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-8" aria-expanded="false" aria-controls="acc-8">
                                        Can I divide my Shared Hosting package and resell it?
                                    </button>
                                </h2>
                                <div id="acc-8" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">While a Shared Hosting package cannot be used for this purpose, you can easily resell custom packages with our Reseller Hosting. To view our Reseller Hosting plans, <a href="{{url('linux-reseller-hosting')}}" class="plain-link">click here</a>.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-9" aria-expanded="false" aria-controls="acc-9">
                                        Do you offer SSH access?
                                    </button>
                                </h2>
                                <div id="acc-9" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, we provide SSH access to your domain. Because this is a shared environment, you will not get root access. However, you will be able to achieve most of your requirements by having the rights to access only the files relevant to your domain.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-10" aria-expanded="false" aria-controls="acc-10">
                                        Who do I get in touch with if I need help?
                                    </button>
                                </h2>
                                <div id="acc-10" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Our Support team is always at hand to assist you. You can take a look at all our contact details <a href="{{url('contact-us')}}" class="plain-link">here</a>.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

@endsection