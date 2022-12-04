@extends('layouts.frontend.frontend_app')
@section('home')
    current_page_item
@endsection
@section('frontend.content')
    <!--============================-->
    <!--=        	Banner         =-->
    <!--============================-->
    <section class="banner-five" data-bg-image="{{ asset('frontend_asset/assets/photo') }}/media/background/rangpur-medical-college.jpg">
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


    <!--==============================-->
    <!--=        	Show schedule        =-->
    <!--==============================-->
    <section class="show-archive">
        <div class="container">
            <div class="d-flex justify-content-center row">
                <div class="col-xl-10">
                    <div class="section-title style-five">
                        <h2>PREVIOUS SHOWS</h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority.</p>
                    </div>
                    <div class="show-archive-wrapper row no-gutters">
                        <div class="offset-xs-0 offset-sm-4 col-sm-4 col-6">
                            <div class="single-show-archive">
                                <img src="{{ asset('frontend_asset/assets/photo') }}/media/album/18.jpg" alt="">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="single-show-archive">
                                <img src="{{ asset('frontend_asset/assets/photo') }}/media/album/19.jpg" alt="">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <div class="single-show-archive video-archive">
                                <img src="{{ asset('frontend_asset/assets/photo') }}/media/album/20.jpg" alt="">
                                <div class="video-player">
                                    <a href="https://www.youtube.com/watch?v=0I8GmbDU7c4" class="video-btn-three popup-video-btn">
                                        <i class="fa fa-play"></i>
                                    </a>
                                    <div class="video-btn-shade">
                                        <i class="fa fa-play"></i>
                                    </div>
                                    <div class="text">
                                        <p>Show Stoppers Time</p>
                                        <span>(Live in Tokyo, 2017)</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="single-show-archive">
                                <img src="{{ asset('frontend_asset/assets/photo') }}/media/album/21.jpg" alt="">
                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-xl -->
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /#about -->

    <!--==============================-->
    <!--=        	Show ticket        =-->
    <!--==============================-->
    <section class="section-padding show-archive">
        <div class="container">
            <div class="d-flex justify-content-center row">
                <div class="col-xl-10">
                    <div class="section-title style-four">
                        <h2>UPCOMING SHOWS</h2>
                    </div>
                    <div class="single-show-ticket row no-guters">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="date-time">
                                <h6>15</h6>
                                <p>December, 2018</p>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-7">
                            <h5>Dream Theatre (Live in London)</h5>
                            <p>23 Lee Rd, Blackheath, London SE3 9RQ, UK</p>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-2">
                            <div class="a_hover">
                                <a href="#">TICKETS</a>
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round_black.svg" alt="">
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round.svg" alt="">
                                <i class="fa fa-play" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                    <div class="single-show-ticket row no-guters">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="date-time">
                                <h6>15</h6>
                                <p>January, 2018</p>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-7">
                            <h5>Maroon 5 - NEWBO EVOLVE FESTIVAL</h5>
                            <p>CEDAR RAPIDS, IA</p>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-2">
                            <div class="a_hover">
                                <a href="#">TICKETS</a>
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round_black.svg" alt="">
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round.svg" alt="">
                                <i class="fa fa-play" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                    <div class="single-show-ticket row no-guters">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="date-time">
                                <h6>11</h6>
                                <p>July, 2018</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-7">
                            <h5>Red Hot Chilli Peppers</h5>
                            <p>PARQUE FUNDIDORA, MONTERRY, MEXICO</p>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-2">
                            <div class="a_hover">
                                <a href="#">RSVP</a>
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round_black.svg" alt="">
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round.svg" alt="">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-show-ticket row no-guters">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="date-time">
                                <h6>10</h6>
                                <p>January, 2018</p>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-7">
                            <h5>SYMPHONY X</h5>
                            <p>UNITED CENTER, CHICAGO, IL</p>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-2">
                            <div class="a_hover">
                                <a href="#">TICKETS</a>
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round_black.svg" alt="">
                                <img class="svg" src="{{ asset('frontend_asset/assets/photo') }}/media/background/round.svg" alt="">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="single-show-ticket row no-guters">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="date-time">
                                <h6>27</h6>
                                <p>November, 2018</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-7">
                            <h5>NIRVANA</h5>
                            <p>BRIDGESTONE ARENA, NASHVILLE, TN</p>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-2">
                            <div class="a_hover">
                                <a href="#">TICKETS</a>
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


    <!--============================-->
    <!--=        	Spotlight          =-->
    <!--============================-->
    <section class="section-padding-two wide_line_bg">
        <div class="container">
            <div class="d-flex justify-content-center row">
                <div class="col-xl-10">
                    <div class="section-title style-five">
                        <h2>SPOTLIGHT</h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority.</p>
                    </div>
                    <div class="row">
                        <div class="grid-60">
                            <div class="spotlight-inner">
                                <img src="{{ asset('frontend_asset/assets/photo') }}/media/performance/vid-1.jpg" alt="">
                                <div class="video-player-three">
                                    <a href="https://www.youtube.com/watch?v=0I8GmbDU7c4" class="video-btn-four popup-video-btn">
                                        <i class="fa fa-play"></i>
                                    </a>
                                    <div class="video-btn-shade">
                                        <i class="fa fa-play"></i>
                                    </div>
                                    <div class="text">
                                        <p>Show Stoppers Time</p>
                                        <span>(Live in Tokyo, 2017)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-xl-8 -->
                        <div class="grid-40">
                            <div class="subscribe-two">
                                <div class="section-title style-five">
                                    <h2>SUBSCRIBE</h2>
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority.</p>
                                </div>
                                <form action="#">
                                    <input placeholder="Enter Your Email" type="text">
                                    <button type="submit" class="submit">send me</button>
                                </form>
                            </div>
                            <!-- /.subscribe-two -->
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
    <!-- /#about -->



    <!--======================================-->
    <!--=        	Store        	         =-->
    <!--======================================-->
    <section class="section-padding-two brand-shoparea">
        <div class="container">
            <div class="d-flex justify-content-center row">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="grid-40">
                            <div class="section-title style-six">
                                <h2>BRAND SHOP</h2>
                            </div>
                            <div class="brand-shop-carousel">
                                <div class="swiper-container row" data-swiper-config='{ "loop": true, "paginationClickable" :true, "autoplay": 5000, "pagination": "store-pagination", "speed": 700, "effect": "slide", "slidesPerView": 1, "spaceBetween": 0, "grabCursor": true,"breakpoints": { "1300": { "slidesPerView": 1 }, "767": { "slidesPerView": 1 }, "500": { "slidesPerView": 1 }}}'>
                                    <ul class="product-five swiper-wrapper">
                                        <li class="product-single clearfix swiper-slide">
                                            <img src="{{ asset('frontend_asset/assets/photo') }}/media/product/51.jpg" alt="">
                                        </li>

                                        <li class="product-single clearfix swiper-slide">
                                            <img src="{{ asset('frontend_asset/assets/photo') }}/media/product/52.jpg" alt="">
                                        </li>

                                        <li class="product-single clearfix swiper-slide">
                                            <img src="{{ asset('frontend_asset/assets/photo') }}/media/product/53.jpg" alt="">
                                        </li>
                                    </ul>
                                    <div id="store-pagination" class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                        <span class="swiper-pagination-bullet"></span>
                                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                                        <span class="swiper-pagination-bullet"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.brand-shop-carousel -->
                        </div>
                        <!-- /.col-xl-4 -->
                        <div class="grid-60">
                            <div class="section-title style-six">
                                <h2>STORIES</h2>
                            </div>
                            <div class="soundcloud-wrapper">

                                <iframe allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/473962047&color=%23d6d6d6&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                                <h6>I am a blog post with an embeded soundcloud player. You can share a musician’s story here.</h6>
                                <footer>
                                    <a href="#">READ THIS STORY<i class="fa fa-play"></i></a>
                                    <p><span>Hits</span>- 12742</p>
                                </footer>
                            </div>
                        </div>
                        <!-- /.col-xl-8 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-xl- -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#about -->


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
    <!-- /#about -->



@endsection
