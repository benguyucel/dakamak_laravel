 <!-- Site Footer - Start
      ================================================== -->
 <footer class="site_footer style_4 mt-5 pt-5">
     <div class="calltoaction_section style_5">
         <div class="container">
             <div class="content_box bg_primary decoration_wrap">
                 <div class="row align-items-center">
                     <div class="col col-xxl-5 col-xl-6 col-lg-6 order-lg-last">
                         <div class="cta_image mb-4 mb-lg-0">
                             <img src="{{ asset('storage/uploads/' . $staticContent->tagline_image) }}"
                                 alt="Dakamak Call To Action Image">
                         </div>
                     </div>
                     <div class="col col-xxl-7 col-xl-6 col-lg-6">
                         <div class="section_heading text-white">
                             <h2 class="heading_title mb-0">
                                {{ $staticContent->bottom_tagline_text }}
                             </h2>
                         </div>
                         <a class="btn btn-warning" href="{{ route_text('contact') }}">
                             <span class="btn_text">
                                 <small>Get Started</small>
                                 <small>Get Started</small>
                             </span>
                             <span class="btn_icon">
                                 <img src="{{ asset('front/assets/images/icons/icon_arrow_down_right_dark.svg') }}"
                                     alt="Dakamak - Icon Arrow Down Right">
                                 <img src="{{ asset('front/assets/images/icons/icon_arrow_down_right_dark.svg') }}"
                                     alt="Dakamak - Icon Arrow Down Right">
                             </span>
                         </a>
                     </div>
                 </div>
                 <div class="deco_item shape_1">
                     <img class="wow fadeInUp" data-wow-delay=".2s"
                         src="{{ asset('front/assets/images/shapes/shape_4.svg') }}" alt="Dakamak Illustration Image">
                 </div>
             </div>
         </div>
     </div>
     <div class="footer_widget_area">
         <div class="container">
             <div class="row">
                 <div class="col col-lg-3 col-md-6">
                     <div class="site_logo">
                         <a class="site_link" href="index.html">
                             <img src="{{ asset('storage/uploads/' . $generalSetting->logo) }}" alt="dakamak logo" />
                         </a>
                     </div>
                 </div>
                 <div class="col col-lg-3 col-md-6">
                     <div class="footer_widget">
                         <h3 class="footer_widget_title">Contact Us</h3>
                         <div class="icon_list_widget">
                             <h4 class="widget_title mb-0">
                                 If you want to Get a New Idea:
                             </h4>
                             <ul class="icon_list unordered_list_block">
                                 <li>
                                     <a href="mailto:{{ $generalSetting->mail_address }}">
                                         <span class="list_item_text">
                                             {{ $generalSetting->mail_address }}
                                         </span>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col col-lg-3 col-md-6">
                     <div class="footer_widget">
                         <h3 class="footer_widget_title">Find Us</h3>
                         <div class="icon_list_widget">
                             <ul class="icon_list unordered_list_block">
                                 <li>
                                     <a href="mailto:contact@paradox.com">
                                         <span class="d-block mb-2">
                                             <img src="{{ asset('front/assets/images/icons/icon_mapmark.svg') }}"
                                                 alt="Icon Mapmark">
                                         </span>
                                         <span class="list_item_text">
                                             Bursa Uludağ Üniversitesi Görükle Kampüsü Üniversite 1. cad. No: 933
                                         </span>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 {{-- <div class="col col-lg-3 col-md-6">
                     <div style="position:relative;overflow:hidden;">
                         <a href="https://yandex.com.tr/harita/106076/nilufer/?utm_medium=mapframe&utm_source=maps"
                             style="color:#eee;font-size:12px;position:absolute;top:0px;">Nilüfer</a><a
                             href="https://yandex.com.tr/harita/106076/nilufer/house/universite_1_cad_933/ZkEYfgJnQE0EQFpqfX5zc3pjZg==/?ll=28.857983%2C40.222602&utm_medium=mapframe&utm_source=maps&z=16"
                             style="color:#eee;font-size:12px;position:absolute;top:14px;">Nilüfer haritasında
                             Üniversite-1. Cad., No:933. — Yandex Haritalar</a><iframe
                             src="https://yandex.com.tr/map-widget/v1/?ll=28.857983%2C40.222602&mode=whatshere&whatshere%5Bpoint%5D=28.857983%2C40.222602&whatshere%5Bzoom%5D=17&z=16"
                             width="300" height="auto" frameborder="1" allowfullscreen="true"
                             style="position:relative;"></iframe>
                     </div>
                 </div> --}}
             </div>
         </div>
     </div>
     <div class="footer_bottom">
         <div class="container">
             <div class="footer_bottom_grid">
                 <div class="copyright_widget">
                     Copyright © {{ $generalSetting->date }} by <a href="{{ route_text('') }}"><u>Dakamak</u></a> All
                     Rights
                     Reserved.
                 </div>
                 <div class="backtotop style_1">
                     <a href="#" class="scroll">
                         <i class="fal fa-chevron-up"></i>
                     </a>
                 </div>
                 <div class="footer_social">
                     <ul class="social_icon unordered_list_end">
                         @foreach ($generalSetting->socials as $social)
                             <li><a href="{{ $social->link }}"><i class="{{ $social->name }}"></i></a></li>
                         @endforeach
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- Site Footer - End
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
 <script src="{{ asset('front/assets/js/custom.js') }}"></script>

 </body>

 </html>
