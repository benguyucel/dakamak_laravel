<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Dakamak - Creative Agency HTML5 Template</title>
    <link rel="shortcut icon" href="{{ asset('front/assets/images/logo/favourite_icon.svg') }}">

    <!-- Fraimwork - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/bootstrap.min.css') }}">

    <!-- Icon Font - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/fontawesome.css') }}">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/animate.css') }}">

    <!-- Meanmenu - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/meanmenu.min.css') }}">

    <!-- Cursor - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/cursor.css') }}">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/slick-theme.css') }}">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/magnific-popup.css') }}">

    <!-- Select - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/nice-select.css') }}">

    <!-- Counter - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/odometer.css') }}">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css') }}">

</head>


<body>

    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

        <!-- Preloder start -->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!-- Preloder start -->

        <!-- Offcanvas area start -->
        {{-- <div class="fix">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <img src="{{ asset('storage/uploads/'.$generalSetting->logo) }}"
                                        alt="logo not found">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <svg class="menu-close-btn" xmlns="http://www.w3.org/2000/svg" width="33.666"
                                    height="33.666" viewBox="0 0 33.666 33.666">
                                    <path d="m1.414 1.414 30.83763383 30.83763383"></path>
                                    <path d="M1.414 32.252 32.25163383 1.41436617"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mobile-menu fix mb-4"></div>
                        <div class="offcanvas__contact text-center">
                            <h4 class="offcanvas__title">Contact Info</h4>
                            <div class="offcanvas__contact-text mb-2">
                                <p><a href="mailto:paradox@example" target="_blank">paradox@example.com</a></p>
                                <span><a href="tel:725214456">725 214 456</a></span>
                            </div>
                            <div class="offcanvas__contact-text">
                                <p><a target="_blank" href="https://www.google.com/maps">Folkungagatan 83, Stockholm,
                                        Sweden</a></p>
                            </div>
                        </div>
                        <div class="offcanvas__devider"></div>
                        <div class="offcanvas__social">
                            <ul>
                                <li><a target="_blank" href="https://www.facebook.com">Facebook</a></li>
                                <li><a target="_blank" href="https://www.instagram.com">Instagram</a></li>
                                <li><a target="_blank" href="https://www.twitter.com">Twitter</a></li>
                                <li><a target="_blank" href="https://www.linkedin.com">Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="offcanvas__overlay"></div>
        <div class="offcanvas__overlay-white"></div>
        <!-- Offcanvas area start -->

        <!-- Main Body - Start
      ================================================== -->
        <main class="page_content">

            <!-- Register Section - Start
        ================================================== -->
            <section class="register_section">
                <div class="column decoration_wrap">
                    <div class="inner"></div>
                    <img class="tilt" src="{{ asset('storage/uploads/lock.jpg') }}"
                        alt="Dakamak Iillustration Image">
                    <div class="deco_item shape_1 wow fadeInDown" data-wow-delay=".1s">
                        <img src="{{ asset('front/assets/images/shapes/shape_circle_dashed_2.png') }}"
                            alt="Dakamak - Shape Image">
                    </div>
                    <div class="deco_item shape_2 wow fadeInUp" data-wow-delay=".1s">
                        <img src="{{ asset('front/assets/images/shapes/shape_circle_half_1.svg') }}"
                            alt="Dakamak - Shape Image">
                    </div>
                </div>
                <div class="column decoration_wrap">
                    <div class="register_form_wrap ms-lg-0">
                        <div class="site_logo">
                            <a class="site_link" href="index.html">
                                <img src="{{ asset('storage/uploads/' . $generalSetting->logo) }}"
                                    alt="Site Logo - Dakamak - Agency Template">
                            </a>
                        </div>
                        <h2 class="form_title">Welcome Back!</h2>
                        <p>Enter the information below to signin your account</p>
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ route('auth.login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="input_email" class="form-label">Email Address<sup
                                        class="form_required_indicator">*</sup></label>
                                <input id="input_email" class="form-control" type="email" name="email"
                                    placeholder="Your Address" required>
                            </div>
                            <div class="form-group">
                                <label for="input_pass" class="form-label">Enter Password<sup
                                        class="form_required_indicator">*</sup></label>
                                <input id="input_pass" class="form-control" type="text" name="password"
                                    placeholder="Enter Password" required>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <a class="link_forgot_pass" href="#!">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <span class="btn_text">
                                    <small>Sign In</small>
                                    <small>Sign In</small>
                                </span>
                                <span class="btn_icon">
                                    <img src="{{ asset('front/assets/images/icons/icon_arrow_down_right_white.svg') }}"
                                        alt="Dakamak - Icon Arrow Down Right">
                                    <img src="{{ asset('front/assets/images/icons/icon_arrow_down_right_white.svg') }}"
                                        alt="Dakamak - Icon Arrow Down Right">
                                </span>
                            </button>
                        </form>
                    </div>

                    <div class="deco_item shape_3 wow fadeInRight" data-wow-delay=".1s">
                        <img src="{{ asset('front/assets/images/shapes/shape_1.svg') }}" alt="Dakamak - Shape Image">
                    </div>
                    <div class="deco_item shape_4 wow zoomIn" data-wow-delay=".1s">
                        <img src="{{ asset('front/assets/images/shapes/shape_circle_2.svg') }}"
                            alt="Dakamak - Shape Image">
                    </div>
                </div>
            </section>
            <!-- Register Section - End
        ================================================== -->

        </main>
        <!-- Main Body - End
      ================================================== -->

    </div>
    <!-- Body Wrap - End -->

    <!-- Fraimwork - Jquery Include -->
    <script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap-dropdown-ml-hack.js') }}"></script>

    <!-- animation - jquery include -->
    <script src="{{ asset('front/assets/js/cursor.js') }}"></script>
    <script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/tilt.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/parallax-scroll.js') }}"></script>

    <!-- Carousel - Jquery Include -->
    <script src="{{ asset('front/assets/js/slick.min.js') }}"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="{{ asset('front/assets/js/magnific-popup.min.js') }}"></script>

    <!-- Select - Jquery Include -->
    <script src="{{ asset('front/assets/js/nice-select.min.js') }}"></script>

    <!-- Counter - Jquery Include -->
    <script src="{{ asset('front/assets/js/appear.js') }}"></script>
    <script src="{{ asset('front/assets/js/odometer.min.js') }}"></script>

    <!-- Isotope Filter - Jquery Include -->
    <script src="{{ asset('front/assets/js/isotope.pkgd.min.js') }}"></script>

    <!-- Meanmenu Filter - Jquery Include -->
    <script src="{{ asset('front/assets/js/meanmenu.min.js') }}"></script>

    <!-- Masonry - Jquery Include -->
    <script src="{{ asset('front/assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/imagesloaded.pkgd.min.js') }}"></script>

    <!-- Countdown Timer - jquery include -->
    <script src="{{ asset('front/assets/js/countdown.js') }}"></script>

    <!-- Type - jquery include -->
    <script src="{{ asset('front/assets/js/type.js') }}"></script>

    <!-- Custom - Jquery Include -->
    <script src="{{ asset('front/assets/js/main.js') }}"></script>

</body>

</html>