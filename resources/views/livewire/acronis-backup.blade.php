@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section>
                    <div class="banner-2 banner-section">
                        <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                        <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                        <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 op-2">
                        <img src="{{asset('build/assets/images/patterns/3.png')}}" alt="img" class="patterns-7 op-2">
                        <div class="container">
                            <div class="row align-items-stretch">
                                <div class="col-lg-7">
                                    <div class="mb-4">
                                        <p class="mb-3 content-1 h5 text-white"> <img src="{{asset('build/assets/images/png/62.png')}}" class="mb-3 me-3 img-fluid w-33p" alt="img">Cyber <span class="tx-info-dark">Backup</span></p>
                                        <p class="content-2 tx-16">
                                            All the data that you backup will be stored in an offsite location, so that in case of a disaster at the location of your VPS or Dedicated Server, your backup data will remain safe.
                                        </p>
                                        <p class="mb-0 tx-16">Start your business at just<span class="h2 text-white"> $13.8 <span class="op-5 tx-15">/ month</span></span></p>
                                    </div>
                                    <a href="#plans" class="btn btn-lg btn-secondary me-2"><i class="fe fe-eye me-2"></i> View Plans</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="btn btn-lg btn-white"><i class="fe fe-shopping-cart me-2"></i> Buynow</a>
                                </div>
                                <div class="col-lg-5">
                                    <div class="banner-bg acronis-image mt-5 mt-lg-0">
                                        <img src="{{asset('build/assets/images/png/54.png')}}" class="reseller-img img-fluid" alt="img" width="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section overflow-hidden">
                    <img src="{{asset('build/assets/images/patterns/23.png')}}" alt="img" class="patterns-1 op-1 z-index-0">
                    <img src="{{asset('build/assets/images/patterns/16.png')}}" alt="img" class="patterns-7 op-1 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Easy Steps</span></div>
                            <div class="heading-title">3 Simple Steps How <span class="tx-primary">Acronis works</span></div>
                            <div class="heading-description">Check This Out and follow the steps</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card shadow-none bg-transparent">
                                    <div class="card-body text-center">
                                        <div class="p-2 bg-primary-transparent feature-avatar-icon-2 d-inline-block mb-3">
                                            <span class="avatar all-ease-03 avatar-lg bg-primary-gradient tx-24 text-white">1</span>
                                        </div>
                                        <h5 class="">Automatic setup of backup account</h5>
                                        <p class="mb-0">Eos eos accusam sed vero sit dolo, invidunt erat sea sanctus magna vero tempor sed. Ea dolor ipsum et consetetur at aliquyam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card shadow-none bg-transparent">
                                    <div class="card-body text-center">
                                        <div class="p-2 bg-secondary-transparent feature-avatar-icon-2 d-inline-block mb-3">
                                            <span class="avatar all-ease-03 avatar-lg bg-secondary-gradient tx-24 text-white">2</span>
                                        </div>
                                        <h5 class="">Schedule backups from the panel</h5>
                                        <p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card shadow-none bg-transparent">
                                    <div class="card-body text-center">
                                        <div class="p-2 bg-danger-transparent feature-avatar-icon-2 d-inline-block mb-3">
                                            <span class="avatar all-ease-03 avatar-lg bg-danger-gradient tx-24 text-white">3</span>
                                        </div>
                                        <h5 class="">Restore from any backup point easily</h5>
                                        <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-gray-100 bg-pattern-1" id="plans">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <div class="heading-section">
                                    <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Servers</span></div>
                                    <div class="heading-title">Compatible With</div>
                                    <div class="heading-description">Accusam takimata diam ipsum et eirmod nonumy diam rebum tempor et</div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="card border shadow-none">
                                    <div class="card-body">
                                        <div class="p-3 bg-gray-100 br-5 text-center mb-5">
                                            <img src="{{asset('build/assets/images/png/17.png')}}" alt="img" width="250" class="img-fluid">
                                        </div>
                                        <h4 class="mb-3">VPS Servers</h4>
                                        <p class="">Eos eos accusam sed vero sit dolor sed duo, invidunt erat sea sanctus magna vero.</p>
                                        <ul class="list-unstyled fw-500">
                                            <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Eos eos accusam sed vero sit.</li>
                                            <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Nam harum.</li>
                                            <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Sed quia consequuntur.</li>
                                        </ul>
                                        <p class="mb-4 tx-16">Start your business at just<span class="tx-28 fw-600 tx-color-default"> $13.8</span><span class="op-7"> / month</span></p>
                                        <a href="{{url('virtualserver-linux-hosting')}}" class="btn btn-primary d-grid">View Plans</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card border shadow-none mt-4">
                                    <div class="card-body">
                                        <div class="p-3 bg-gray-100 br-5 text-center mb-5">
                                            <img src="{{asset('build/assets/images/png/18.png')}}" alt="img" width="250" class="img-fluid">
                                        </div>
                                        <h4 class="mb-3">Dedicated Servers</h4>
                                        <p class="">At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                        <ul class="list-unstyled fw-500">
                                            <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Quidem rerum.</li>
                                            <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Ut enim ad minima.</li>
                                            <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Nisi ut aliquid ex ea commodi.</li>
                                            <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Accusam takimata diam.</li>
                                            <li class="list-item mb-0"><i class="bi bi-check-circle tx-primary me-2"></i>sea sanctus magna vero.</li>
                                        </ul>
                                        <p class="mb-4 tx-16">Start your business at just<span class="tx-28 fw-600 tx-color-default"> $76.7</span><span class="op-7"> / month</span></p>
                                        <a href="{{url('dedicated-server')}}" class="btn btn-primary d-grid">View Plans</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card border shadow-none">
                                    <div class="card-body">
                                        <div class="p-3 bg-gray-100 br-5 text-center mb-5">
                                            <img src="{{asset('build/assets/images/png/19.png')}}" alt="img" width="250" class="img-fluid">
                                        </div>
                                        <h4 class="mb-3">Windows Dedicated Servers</h4>
                                        <p class="">Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
                                        <ul class="list-unstyled fw-500">
                                            <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Excepteur sint occaecat cupidatat.</li>
                                            <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Veritatis et quasi architecto.</li>
                                            <li class="list-item mb-2"><i class="bi bi-check-circle tx-primary me-2"></i>Neque porro.</li>
                                        </ul>
                                        <p class="mb-4 tx-16">Start your business at just<span class="tx-28 fw-600 tx-color-default"> $45.8</span><span class="op-7"> / month</span></p>
                                        <a href="{{url('windows-dedicated-server')}}" class="btn btn-primary d-grid">View Plans</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section overflow-hidden">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-7 filter-invert op-1 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Features</span></div>
                            <div class="heading-title">Features of Acronis <span class="tx-primary"> Cyber Backup</span></div>
                            <div class="heading-description">Main Features</div>
                        </div>
                        <div class="row justify-content-center feature-client-bg">
                            <div class="col-xl-12">
                                <div class="tab-style-3 mb-4">
                                    <ul class="nav nav-pills d-md-flex d-block justify-content-center" role="tablist">
                                        <li class="nav-item position-relative mb-3 mb-lg-0 me-md-4" role="presentation">
                                            <a href="javascript:void(0);" class="tab-style-3-link stretched-link active" data-bs-toggle="pill" data-bs-target="#pricing" aria-selected="true" role="tab" tabindex="-1"></a>
                                            <div class="card feature-card-3 shadow-none mb-0">
                                                <div class="card-body px-3 py-2 text-center">
                                                    <div class="tx-16 fw-600 mb-0">
                                                        <i class="bi bi-currency-dollar me-1"></i>
                                                        <span>Simple Pricing</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item position-relative mb-3 mb-lg-0 me-md-4" role="presentation">
                                            <a href="javascript:void(0);" class="tab-style-3-link stretched-link" data-bs-toggle="pill" data-bs-target="#ease" aria-selected="false" role="tab" tabindex="-1"></a>
                                            <div class="card feature-card-3 shadow-none mb-0">
                                                <div class="card-body px-3 py-2 text-center">
                                                    <div class="tx-16 fw-600 mb-0">
                                                        <i class="bi bi-briefcase me-1"></i>
                                                        <span>Ease of use</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item position-relative mb-3 mb-lg-0 me-md-4" role="presentation">
                                            <a href="javascript:void(0);" class="tab-style-3-link stretched-link" data-bs-toggle="pill" data-bs-target="#intuitive" aria-selected="false" role="tab" tabindex="-1"></a>
                                            <div class="card feature-card-3 shadow-none mb-0">
                                                <div class="card-body px-3 py-2 text-center">
                                                    <div class="tx-16 fw-600 mb-0">
                                                        <i class="bi bi-window-dock me-1"></i>
                                                        <span>Intuitive dashboard</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item position-relative mb-3 mb-lg-0" role="presentation">
                                            <a href="javascript:void(0);" class="tab-style-3-link stretched-link" data-bs-toggle="pill" data-bs-target="#security" aria-selected="false" role="tab" tabindex="-1"></a>
                                            <div class="card feature-card-3 shadow-none mb-0">
                                                <div class="card-body px-3 py-2 text-center">
                                                    <div class="tx-16 fw-500 mb-0">
                                                        <i class="bi bi-shield-check me-1"></i>
                                                        <span>Security</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="pricing" role="tabpanel">
                                        <div class="row banner-pd-1 align-items-center">
                                            <div class="col-xl-6">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <h4 class="mb-5">No bill shocks, no headaches</h4>
                                                        <div class="row fw-500 mb-4">
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-primary-transparent tx-primary rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Simplified prepaid pricing for Backup</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-secondary-transparent tx-secondary rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Pay only for the backup space needed</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-success-transparent tx-success rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">No additional costs for backups or restores</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-info-transparent tx-info rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Increase the backup storage anytime you need</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <a href="javascript:void(0);" class="btn btn-secondary btn-lg">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 text-center">
                                                <img src="{{asset('build/assets/images/png/24.png')}}" class="img-fluid mt-5 mt-xl-0" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="ease" role="tabpanel">
                                        <div class="row banner-pd-1 align-items-center">
                                            <div class="col-xl-6">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <h4 class="mb-5">Eliminates all manual tasks</h4>
                                                        <div class="row fw-500 mb-4">
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-primary-transparent tx-primary rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Automatic setup of backup account</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-secondary-transparent tx-secondary rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Schedule automatic and regular backups</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-success-transparent tx-success rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0 ">Restore to same server or another with a few clicks</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-info-transparent tx-info rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Fast backups and restores</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <a href="javascript:void(0);" class="btn btn-secondary btn-lg">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 text-center">
                                                <img src="{{asset('build/assets/images/png/24.png')}}" class="img-fluid mt-5 mt-xl-0" alt="img" width="450">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="intuitive" role="tabpanel">
                                        <div class="row banner-pd-1 align-items-center">
                                            <div class="col-xl-6">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <h4 class="mb-5">All the intelligence on one panel</h4>
                                                        <div class="row fw-500 mb-4">
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-primary-transparent tx-primary rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Manage all your VPS and Dedicated servers</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-secondary-transparent tx-secondary rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Check health of all your backup processes</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-success-transparent tx-success rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Stay updated with alerts and notifications</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-info-transparent tx-info rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Automated email alerts</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <a href="javascript:void(0);" class="btn btn-secondary btn-lg">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 text-center">
                                                <img src="{{asset('build/assets/images/png/24.png')}}" class="img-fluid mt-5 mt-xl-0" alt="img" width="450">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="security" role="tabpanel">
                                        <div class="row banner-pd-1 align-items-center">
                                            <div class="col-xl-6">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <h4 class="mb-5">Peace of mind Security</h4>
                                                        <div class="row fw-500 mb-4">
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-primary-transparent tx-primary rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Off-site backups to ensure data redundancy</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-secondary-transparent tx-secondary rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Ransomware protection</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-success-transparent tx-success rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Malware protection</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-3">
                                                                                <span class="avatar bg-info-transparent tx-info rounded-circle tx-18"><i class="bi bi-hdd-stack"></i></span>
                                                                            </div>
                                                                            <p class="flex-grow-1 mb-0">Vulnerability assessment</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <a href="javascript:void(0);" class="btn btn-secondary btn-lg">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 text-center">
                                                <img src="{{asset('build/assets/images/png/24.png')}}" class="img-fluid mt-5 mt-xl-0" alt="img" width="450">
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
                                    Which products can I backup using Acronis Cyber Backup?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Acronis Cyber Backup can be configured to backup KVM Linux VPS, Dedicated Linux Servers, and Dedicated Windows Servers.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                    Can I backup all my servers to the same Acronis Account?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes all your servers from one server location can be backed up under the same Acronis Account. Servers from US will be backed under the US account and servers from India and Hong Kong will be backed up on your Acronis Asia account Will the Acronis Cyber Backup order get renewed if I renew my VPS or Dedicated server?</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                    Will the Acronis Cyber Backup order get renewed if I renew my VPS or Dedicated server?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                    <p>No. Acronis has its own product lifecycle and will not be automatically renewed with your VPS or Dedicated Server. You will have to renew it separately.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                    How can I upgrade my backup storage space?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                    <p>If you need more backup storage space you can go to the order management page and add more storage</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                    How safe is my backup data?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">All the data that you backup will be stored in an offsite location, so that in case of a disaster at the location of your VPS or Dedicated Server, your backup data will remain safe. Additionally, the backup data is encrypted and regularly scanned for malware to ensure complete protection.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                    Can I restore backup data from one server to another?
                                    </button>
                                </h2>
                                <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes you can backup and restore your data from one server to another provided you have the backup agent installed on the servers.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                    Can I download the backup files to my local machine?
                                    </button>
                                </h2>
                                <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes you can download the backup files to your computer / local machine from the Acronis panel. What happens when my backup order expires?</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-8" aria-expanded="false" aria-controls="acc-8">
                                    What happens when my backup order expires?
                                    </button>
                                </h2>
                                <div id="acc-8" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">When your backup order expires, it will be suspended and you can renew the order within 15 days to retain your backups. However, if you fail to renew within the time period, your order will be deleted and the backups will also be deleted.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

@endsection