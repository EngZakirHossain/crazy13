@extends('layouts.frontend.frontend_app')
@section('home')
    current_page_item
@endsection
@section('frontend.content')
    <!--============================-->
    <!--=        	Banner         =-->
    <!--============================-->
    <section class="banner-five" data-bg-image="{{ asset('frontend_asset/assets/photo') }}/media/background/rangpur-medical-college.png">
        <div class="tim-container">
            <div id="para" class="paralax">
                <div id="paralax-1" class="scene">
                    <div data-depth="-0.50"><img src="javascript:void(0);" alt=""></div>
                </div>
            </div>
            <div class="baneer-five-content">
                <div class="content sp-container">
                    <div class="sp-content">
                        <div class="sp-globe"></div>
                        <h2 class="frame-1">GET</h2>
                        <h2 class="frame-2">READY</h2>
                        <h2 class="frame-3">FOR</h2>
                        <h2 class="frame-4">CREAZY 13</h2>

                    </div>
                    <h3>Bhawal Resort & Spa </br> December 24-25, 2022</h3>
                </div>
            </div>
            <!-- /.tim-container -->
        </div>
        <!-- /.tim-container -->

        <div class="smoke-wrqpper">
            <canvas id="canvas"></canvas>
        </div>

    </section>  <!-- /#page-header -->

{{--    //about section--}}
    @include('frontend.partials._about')

    {{--    //memory section--}}
    @include('frontend.partials._memory')

    @include('frontend.partials._albums')




    <!-- /#about -->

    <!--==============================-->
    <!--=        	Show ticket        =-->
    <!--==============================-->
    <section class="section-padding show-archive">
        <div class="container">
            <div class="d-flex justify-content-center row">
                <div class="col-xl-10">
                    <div class="section-title style-four">
                        <h2>UPCOMING Event</h2>
                    </div>
                    <div class="single-show-ticket row no-guters">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="date-time">
                                <h6>24</h6>
                                <p>December, 2022</p>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-7">
                            <h5>Bhawal Resort & Spa</h5>
                            <p>Gazipur,Dhaka, Bangladesh</p>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-2">
                            <div class="a_hover">
                                <a target="_blank" href="https://goo.gl/maps/HE5oBiy5hn3z5Uje8">Live Location</a>
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round_black.svg" alt="">
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round.svg" alt="">
                                <i class="fa fa-play" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                    <div class="single-show-ticket row no-guters">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="date-time">
                                <h6>25</h6>
                                <p>December, 2022</p>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-7">
                            <h5>Bhawal Resort & Spa</h5>
                            <p>Gazipur,Dhaka, Bangladesh</p>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-2">
                            <div class="a_hover">
                                <a target="_blank" href="https://goo.gl/maps/HE5oBiy5hn3z5Uje8">Live Location</a>
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round_black.svg" alt="">
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round.svg" alt="">
                                <i class="fa fa-play" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.latest-album-info -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.show-archive -->



    <!--======================================-->
    <!--=        	Partners        	         =-->
    <!--======================================-->
    <section class="partners-area">
        <div class="container">
            <div class="d-flex justify-content-center row">
                <div class="col-xl-10">

                    <div class="row">
                        <div class=" col-md-5">
                            <div class="section-title style-five float-left">
                                <h2>OUR SPONSORS</h2>
                                <p>There are many variations of passages of Lorem Ipsum available but the majority. We are proud there are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                        </div>
                        <div class=" col-md-7">
                            <div class="partner-swipper swiper-container row" data-swiper-config='{ "loop": true, "prevButton":".swiper-button-prev", "nextButton": ".swiper-button-next", "speed": 700, "autoplay": false, "slidesPerView": 4, "spaceBetween": 0, "grabCursor": true,"breakpoints": { "991": { "slidesPerView": 2 }, "767": { "slidesPerView": 3 }, "500": { "slidesPerView": 2 }}}'>
                                <ul class="artist-line-wrapper swiper-wrapper">
                                    <li class="clearfix swiper-slide">
                                        <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/logo/21.png" alt=""></a>

                                    </li>

                                    <li class="clearfix swiper-slide">
                                        <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/logo/22.png" alt=""></a>

                                    </li>

                                    <li class=" clearfix swiper-slide">
                                        <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/logo/23.png" alt=""></a>

                                    </li>

                                    <li class="clearfix swiper-slide">
                                        <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/logo/24.png" alt=""></a>

                                    </li>
                                </ul>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>

                        </div>
                        <!-- /.col-xl-4 -->


                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-xl- -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>



@endsection
