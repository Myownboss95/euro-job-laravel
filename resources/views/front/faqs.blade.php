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

        <title>FAQs - {{config('app.name')}} </title>

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
                    <h2>FAQs</h2>
                    <p>Questions answered by {{config('app.name')}}</p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        <section class="faq-area ptb-70">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5 col-md-12">
                      <div class="faq-content">
                          <h2>Frequently Asked Questions</h2>
                          <div class="bar"></div>
                          <p>Clearing Up Common Confusions.</p>

                          <div class="faq-image">
                              <img src="{{asset('luvion/img/faq.png')}}" alt="image">
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-7 col-md-12">
                      <div class="faq-accordion">
                          <ul class="accordion">
                              <li class="accordion-item">
                                  <a class="accordion-title active" href="javascript:void(0)">
                                      <i class="fas fa-plus"></i>
                                      What types of accounts can I open with {{config('app.name')}} online?
                                  </a>

                                  <p class="accordion-content show">You can open a variety of accounts with {{config('app.name')}} online such as checking, savings, money market accounts and more.</p>
                              </li>

                              <li class="accordion-item">
                                  <a class="accordion-title" href="javascript:void(0)">
                                      <i class="fas fa-plus"></i>
                                      Is {{config('app.name')}}'s online banking safe and secure?
                                  </a>

                                  <p class="accordion-content">
                                      Yes, {{config('app.name')}}'s online banking is safe and secure. We use advanced encryption and multi-factor authentication to protect your personal and financial information.
                                  </p>
                              </li>

                              <li class="accordion-item">
                                  <a class="accordion-title" href="javascript:void(0)">
                                      <i class="fas fa-plus"></i>
                                      How do I access my account information with {{config('app.name')}} online?
                                  </a>

                                  <p class="accordion-content">
                                      You can access your account information by logging into the {{config('app.name')}} online banking portal using your email and password.
                                  </p>
                              </li>

                              <li class="accordion-item">
                                  <a class="accordion-title" href="javascript:void(0)">
                                      <i class="fas fa-plus"></i>
                                      What are the benefits of using {{config('app.name')}}'s online banking?
                                  </a>

                                  <p class="accordion-content">
                                      The benefits of {{config('app.name')}}'s online banking include the ability to check account balances, view transaction history, transfer money between accounts, pay bills, and deposit checks remotely.
                                  </p>
                              </li>

                              <li class="accordion-item">
                                  <a class="accordion-title" href="javascript:void(0)">
                                      <i class="fas fa-plus"></i>
                                       Can I view my account history with {{config('app.name')}} online?
                                  </a>

                                  <p class="accordion-content">
                                      Yes, you can view your account history with {{config('app.name')}} online by logging into the online banking portal.
                                  </p>
                              </li>

                              <li class="accordion-item">
                                  <a class="accordion-title" href="javascript:void(0)">
                                      <i class="fas fa-plus"></i>
                                      Can I deposit checks remotely using {{config('app.name')}}'s online banking?
                                  </a>

                                  <p class="accordion-content">
                                       Yes, {{config('app.name')}} offers mobile check deposit feature which allows you to deposit checks remotely using your mobile device.
                                  </p>
                              </li>

                              <li class="accordion-item">
                                  <a class="accordion-title" href="javascript:void(0)">
                                      <i class="fas fa-plus"></i>
                                      Can I transfer money between accounts using {{config('app.name')}}'s online banking?
                                  </a>

                                  <p class="accordion-content">
                                      Yes, you can transfer money between accounts using {{config('app.name')}}'s online banking.
                                  </p>
                              </li>

                              <li class="accordion-item">
                                  <a class="accordion-title" href="javascript:void(0)">
                                      <i class="fas fa-plus"></i>
                                      Is it possible to open an account with {{config('app.name')}} online?
                                  </a>

                                  <p class="accordion-content">
                                      Yes, {{config('app.name')}} allows you to open an account online, with the option of e-signing the required documents.
                                  </p>
                              </li>

                              <li class="accordion-item">
                                  <a class="accordion-title" href="javascript:void(0)">
                                      <i class="fas fa-plus"></i>
                                       Is there customer support available for {{config('app.name')}}'s online banking?
                                  </a>

                                  <p class="accordion-content">
                                      Yes, {{config('app.name')}} has a dedicated customer support team available to assist you with any issues or questions related to your online banking account.
                                  </p>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>

              <div class="faq-contact">
                  <div class="section-title">
                      <h2>Do You Have More Questions</h2>
                      <div class="bar"></div>
                      <p>Send us a message on our contact page or chat with a support agent.</p>

                      <a href="{{route('front.contact')}}" class="btn btn-primary mt-5">Contact Us</a>
                  </div>
              </div>
          </div>
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