@extends('layouts.frontend.frontend_app')
@section('rollNo')
    current_page_item
@endsection
@section('frontend.content')
    <!--============================-->
    <!--=        	Banner         =-->
    <!--============================-->

    <section class="page-header" data-bg-image="{{ asset('frontend_asset/assets/photo') }}/media/background/8.jpg">
        <div class="tim-container">
            <div class="page-header-title text-center">
                <h3>Love of Life</h3>
                <h2>& Happiness</h2>
            </div>

        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#page-header -->

    <!--===========================-->
    <!--=        	About         =-->
    <!--===========================-->

    <section id="album">
        <div class="tim-container d-flex justify-content-center">
            <div class="col-xl-10">

                <div class="tim-isotope tim-isotope-1 wow fadeInUp" data-wow-delay="0.8s">
                    <ul class="tim-filter-items tim-album-items grid">
                        <li class="grid-sizer"></li>
                        @foreach($members as $member)
                        <li class="tim-album-item grid-item ui logo branding">
                            <div class="tim-isotope-grid__img effect-active">
                                <img src="{{ asset('photo/members_photos') }}/{{$member->photo}}" alt="album thumb" />
                            </div>
                            <div class="album_details_wrap">
                                <div class="album-info">
                                    <h4 class="album-title">{{$member->name}}</h4>
                                    <h5 class="artist-name">{{$member->designation}}</h5>
                                    <a href="{{route('frontend.rollNoDetails',[$member->id])}}" class="tim-btn tim-btn-bgt">Details</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#album -->
@endsection
