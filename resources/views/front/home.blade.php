@extends('front.layouts.master')



@section('content')
    <!-- Hero Banner Section - Start                                                        ================================================== -->
    <section class="hero_banner_section style_5 bg_light_3 decoration_wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-lg-6">
                    <div class="banner_comntent_5 mt-5 mb-4 mb-lg-0 mt-lg-0">
                        <h1 class="hero_banner_heading">
                            {{-- <span class="focus_text">Start Consulting <small>Here</small></span> --}}
                            <span class="d-block">{{ $staticContent->hero_text }}</span>
                        </h1>
                        <ul class="btns_group unordered_list">
                            <li>
                                <a class="btn btn-primary" href="{{ route_text('contact') }}">
                                    <span class="btn_text">
                                        <small>Start Cooperation</small>
                                        <small>Start Cooperation</small>
                                    </span>
                                    <span class="btn_icon">
                                        <img src="{{ asset('front/assets/images/icons/icon_arrow_down_right_white.svg') }}"
                                            alt="Dakamak - Icon Arrow Down Right">
                                        <img src="{{ asset('front/assets/images/icons/icon_arrow_down_right_white.svg') }}"
                                            alt="Dakamak - Icon Arrow Down Right">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="video_play_btn popup_video" href="https://www.youtube.com/watch?v=7e90gBu4pas"
                                    data-cursor="-exclusion -lg" data-cursor-stick="#intro_vbtn">
                                    <span id="intro_vbtn" class="icon_wrap">
                                        <i class="fas fa-play"></i>
                                    </span>
                                    <span class="btn_text"><small class="d-block">Watch Our</small>
                                        Video</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-6">
                    <div class="hero_banner_image decoration_wrap">
                        <div class="man_image">
                            <img class="wow fadeInRight" data-wow-delay=".2s"
                                src="{{ asset('storage/uploads/' . $staticContent->hero_image) }}"
                                alt="Dakamak Illustration Image">
                        </div>
                        {{-- <div class="deco_item analyse_image">
                            <img class="wow fadeInUp" data-wow-delay=".4s"
                                src="{{ asset('front/assets/images/banner/hero_banner_image_6.png') }}"
                                alt="Dakamak Illustration Image">
                        </div> --}}
                        <div class="deco_item shape_1">
                            <img class="wow fadeInLeft" data-wow-delay=".6s"
                                src="{{ asset('front/assets/images/shapes/shape_5.svg') }}"
                                alt="Dakamak Illustration Image">
                        </div>
                        <div class="deco_item shape_2">
                            <img class="wow fadeInRight" data-wow-delay=".7s"
                                src="{{ asset('front/assets/images/shapes/shape_4.svg') }}"
                                alt="Dakamak Illustration Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="deco_item color_shadow_1">
            <img src="{{ asset('front/assets/images/shapes/shape_circle_2.svg') }}" alt="Dakamak Illustration Image">
        </div>
        <div class="deco_item color_shadow_2">
            <img src="{{ asset('front/assets/images/shapes/shape_circle_2.svg') }}" alt="Dakamak Illustration Image">
        </div>
        <div class="deco_item color_shadow_3">
            <img src="{{ asset('front/assets/images/shapes/shape_circle_3.svg') }}" alt="Dakamak Illustration Image">
        </div>
    </section>
    <!-- Hero Banner Section - End
                                                                        ================================================== -->

    <!-- About Section - Start
                                                 
                                                                        ================================================== -->
    <section class="about_section section_space_lg decoration_wrap bg_light_3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-lg-6">
                    <div class="about_image_2 decoration_wrap">
                        <div class="image_wrap">
                            <img src="{{ asset('storage/uploads/' . $staticContent->about_us_home_image) }}"
                                alt="Dakamak - About Image">
                        </div>
                        <div class="deco_item bg_image">
                            <img src="{{ asset('front/assets/images/about/about_image_6.jpg') }}"
                                alt="Dakamak - Shape Image">
                        </div>
                        <div class="deco_item shape_3">
                            <img data-parallax='{"y" : 100, "smoothness": 20}'
                                src="{{ asset('front/assets/images/shapes/shape_4.svg') }}" alt="Dakamak - Shape Image">
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6">
                    <div class="about_content">
                        <div class="section_heading style_3">
                            <h2 class="heading_subtitle">
                                <span>About Us</span>
                            </h2>
                            <h3 class="heading_title">
                                {{ $staticContent->about_us_title }}
                            </h3>
                            <p class="heading_description mb-0">
                                {{ $staticContent->about_us_content_text }}
                            </p>
                        </div>
                        <div class="btn_wrap pb-0">
                            <a class="btn btn-primary" href="{{ route_text('about') }}">

                                <span class="btn_text">
                                    <small>Know More</small>
                                    <small>Know More</small>
                                </span>
                                <span class="btn_icon">
                                    <img src="{{ asset('front/assets/images/icons/icon_arrow_down_right_white.svg') }}"
                                        alt="Dakamak - Icon Arrow Down Right">
                                    <img src="{{ asset('front/assets/images/icons/icon_arrow_down_right_white.svg') }}"
                                        alt="Dakamak - Icon Arrow Down Right">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="deco_item shape_4">
            <img src="{{ asset('front/assets/images/shapes/shape_circle_2.svg') }}" alt="Dakamak - Shape Image">
        </div>
        <div class="deco_item shape_5">
            <img src="{{ asset('front/assets/images/shapes/shape_circle_3.svg') }}" alt="Dakamak - Shape Image">
        </div>
        <div class="deco_dot"></div>
    </section>
    <!-- About Section - End
                                                                        ================================================== -->

    <!-- Service Section - Start
                                                                        ================================================== -->
    <section class="service_section section_space_lg bg_primary mb-">
        <div class="container decoration_wrap">
            <div class="section_heading style_3 text-center text-white">
                <h2 class="heading_subtitle">
                    <span>Our Service</span>
                </h2>
                <h3 class="heading_title mb-0">
                    Providing Solutions
                </h3>
            </div>
            <div class="row service_items_grouped">
                @foreach ($ourservice_items as $ourservice_item)
                    <div class="col col-lg-4 col-md-6 col-sm-6">
                        <div class="service_item style_4">
                            <div class="item_icon">
                                <img src="{{ asset('storage/uploads/' . $ourservice_item->item_icon) }}"
                                    alt="{{ $ourservice_item->desription }}" />
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    {{ edit_service_text($ourservice_item->title) }}
                                </h3>
                            </div>
                            <a class="item_details_btn" href="service_details.html">
                                <span class="btn_icon">
                                    <img src="{{ asset('front/assets/images/icons/icon_arrow_down_right_white.svg') }}"
                                        alt="Dakamak icons">
                                </span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="deco_item shape_1">
                <img data-parallax='{"y" : 200, "smoothness": 20}'
                    src="{{ asset('front/assets/images/shapes/shape_4.svg') }}" alt="Dakamak - Shape Image">
            </div>
            <div class="deco_item shape_2">
                <img data-parallax='{"y" : -200, "smoothness": 20}'
                    src="{{ asset('front/assets/images/shapes/shape_line_3.svg') }}" alt="Dakamak - Shape Image">
            </div>
        </div>
    </section>
    <!-- Service Section - End
                                                                        ================================================== -->
@stop
