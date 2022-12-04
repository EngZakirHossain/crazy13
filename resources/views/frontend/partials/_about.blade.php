@php
    $members = \App\Models\Member::all();
@endphp

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
                @foreach($members as $member)
                <li class="artist-single clearfix swiper-slide">
                    <img src="{{ asset('/photo/members_photos/') }}/{{$member->photo}}" alt="">
                    <div class="artist-single-content">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                        <h6>{{$member->name}}</h6>
                        <p>{{$member->designation}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <!-- /.tim-container -->
</section>
<!-- /#about -->
