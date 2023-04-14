<!doctype html>
<html lang="zxx">


<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <!-- /Required meta tags -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/front/images/favicon.png" type="image/x-icon">
    <!-- /Favicon -->

    <!-- All CSS -->

    <!-- Vendor Css -->
    <link rel="stylesheet" href="/assets/front/css/vendors.css">
    <!-- /Vendor Css -->

    <!-- Plugin Css -->
    <link rel="stylesheet" href="/assets/front/css/plugins.css">
    <!-- Plugin Css -->

    <!-- Icons Css -->
    <link rel="stylesheet" href="/assets/front/css/icons.css">
    <!-- /Icons Css -->

    <!-- Style Css -->
    <link rel="stylesheet" href="/assets/front/css/style.css">
    <!-- /Style Css -->

    <!-- /All CSS -->

</head>

<body>

    <!-- PreLoader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!--Preloader-->

    <!-- Header -->
    <div class="navbar-area">
        <div class="acavo-responsive-nav">
            <!-- Container -->
            <div class="container">
                <div class="acavo-responsive-menu">
                    <div class="">
                        <a href="/">
                            <img src="{{ logo() }}" alt="logo" class='logo-img'>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Container -->
        </div>
        <div class="acavo-nav">
            <!-- Container -->
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ logo() }}" alt="logo" style="width:160px; height:auto;">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ route('front.index') }}" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="{{ route('front.about') }}" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('front.contact') }}" class="nav-link">Contact
                                    Us</a></li>
                            {{-- <li class="nav-item"><a href="{{ route('front.help') }}" class="nav-link">Help & FAQs</a> --}}
                            </li>

                            <li class="nav-item"><a href="{{ route('user.index') }}" class="nav-link"><i
                                        class="fa fa-user"></i>
                                    @auth('user')
                                        My Account
                                    @else
                                        Online Banking
                                    @endauth
                                </a></li>



                        </ul>
                    </div>
                </nav>
            </div>
            <!-- /Container -->
        </div>
    </div>
    <!-- /Header -->

    @yield('content')

    <!-- Footer -->
    <footer class="footer-style bg-gray-100">
        <!-- Container -->
        <div class="container">
            <div class="footer-bottom-area pt-25 pb-25">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>© Copyrights {{ now()->format('Y') }} <a
                                    href="{{ route('front.index') }}">{{ config('app.name') }}</a> All
                                rights reserved.</p>
                        </div>
                    </div>
                    <!-- col -->
                    <!-- /col -->
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /Container -->
    </footer>
    <!-- /Footer -->

    <!-- Go top -->
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="las la-angle-double-up"></i>
                    <i class="las la-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- /Go top -->

    <!-- JS -->

    <!-- Vendor Js -->
    <script src="/assets/front/js/vendors.js"></script>
    <!-- /Vendor js -->

    <!-- Plugins Js -->
    <script src="/assets/front/js/plugins.js"></script>
    <!-- /Plugins Js -->

    <!-- Main JS -->
    <script src="/assets/front/js/main.js"></script>
    <!-- /Main JS -->

    <!-- /JS -->
    <x-live-chat />

</body>


</html>
