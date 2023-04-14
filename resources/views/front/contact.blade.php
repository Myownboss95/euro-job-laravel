@extends('layouts.front')

@section('title', 'Home')

@section('content')
    <!-- Breadcrumb -->
    <div class="banner-section position-relative">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col  -->
                <div class="col-md-6">
                    <div class="banner-content banner-padding">
                        <h3 class="title">CONTACT US</h3>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-md-6 mt-7 mt-md-0">
                    <div class="banner-content scene banner-img">
                        <div data-depth="0.2">
                            <img src="/assets/front/images/bg/4.png" alt="img" />
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Breadcrumb -->

    <!-- Contact Info -->
    <div class="contact-info-area pt-100 pb-70">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class="ri-map-2-line"></i>
                        </div>
                        <div class="icon">
                            <i class="ri-map-2-line"></i>
                        </div>
                        <h3>Our Address</h3>
                        <p>{{ optional($contact)->address }}</p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <div class="icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <h3>Contact</h3>
                        <p>Mobile: <a href="tel:{{ optional($contact)->phone }}">{{ optional($contact)->phone }}</a></p>
                        <p>E-mail: <a href="mailto:{{ optional($contact)->support_email }}">{{ optional($contact)->support_email }}</a>
                        </p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class="ri-time-line"></i>
                        </div>
                        <div class="icon">
                            <i class="ri-time-line"></i>
                        </div>
                        <h3>Hours of Operation</h3>
                        <p>Monday - Friday: 09:00 - 20:00</p>
                        {{-- <p>Sunday & Saturday: 10:30 - 22:00</p> --}}
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Contact Info -->

    <!-- Contact -->
    <div class="contact-section">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row clearfix">
                <!-- col -->
                <div class="col-lg-6 col-md-12 col-sm-12 form-column m-auto">
                    <div class="form-inner">
                        <h3>Send us a message.</h3>
                        <form method="post" action="#" id="contact-form" class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group contact-icon contacts-name">
                                    <input type="text" name="name" placeholder="Your name *" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group contact-icon contacts-email">
                                    <input type="email" name="email" placeholder="Your mail *" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group contact-icon contacts-phone">
                                    <input type="text" name="phone" placeholder="Your Phone *" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group  contact-icon contacts-subject">
                                    <input type="text" name="subject" placeholder="Subject *" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group contact-icon contacts-message">
                                    <textarea name="message" placeholder="Message..."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="btn theme-btn-1" type="submit" name="submit-form">Send
                                        now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- /row -->
        </div>
        <!-- Container -->
    </div>
    <!-- /Contact -->

@endsection
