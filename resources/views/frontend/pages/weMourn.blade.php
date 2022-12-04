@extends('layouts.frontend.frontend_app')
@section('weMourn')
    current_page_item
@endsection
@section('frontend.content')
    <section class="section-padding latest-relese">
        <div class="container">
            <div class="row">
                <div class="section-title style-four">
                    <h2>আমরা শুকাহত </h2>
                    <p>Words cannot express my deepest sympathy for you my friend. I do ask God to comfort you during this time of pain and sorrow. I also ask God to keep his Angels of Mercy around you and to give you peace while he takes you through your next journey.</p>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-xl-10" id="moving-player">
                        <div class="row">
                            <div class="col-sm-12 col-md-9 col-lg-12">
                                <div class="latest-album-left">
                                    <div class="albun-details">
                                        <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                                        <br><p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                                        <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
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
    <section id="album">
        <div class="tim-container d-flex justify-content-center">
            <div class="col-xl-10">

                <div class="tim-isotope tim-isotope-1 wow fadeInUp" data-wow-delay="0.8s">
                    <ul class="tim-filter-items tim-album-items grid">
                        <li class="grid-sizer"></li>
                        @foreach($passedMembers as $member)
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
@endsection
