@extends('layouts.frontend.frontend_app')
@section('frontend.content')

<!--====== Start breadcrumbs-section section ======-->
<section class="breadcrumbs-section bg_cover" style="background-image: url(assets/images/bg/breadcrumbs-bg.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumbs-content text-center">
                    <h1>MY ACCOUNT</h1>
                    <ul class="link">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Login/Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End breadcrumbs-section section ======-->
<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="row mt-4 text-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3 class="text-center">Login</h3>
                    <form action="">
                        @csrf
                        <div>
                            <input class="" type="text" class="form_control" placeholder="Your Name" name="name" required>

                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">

                </div>
            </div>
        </div>

    </div>
</div>


@endsection
