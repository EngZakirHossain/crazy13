@extends('layouts.frontend.frontend_app')
@section('memory')
    current_page_item
@endsection
@section('frontend.content')
    <!--============================-->
    <!--=        	Banner         =-->
    <!--============================-->

    <section class="page-header" data-bg-image="{{ asset('frontend_asset/assets/photo') }}/media/background/15.jpg">
        <div class="tim-container">
            <div class="page-header-title text-center">
                <h3>Crazy 13 </h3>
                <h2>& Gallery</h2>
            </div>

        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#page-header -->

    <!--===========================-->
    <!--=        	About         =-->
    <!--===========================-->

    <section id="gallery" class="section-padding">
        <div class="tim-container">
            <div class="section-title text-center">
                <h2>Memory <span>Gallery</span></h2>
            </div>
        </div>
        <!-- /.tim-container -->


            <div class="tim-container d-flex justify-content-center">
                <div class="col-xl-10">
                    <div class="tim-isotope tim-isotope-2 wow fadeInUp" data-wow-delay="0.8s">
                        <ul class="tim-filter-items tim-album-items grid">
                            <li class="grid-sizer"></li>
                            @foreach($photos as $photo)
                            <li class="tim-album-item grid-item bass piano guiter">
                                <img src="{{ asset('photo/gallery') }}/{{$photo->filename}}" alt="album thumb" />
                                <a class="popup-modal" href="{{ asset('photo/gallery') }}/{{$photo->filename}}">
                                    <div class="tim-isotope-grid__img effect-active">
                                        <img src="{{ asset('photo/gallery') }}/{{$photo->filename}}" alt="album thumb" />
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        <!-- /.tim-container -->
    </section>
    <!-- /#gallery -->
@endsection
