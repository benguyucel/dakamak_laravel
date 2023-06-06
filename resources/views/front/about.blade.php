@extends('front.layouts.master')

@section('title', __('Dakamak Contact'))
@section('content')
    <!-- Page Section - Start
                                                            ================================================== -->
    <section class="page_banner text-center">
        <div class="container decoration_wrap">
            <h1 class="page_title">About Us</h1>
            <ul class="breadcrumb_nav unordered_list_center">
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul>

            {{-- <div class="deco_item shape_1 wow fadeInUp" data-wow-delay=".1s">
                <img src="assets/images/shapes/shape_circle_1.svg" data-parallax='{"y" : -140, "smoothness": 10}'
                    alt="Dakamak - Shape Image">
            </div>
            <div class="deco_item shape_2 wow rotateInDownRight" data-wow-delay=".1s">
                <img src="assets/images/shapes/shape_circle_half_1.svg" data-parallax='{"y" : 200, "smoothness": 10}'
                    alt="Dakamak - Shape Image">
            </div>
            <div class="deco_item shape_3 wow fadeInDown">
                <img src="assets/images/shapes/shape_1.svg" data-parallax='{"x" : -200, "smoothness": 10}'
                    alt="Dakamak - Shape Image">
            </div> --}}
        </div>
    </section>
    <!-- Page Section - End
                                                              ================================================== -->

    <!-- About Section - Start
                                                              ================================================== -->
    <section class="about_section section_space_lg pb-0 decoration_wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-lg-6">
                    <div class="about_image decoration_wrap mb-4 mb-lg-0 text-center">

                        <img src="{{ asset('storage/uploads/' . $staticContent->about_us_home_image) }}"
                            alt="Dakamak - About Image" />

                        <div class="deco_item shape_1">
                            <img class="wow zoomIn" data-wow-delay=".1s"
                                src="{{ asset('front/assets/images/shapes/shape_circle_2.svg') }}"
                                alt="Dakamak
                                - Shape Image">
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6">
                    <div class="about_content">
                        <div class="section_heading mb-0">
                            <h2 class="heading_subtitle text-uppercase">
                                <span class="double_icon">
                                    <i class="fas fa-sharp fa-square-full"></i>
                                    <i class="fas fa-sharp fa-square-full"></i>
                                </span>
                                <span>About US</span>
                            </h2>
                            <h3 class="heading_title">
                                {{ $staticContent->about_us_title }}
                            </h3>
                            <p class="heading_description">
                                {{ $staticContent->about_us_content_text }}
                            </p>
                            <p></p>
                        </div>
                        <hr>

                        <div class="btn_wrap">
                            <a class="btn btn-primary" href="{{ route_text('contact') }}">
                                <span class="btn_text">
                                    <small>Get a Quotes</small>
                                    <small>Get a Quotes</small>
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
    </section>
    <!-- About Section - End
                                                              ================================================== -->
    <section class="details_section service_details section_space_lg position-relative">

        <div class="container" style="margin-top: 150px">
            <div class="row">
                <div class="col col-lg-4">
                    <div class="details_sectio_content mb-4 mb-lg-0">
                        <div class="section_heading">
                            <h2 class="heading_title mb-0">
                                Our services
                                added Best values
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-8">
                    <div class="row">
                        @foreach ($bestvalues as $bestvalue)
                            <div class="col col-md-6">
                                <div class="iconbox_item bg-white">
                                    <div class="item_icon">
                                        <img src="{{ asset('storage/uploads/bestvalue/' . $bestvalue->item_icon) }}"
                                            alt="Dakamak Icon Eye White">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">{{ $bestvalue->title }}</h3>
                                        <p class="mb-0">
                                        {{ $bestvalue->text }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach           
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
