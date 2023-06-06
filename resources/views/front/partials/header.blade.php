<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Dakamak')</title>
    <link rel="shortcut icon" href="{{ asset('front/assets/images/logo/daka.png') }}">

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
        <div class="fix">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="{{ route_text('') }}">
                                    <img src="{{ asset('storage/uploads/' . $generalSetting->logo) }}"
                                        alt="dakamak logo">
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
        </div>
        <div class="offcanvas__overlay"></div>
        <div class="offcanvas__overlay-white"></div>
        <!-- Offcanvas area start -->

        <!-- Site Header - Start
      ================================================== -->
        <header class="site_header site_header_1">
            <div class="container">
                <div class="header_wrapper">
                    <div class="site_logo">
                        <a class="site_link" href="{{ route_text('') }}">
                            <img src="{{ asset('storage/uploads/' . $generalSetting->logo) }}" alt="dakamak logo">
                        </a>
                    </div>
                    <div class="mean__menu-wrapper d-none d-lg-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route_text('') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route_text('services') }}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ route_text('about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route_text('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- for wp -->
                            <div class="header__hamburger ml-50 d-none">
                                <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span>01</span>
                                    <span>01</span>
                                    <span>01</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="header_right">
                        <ul class="header_btns_group unordered_list_end d-none d-md-flex">
                            <li>
                                <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#main_menu_dropdown" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <i class="far fa-bars"></i>
                                </button>
                            </li>
                            <li>
                                <div class="select_option m-0">
                                    <div class="icon_wrap">
                                        <img src="{{ asset('front/assets/images/icons/icon_globe.svg') }}"
                                            alt="Globe Icon">
                                    </div>

                                    <select onchange="location = this.value">
                                        @foreach ($languages as $language)
                                            <option value="/{{ $language->locale }}"{{ $language->locale === app()->getLocale() ? 'selected' : '' }}>{{ $language->language }}</option>
                                        @endforeach
                                    </select>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <a class="btn btn-dark" href="{{ route_text('contact') }}">
                                    <span class="btn_text">
                                        <small>Get a Quotes</small>
                                        <small>Get a Quotes</small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="offcanvas-toggle d-lg-none">
                            <a class="bar-icon" href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Site Header - End
      ================================================== -->
