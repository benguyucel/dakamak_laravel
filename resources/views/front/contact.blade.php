@extends('front.layouts.master')

@section('title', __('Dakamak Contact'))
@section('content')
    <!-- Page Section - Start
                        ================================================== -->
    <section class="page_banner text-center">
        <div class="container decoration_wrap">
            <h1 class="page_title">{{ __('contact_us') }}</h1>
            <ul class="breadcrumb_nav unordered_list_center">
                <li>
                   <a href="{{ route_text('') }}">Home</a>
                </li>
                <li>
                    {!! __('contact_us') !!}
                </li>
            </ul>

            <div class="deco_item shape_1 wow fadeInUp" data-wow-delay=".1s">
                <img src="{{ asset('front/assets/images/shapes/shape_circle_1.svg') }}"
                    data-parallax='{"y" : -140, "smoothness": 10}' alt="Paradox - Shape Image">
            </div>
            <div class="deco_item shape_2 wow rotateInDownRight" data-wow-delay=".1s">
                <img src="{{ asset('front/assets/images/shapes/shape_circle_half_1.svg') }}"
                    data-parallax='{"y" : 200, "smoothness": 10}' alt="Paradox - Shape Image">
            </div>
            <div class="deco_item shape_3 wow fadeInDown">
                <img src="{{ asset('front/assets/images/shapes/shape_1.svg') }}"
                    data-parallax='{"x" : -200, "smoothness": 10}' alt="Paradox - Shape Image">
            </div>
        </div>
    </section>
    <!-- Page Section - End
                          ================================================== -->

    <!-- Contact Section - Start
                          ================================================== -->
    <section class="contact_section section_space_lg">
        <div class="container">
            <div class="section_heading">
                <h2 class="heading_subtitle text-uppercase">
                    <span class="double_icon">
                        <i class="fas fa-sharp fa-square-full"></i>
                        <i class="fas fa-sharp fa-square-full"></i>
                    </span>
                    <span>{{ __('contact_us') }}</span>
                </h2>
                <h3 class="heading_title mb-0">
                    {{ __('contact_us.free') }}
                </h3>
            </div>

            <div class="row">
                <div class="col col-lg-6">
                    <div class="contact_form">
                        <form action="#">
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="form-group m-0">
                                        <input class="form-control" type="text" name="firstname"
                                            placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="form-group m-0">
                                        <input class="form-control" type="text" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="form-group m-0">
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="select_option m-0">
                                        <select>
                                            <option data-display="Subject">Select Subject</option>
                                            <option value="development">Website Development</option>
                                            <option value="design">UX/UI Design</option>
                                            <option value="development">App Development</option>
                                            <option value="editing">Video Editing</option>
                                            <option value="programming">Programming & Tech</option>
                                            <option value="business">Business Consuting</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Write your Message"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        <span class="btn_text">
                                            <small>Send Now</small>
                                            <small>Send Now</small>
                                        </span>
                                        <span class="btn_icon">
                                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.10848 0.835365L8.89399 8.62098L8.89498 3.04783L10.3843 3.04783L10.3843 11.1643L2.26783 11.1643L2.26783 9.67498L7.84087 9.6741L0.0553647 1.88848L1.10848 0.835365Z"
                                                    fill="white" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-lg-6">
                    <ul class="contact_info_list style_2 ps-lg-4 unordered_list_block">
                        <li>
                            <strong>Loaction:</strong>
                            <span>1989 Timber Ridge Road Sacramento CA, California</span>
                        </li>
                        <li>
                            <strong>Phone:</strong>
                            <span>+1-202-555-0149</span>
                        </li>
                        <li>
                            <strong>Email:</strong>
                            <span>contact@paradox.com</span>
                        </li>
                        <li>
                            <strong>Follow Us:</strong>
                            <ul class="social_icon unordered_list">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section - End
                          ================================================== -->

@stop
