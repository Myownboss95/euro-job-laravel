<!doctype html>
<html lang="zxx" class="theme-light">
    
<!-- Mirrored from templates.envytheme.com/luvion/default/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 11:32:48 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset('luvion/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/meanmenu.css')}}">
		<link rel="stylesheet" href="{{asset('luvion/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('luvion/css/dark-style.css')}}">

        <title>Contact - {{config('app.name')}} </title>

        <link rel="icon" type="image/png" href="{{asset('luvion/img/favicon.png')}}')}}">
    </head>

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="luvion-responsive-nav">
                <div class="container">
                    <div class="luvion-responsive-menu">
                        <div class="logo">
                            <a href="/" style="max-width: 250px">
                                @include('front.template.logo')
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="luvion-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/" style="max-width: 250px">
                            @include('front.template.logo')
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                @include('front.template.menu')
                            </ul>

                            <div class="others-options">
                                <a href="{{route('login')}}" class="login-btn"><i class="flaticon-user"></i> Log In</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
        
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact us</h2>
                    <p>We listen to you here at {{config('app.name')}}</p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        <section class="contact-area ptb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Drop us message for any query</h2>
                    <div class="bar"></div>
                    <p>Don't hesitate, let us know if you need any help - Reach out to us with your queries.</p>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="contact-info">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <span>Address</span>
                                    11353 12 Oaks Way, North Palm Beach, FL 33408, United States
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <span>Email</span>
                                    <a href="mailto:support{{'@'.front_domain()}}.com">support{{'@'.front_domain()}}</a>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <span>Phone</span>
                                    <a href="tel:+14232814506">+1 423 281 4506</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="contact-form">
                            <form method="get" action="">
                                <input type="hidden" name="_token" value="s7KOnXcetgKarByaZ2DRiAYAis0qVMnh0gBp7fcN">                                                                                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input value="" type="text" name="name" id="name" class="form-control " required="" placeholder="Name">
                                                                                    </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input value="" type="email" name="email" id="email" class="form-control " required="" placeholder="Email">
                                                                                    </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input value="" type="text" name="subject" id="subject" class="form-control " required="" placeholder="Subject">
                                                                                    </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control " id="message" cols="30" rows="6" required="" placeholder="Your Message" data-gramm="false" wt-ignore-input="true"></textarea>
                                                                                    </div>
                                    </div>
                                    <input type="text" name="message_two" style="display: none;">

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-map"><img src="assets/img/bg-map.png" alt="image"></div>
        </section>
        <section class="account-create-area">
        <div class="container">
            <div class="account-create-content">
                <h2>Apply for an account in minutes</h2>
                <p>Get your {{config('app.name')}} account today!</p>
                <a href="{{route('register')}}" class="btn btn-primary">Get Your {{config('app.name')}} Account</a>
            </div>
        </div>
    </section>
    <!-- End Account Create Area -->
        
        </div>        
       @include('front.template.footer')
        
        <div class="go-top"><i class="fas fa-arrow-up"></i></div>

        <!-- Dark/Light Toggle -->
		<div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>

        <!-- Links of JS files -->
        <script src="{{asset('luvion/js/jquery.min.js')}}"></script>
        <script src="{{asset('luvion/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('luvion/js/meanmenu.js')}}"></script>
        <script src="{{asset('luvion/js/nice-select.min.js')}}"></script>
        <script src="{{asset('luvion/js/slick.min.js')}}"></script>
        <script src="{{asset('luvion/js/magnific-popup.min.js')}}"></script>
		<script src="{{asset('luvion/js/appear.min.js')}}"></script>
        <script src="{{asset('luvion/js/odometer.min.js')}}"></script>
        <script src="{{asset('luvion/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('luvion/js/parallax.min.js')}}"></script>
        <script src="{{asset('luvion/js/wow.min.js')}}"></script>
        <script src="{{asset('luvion/js/form-validator.min.js')}}"></script>
        <script src="{{asset('luvion/js/contact-form-script.js')}}"></script>
        <script src="{{asset('luvion/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('luvion/js/main.js')}}"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/luvion/default/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 11:32:54 GMT -->
</html>