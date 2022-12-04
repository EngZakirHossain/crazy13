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
        <!--==================================-->
    </section>
    <!--=        	Tabs Single          =-->
    <!--==================================-->
    <section class="section-padding album-info-wrapper">
        <div class="container">
            <div class="row single-album-info">

                <div class="col-md-6 padding-remove">
                    <div class="single-album-image">
                        <img src="{{ asset('photo/members_photos') }}/{{$rollNoDetails->photo}}" alt="">
                    </div>
                </div>
                <!-- /.col-lg-6 -->

                <div class="col-md-6 padding-remove">
                    <div class="single-album-details">
                        <div class="details-top">
                            <h6>Life itself! The way</h6>
                            <p>Established fact that a reader will be distracted by readable content of a page when looking at its lay poin usin Ipsum is tmore-or-less.</p>
                        </div>

                        <ul>
                            <li>Name <span>{{$rollNoDetails->name}}</span></li>
                            <li>Email<span>{{$rollNoDetails->email}} </span></li>
                            <li>Phone  <span>{{$rollNoDetails->phone}}</span></li>
                            <li>Designation <span>{{$rollNoDetails->designation}}</span></li>

                        </ul>

                        <div class="single-album-description">
                            <h6>About Me</h6>
                            <p>{{$rollNoDetails->status}}</p>
                        </div>

                        <div class="single-album-price">

                            <a href="#">Call Now </a>
                        </div>

                    </div>
                </div>
                <!-- /.col-lg-6 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.tim-container-two -->
    </section>
    <!-- /.album-info  -->

@endsection
