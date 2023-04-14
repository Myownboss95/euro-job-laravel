@extends('layouts.front')

@section('title',"Home")

@section('content')
<!-- Hero -->
<div class="hero-1 oh pos-rel" style="background: url('/assets/front/images/hero/banner-bg.png')">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row align-items-center">
            <!-- col -->
            <div class="col-lg-5">
                <div class="hero-1-content wow fadeInLeft animated">
                    <h5 class="cate  wow fadeInUp animated" data-wow-delay="0.2s"></h5>
                    <h1 class="title  wow fadeInUp animated" data-wow-delay="0.4s">{{config('app.name')}}</h1>
                    <p class=" wow fadeInUp animated" data-wow-delay="0.6s">
                        Best banking rates...
                    </p>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-lg-7 d-lg-block">
                <div class="hero-1-thumb-15 wow fadeInUp animated" data-wow-delay="0.4s">
                    <img class="img-fluid wow fadeInRight animated" src="/assets/front/images/hero/hero-1.png" alt="hero-1">
                </div>
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /Hero -->

<!-- Featured box -->
<div class="featured-boxes-area mb-5 pb-5">
    <!-- Container -->
    <div class="container">
        <div class="featured-boxes-inner">
            <!-- row -->
            <div class="row m-0">
                <!-- col -->
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="single-featured-box">
                        <div class="icon color-fb7756">
                            <i class="ri-thumb-up-line"></i>
                        </div>
                        <h3>Professional Services</h3>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="single-featured-box">
                        <div class="icon color-facd60">
                            <i class="ri-wallet-line"></i>
                        </div>
                        <h3>Low costing</h3>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="single-featured-box">
                        <div class="icon color-1ac0c6">
                            <i class="ri-customer-service-2-line"></i>
                        </div>
                        <h3>Live Support</h3>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="single-featured-box">
                        <div class="icon">
                            <i class="ri-shield-keyhole-line"></i>
                        </div>
                        <h3>Safe and Secure</h3>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /Container -->
</div>
<!-- /Featured box -->

<!-- /Services -->
<div class="services-area">
    <!-- Container -->
    <div class="container">
        <!-- row -->
        <div class="row justify-content-center text-center">
            <!-- col -->
            <div class="col-lg-8 col-md-12 mb-50">
                <div class="section-title">
                    <h2 class="title">Best Services</h2>
                    <div class="title-bdr">
                        <div class="left-bdr"></div>
                        <div class="right-bdr"></div>
                    </div>
                </div>
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row">
            <!-- col  -->
            <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                    <div class="image">
                        <a href="javascript:void(0)">
                            <img src="/assets/front/images/services/001.jpg" alt="image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="javascript:void(0)">Personal Loan</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                    <div class="image">
                        <a href="javascript:void(0)">
                            <img src="/assets/front/images/services/002.jpg" alt="image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="javascript:void(0)">Business Loan</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                    <div class="image">
                        <a href="javascript:void(0)">
                            <img src="/assets/front/images/services/003.jpg" alt="image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="javascript:void(0)">Student Loan</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                    <div class="image">
                        <a href="javascript:void(0)">
                            <img src="/assets/front/images/services/004.jpg" alt="image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="javascript:void(0)">Mobile Banking</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                    <div class="image">
                        <a href="javascript:void(0)">
                            <img src="/assets/front/images/services/005.jpg" alt="image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="javascript:void(0)">Credit Card</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                    <div class="image">
                        <a href="javascript:void(0)">
                            <img src="/assets/front/images/services/006.jpg" alt="image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="javascript:void(0)">Online Deposit</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /Container -->
</div>
<!-- /Services -->

<!-- Choose Us -->
<div class="why-choose-us-area pb-100">
    <!-- Container -->
    <div class="container">
        <!-- row -->
        <div class="row align-items-center">
            <!-- col -->
            <div class="col-lg-6">
                <div class="why-choose-us-img">
                    <img src="/assets/front/images/bg/choose-us.png" alt="Image">
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-lg-6">
                <div class="why-choose-us-content mb-removed">
                    <!-- row -->
                    <div class="row justify-content-center text-center">
                        <!-- col -->
                        <div class="col-lg-8 col-md-12 mb-50">
                            <div class="section-title">
                                <h2 class="title">Why choose us</h2>
                                <div class="title-bdr">
                                    <div class="left-bdr"></div>
                                    <div class="right-bdr"></div>
                                </div>
                                <p>Client likes seeing our work skills</p>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                    <p>We are the best when it comes to being:</p>
                    <ul>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Transparent</h3>
                            <p>Your account statement feature is there to prove to you how your money was used.</p>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Proactive</h3>
                            <p>
                                we are very proactive to your requests to do give us a call.
                            </p>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Affordable</h3>
                            <p>Our transaction charges are reduced to as low as 0.2%.</p>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Flexible</h3>
                            <p>We are very flexible in terms of operation time, our online customer care is here to help 24/7</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /Container -->
</div>
<!-- /Choose Us -->

<!-- Client Logo -->
<div class="client-logo-area pb-100">
    <!-- Container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                <div class="client-logo">
                    <div class="client-logo-img"> <img src="/assets/front/images/client-logo/logo-envato.png" alt="" class="img-fluid"></div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                <div class="client-logo">
                    <div class="client-logo-img"> <img src="/assets/front/images/client-logo/logo-converkit.png" alt="" class="img-fluid"></div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                <div class="client-logo">
                    <div class="client-logo-img"> <img src="/assets/front/images/client-logo/logo-buzzumo.png" alt="" class="img-fluid"></div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                <div class="client-logo">
                    <div class="client-logo-img"> <img src="/assets/front/images/client-logo/logo-buffer.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                <div class="client-logo">
                    <div class="client-logo-img"> <img src="/assets/front/images/client-logo/logo-frame.png" alt="" class="img-fluid"></div>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                <div class="client-logo">
                    <div class="client-logo-img"> <img src="/assets/front/images/client-logo/logo-clearbit.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- /col -->
        </div>
        <!-- row -->
    </div>
    <!-- /Container -->
</div>
<!-- /Client Logo -->
@endsection
