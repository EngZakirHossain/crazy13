@extends('layouts.frontend.frontend_app')
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


    <!--==============================-->
    <!--=        	About Crazy 13         =-->
    <!--==============================-->
    <section class="section-padding-two artist-lineup">
        <div class="tim-container clearfix">
            <div class="row">
                <div class="section-title style-four">
                    <h2>About Crazy 13 </h2>
                    <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some injected humour.</p>
                </div>
            </div>
            <div class="swiper-container row" data-swiper-config='{ "loop": true, "prevButton":".swiper-button-prev", "nextButton": ".swiper-button-next", "speed": 700, "autoplay": "5000", "slidesPerView": 6, "spaceBetween": 0, "grabCursor": true,"breakpoints": { "1300": { "slidesPerView": 4 }, "767": { "slidesPerView": 3 }, "500": { "slidesPerView": 1 }}}'>
                <ul class="artist-line-wrapper swiper-wrapper">
                    <li class="artist-single clearfix swiper-slide">
                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/artist/a1.jpg" alt="">
                        <div class="artist-single-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                            <h6>James Hetfield</h6>
                            <p>Band: Metallica</p>
                        </div>
                    </li>

                    <li class="artist-single clearfix swiper-slide">
                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/artist/a2.jpg" alt="">
                        <div class="artist-single-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                            <h6>James Hetfield</h6>
                            <p>Band: Metallica</p>
                        </div>
                    </li>

                    <li class="artist-single clearfix swiper-slide">
                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/artist/a3.jpg" alt="">
                        <div class="artist-single-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                            <h6>James Hetfield</h6>
                            <p>Band: Metallica</p>
                        </div>
                    </li>

                    <li class="artist-single clearfix swiper-slide">
                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/artist/a4.jpg" alt="">
                        <div class="artist-single-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                            <h6>James Hetfield</h6>
                            <p>Band: Metallica</p>
                        </div>
                    </li>
                    <li class="artist-single clearfix swiper-slide">
                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/artist/a1.jpg" alt="">
                        <div class="artist-single-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                            <h6>James Hetfield</h6>
                            <p>Band: Metallica</p>
                        </div>
                    </li>

                    <li class="artist-single clearfix swiper-slide">
                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/artist/a2.jpg" alt="">
                        <div class="artist-single-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                            <h6>James Hetfield</h6>
                            <p>Band: Metallica</p>
                        </div>
                    </li>

                    <li class="artist-single clearfix swiper-slide">
                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/artist/a3.jpg" alt="">
                        <div class="artist-single-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                            <h6>James Hetfield</h6>
                            <p>Band: Metallica</p>
                        </div>
                    </li>

                    <li class="artist-single clearfix swiper-slide">
                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/artist/a4.jpg" alt="">
                        <div class="artist-single-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                            <h6>James Hetfield</h6>
                            <p>Band: Metallica</p>
                        </div>
                    </li>
                </ul>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#about -->


    <!--==============================-->
    <!--=        	Latest release         =-->
    <!--==============================-->
    <section class="section-padding latest-relese">
        <div class="container">
            <div class="row">
                <div class="section-title style-four">
                    <h2>LATEST RELEASE</h2>
                    <p>Words cannot express my deepest sympathy for you my friend. I do ask God to comfort you during this time of pain and sorrow. I also ask God to keep his Angels of Mercy around you and to give you peace while he takes you through your next journey.</p>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-xl-10" id="moving-player">
                        <div class="row">
                            <div class="col-sm-8 col-md-9 col-lg-8">
                                <div class="latest-album-left">
                                    <div class="cover-img">
                                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/album/cover.jpg" alt="">
                                    </div>
                                    <div class="albun-details">
                                        <h6>[ Full Name]</h6>
                                        <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                                        <h6>1965 - [DOB]</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-9 col-lg-8">
                                <div class="latest-album-left">
                                    <div class="cover-img">
                                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/album/cover.jpg" alt="">
                                    </div>
                                    <div class="albun-details">
                                        <h6>[ Full Name]</h6>
                                        <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                                        <h6>1965 - [DOB]</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="record-player">
                                    <div class="player-main">
                                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/background/wemourn.png" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.latest-album-info -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#about -->



    <!--==============================-->
    <!--=        	Latest album         =-->
    <!--==============================-->
    <section class="three-d-album">
        <div class="section-title style-four">
            <h2>TRENDING ALBUMS</h2>
            <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some injected humour.</p>
        </div>
        <div class="more-album">


            <a href="#">SEE ALL ALBUMS<i class="fa fa-play" aria-hidden="true"></i></a>

        </div>
        <div class="three-d-album-width">
            <div class="row">

                <div class="threed-container-wrapper">
                    <div class="threed-container-inner">
                        <div class="single-3d empty-space">
                        </div>
                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/1.png" alt=""></a>
                        </div>
                        <div class="single-3d  empty-space">

                        </div>
                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/2.png" alt=""></a>
                        </div>
                        <div class="single-3d  empty-space">
                        </div>
                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/3.png" alt=""></a>
                        </div>
                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/4.png" alt=""></a>
                        </div>
                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/5.png" alt=""></a>
                        </div>
                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/6.png" alt=""></a>
                        </div>
                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/7.png" alt=""></a>
                        </div>

                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/8.png" alt=""></a>
                        </div>
                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/13.png" alt=""></a>
                        </div>
                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/10.png" alt=""></a>
                        </div>
                        <div class="single-3d  empty-space">
                        </div>
                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/11.png" alt=""></a>
                        </div>
                        <div class="single-3d  empty-space">
                        </div>
                        <div class="single-3d">
                            <a href="#"><img src="{{ asset('frontend_asset/assets/photo') }}/media/albumart/12.png" alt=""></a>
                        </div>

                        <div class="single-3d  empty-space">
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#about -->



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
