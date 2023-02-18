@extends('layouts.frontend.frontend_app')
@section('about')
    current_page_item
@endsection
@section('frontend.content')
    <!--============================-->
    <!--=        	Banner         =-->
    <!--============================-->

    <section class="page-header event-header" data-bg-image="{{ asset('frontend_asset/assets/photo') }}/media/background/15.jpg">
        <div class="tim-container">
            <div class="live-ticket-count">
                <div class="countdown" data-count-year="2018" data-count-month="7" data-count-day="30">
                </div>
            </div>
            <!-- /.live-ticket-count -->

            <div class="page-header-title event-page-header text-center">
                <h2>RPMC  BATCH 13TH CRAZY 13</h2>
                <h3>24 - 25 DECEMBER, 2022</h3>
                <h4>Bhawal Resort & Spa Gazipur, Dhaka</h4>

                <a target="_blank" href="https://goo.gl/maps/HE5oBiy5hn3z5Uje8">Live Location</a>
            </div>

        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#page-header -->

    <!--===========================-->
    <!--=        	About         =-->
    <!--===========================-->

    <section id="event-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-thumb">
                        <img src="{{ asset('frontend_asset/assets/photo') }}/media/about/4.jpg" alt="Thumb">
                    </div>
                </div>
                <!-- /.col-lg-6 -->

                <div class="col-lg-6">
                    <div class="event-content">
                        <h2>
                            Optimization <span>Is Important</span><br> To <em>Business Succes.</em>
                        </h2>

                        <p>
                            There are many variations of passages th of Lorem Ipsum available but is a the majority have suffered alteration in some form, by injected humour believable dummy.
                        </p>

                        <div class="event-details">
                            <p><span>Date & Time:</span> December 24, 2022 At 8:00 Am To December 25, 2022 At 10:00 Am </p>

                            <p>
                                <span>Location:</span> Bhawal Resort & Spa Gazipur, Dhaka
                            </p>
                        </div>

                        <h4>Concert Introduction</h4>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but is the majoriyty have suffered the a alteration in some form, by injected a humour or randomised words which don't look even slightly an that is believable. There are many variations
                            of passages of Lorem Ipsum the a available, but the majority.
                        </p>

                        <a href="#" class="tim-btn">Call Now</a>

                    </div>
                    <!-- /.event-content -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.tim-container-two -->
    </section>


{{--    <!-- /#event-about -->--}}
{{--    <section id="event-schedule" class="clearfix">--}}

{{--        <div class="schedule-ticket">--}}
{{--            <img src="{{ asset('frontend_asset/assets/photo') }}/media/background/10.jpg" alt="thum">--}}

{{--            <div class="content">--}}
{{--                <p class="schedule-date">August 19, 2018 @ 11 - 30 am</p>--}}
{{--                <h3>--}}
{{--                    If You Can Drem It,<br> You Cane Live It--}}
{{--                </h3>--}}

{{--                <a href="#" class="tim-btn">Buy Ticket</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- /.schedule-ticket -->--}}

{{--        <div class="schedule clearfix">--}}
{{--            <div class="swiper-container" data-swiper-config='{"loop": true, "speed": 700, "autoplay": 3000, "slidesPerView": 4, "grabCursor": true,"breakpoints": { "1300": { "slidesPerView": 3 }, "767": { "slidesPerView": 2 }, "500": { "slidesPerView": 1 }}}'>--}}

{{--                <div class="swiper-wrapper">--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="schedule-item">--}}
{{--                            <div class="schedule-thumb">--}}
{{--                                <img src="{{ asset('frontend_asset/assets/photo') }}/media/schedule/1.jpg" alt="thumb">--}}
{{--                            </div>--}}

{{--                            <h4 class="sch-time">10 am - 11 am</h4>--}}

{{--                            <h3 class="band-name">Brand Name 2018</h3>--}}

{{--                            <p class="duration">Durations: 60, - Tracks: 5 songs</p>--}}
{{--                        </div>--}}
{{--                        <!-- /.schedule-item -->--}}
{{--                    </div>--}}
{{--                    <!-- /.col-lg-3 col-md-4 col-sm-6 -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="schedule-item">--}}
{{--                            <div class="schedule-thumb">--}}
{{--                                <img src="{{ asset('frontend_asset/assets/photo') }}/media/schedule/2.jpg" alt="thumb">--}}
{{--                            </div>--}}

{{--                            <h4 class="sch-time">10 am - 11 am</h4>--}}

{{--                            <h3 class="band-name">Brand Name 2018</h3>--}}

{{--                            <p class="duration">Durations: 60, - Tracks: 5 songs</p>--}}
{{--                        </div>--}}
{{--                        <!-- /.schedule-item -->--}}
{{--                    </div>--}}
{{--                    <!-- /.col-lg-3 col-md-4 col-sm-6 -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="schedule-item">--}}
{{--                            <div class="schedule-thumb">--}}
{{--                                <img src="{{ asset('frontend_asset/assets/photo') }}/media/schedule/3.jpg" alt="thumb">--}}
{{--                            </div>--}}

{{--                            <h4 class="sch-time">10 am - 11 am</h4>--}}

{{--                            <h3 class="band-name">Brand Name 2018</h3>--}}

{{--                            <p class="duration">Durations: 60, - Tracks: 5 songs</p>--}}
{{--                        </div>--}}
{{--                        <!-- /.schedule-item -->--}}
{{--                    </div>--}}
{{--                    <!-- /.col-lg-3 col-md-4 col-sm-6 -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="schedule-item">--}}
{{--                            <div class="schedule-thumb">--}}
{{--                                <img src="{{ asset('frontend_asset/assets/photo') }}/media/schedule/4.jpg" alt="thumb">--}}
{{--                            </div>--}}

{{--                            <h4 class="sch-time">10 am - 11 am</h4>--}}

{{--                            <h3 class="band-name">Brand Name 2018</h3>--}}

{{--                            <p class="duration">Durations: 60, - Tracks: 5 songs</p>--}}
{{--                        </div>--}}
{{--                        <!-- /.schedule-item -->--}}
{{--                    </div>--}}
{{--                    <!-- /.col-lg-3 col-md-4 col-sm-6 -->--}}

{{--                </div>--}}

{{--            </div>--}}
{{--            <!-- /.row -->--}}
{{--        </div>--}}
{{--        <!-- /.schedule -->--}}

{{--    </section>--}}
{{--    <!-- /#event-schedule -->--}}


@endsection
