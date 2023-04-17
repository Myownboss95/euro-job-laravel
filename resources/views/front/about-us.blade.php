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

        <title>About Us - {{config('app.name')}} </title>

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
                                <img src="{{asset('logo-light.png')}}" alt="logo">
                                <img src="{{asset('logo.png')}}')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="luvion-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/" style="max-width: 250px">
                            <img src="{{asset('logo-light.png')}}" alt="logo">
                            <img src="{{asset('luvion/img/black-logo.png')}}')}}" alt="logo">
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
                    <h2>About Us</h2>
                    <p>The {{config('app.name')}} story</p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        <div class="currency-transfer-provider-with-background-color">

            <!-- Start About Area -->
            <div class="ctp-about-area ptb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="ctp-about-image"></div>
                        </div>
    
                        <div class="col-lg-6 col-md-12">
                            <div class="ctp-about-content">
                                <span>About us</span>
                                <h3>We help transfer money for a better world</h3>
                                <p>At {{config('app.name')}} Bank Bank, we are committed to providing our customers with the highest level of service and support. We understand that banking is about more than just managing money, it's about building relationships and providing the tools and resources that our customers need to achieve their financial goals.</p>
                                <p>Our team of experienced bankers and financial experts are dedicated to helping our customers navigate the complex world of banking and personal finance. We offer a wide range of products and services, including checking and savings accounts, loans, credit cards, and investment options.</p>
                                <p>In addition to our traditional banking services, we also offer a variety of digital banking tools, such as mobile banking and online banking, to make managing your finances as convenient as possible. With our state-of-the-art security features, you can rest assured that your personal and financial information is protected at all times.</p>
                                <p>At {{config('app.name')}} Bank Bank, we take pride in being a community-focused bank, investing in the local communities we serve and supporting the growth and development of local businesses.</p>
                                <p>We are committed to providing our customers with the best possible banking experience, so if you have any questions or concerns, please don't hesitate to reach out to our customer service team. We are here to help you in any way that we can.</p>
                                <h4>Our mission</h4>
                                <p>Our mission at {{config('app.name')}} Bank Bank is to empower our customers to achieve their financial goals by providing them with the tools and resources they need to manage their money effectively. We strive to offer a wide range of banking products and services that are tailored to meet the unique needs of our customers. We strive to be a trusted financial partner to our customers, providing them with the support and guidance they need to navigate the complex world of banking and personal finance. We are committed to providing excellent customer service and fostering strong, lasting relationships with our customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About Area -->
    
            <!-- Start Fun Facts Area -->
            <div class="ctp-funfacts-area">
                <div class="container">
                    <div class="ctp-funfacts-inner-box pt-100 pb-75">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                                <div class="ctp-funfact-card">
                                    <h3><span class="odometer odometer-auto-theme" data-count="180"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>K+</h3>
                                    <p>Accounts</p>
                                </div>
                            </div>
    
                            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                                <div class="ctp-funfact-card">
                                    <h3><span class="odometer odometer-auto-theme" data-count="20"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>K</h3>
                                    <p>Feed backs</p>
                                </div>
                            </div>
    
                            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                                <div class="ctp-funfact-card">
                                    <h3><span class="odometer odometer-auto-theme" data-count="50"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>K+</h3>
                                    <p>Workers</p>
                                </div>
                            </div>
    
                            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                                <div class="ctp-funfact-card">
                                    <h3><span class="odometer odometer-auto-theme" data-count="70"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</h3>
                                    <p>Countries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Fun Facts Area -->
    
            <!-- Start Choose Area -->
            <div class="ctp-choose-area ptb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="ctp-choose-content without-padding">
                                <h3>Why Choose Us</h3>
                                <p>Here are few reasons why you should choose us.</p>
    
                                <div class="choose-inner-card">
                                    <h4>
                                        <div class="icon">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        Wide range of products and services
                                    </h4>
                                    <p>At {{config('app.name')}} Bank Bank, we offer a wide range of banking products and services to meet the unique needs of our customers. From checking and savings accounts to loans, credit cards, and investment options, we have everything you need to manage your money effectively.</p>
                                </div>
                                <div class="choose-inner-card">
                                    <h4>
                                        <div class="icon">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        Convenient digital banking options
                                    </h4>
                                    <p>We understand the importance of convenience when it comes to banking, that's why we offer a variety of digital banking options, such as mobile banking and online banking, to make managing your finances as easy as possible.</p>
                                </div>
                                <div class="choose-inner-card">
                                    <h4>
                                        <div class="icon">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        Strong community focus
                                    </h4>
                                    <p>We take pride in being a community-focused bank, investing in the local communities we serve and supporting the growth and development of local businesses. We are committed to making a positive impact in the communities we serve, and we are dedicated to helping our customers achieve their financial goals.</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-12">
                            <div class="ctp-choose-image with-border-radius"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Choose Area -->
    
           
    
                    <!-- Start Account Create Area -->
    <section class="account-create-area">
        <div class="container">
            <div class="account-create-content">
                <h2>Apply for an account in minutes</h2>
                <p>Get your Hadetress Bank account today!</p>
                <a href="{{route('register')}}" class="btn btn-primary">Get Your Hadetress Bank Account</a>
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