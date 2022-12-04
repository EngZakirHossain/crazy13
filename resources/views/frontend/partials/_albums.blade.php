@php
    $photos = \App\Models\Gallery::latest()->take(17)->get();
@endphp

<!--==============================-->
<!--=        	Latest album         =-->
<!--==============================-->
<section class="three-d-album">
    <div class="section-title style-four">
        <h2>TRENDING ALBUMS</h2>
        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some injected humour.</p>
    </div>
    <div class="more-album">


        <a href="{{route('frontend.memory')}}">SEE ALL ALBUMS<i class="fa fa-play" aria-hidden="true"></i></a>

    </div>
    <div class="three-d-album-width">
        <div class="row">

            <div class="threed-container-wrapper">
                <div class="threed-container-inner">
                    <div class="single-3d empty-space">
                    </div>
                    @foreach($photos as $photo)
                    <div class="single-3d">
                        <a href="#"><img src="{{ asset('photo/gallery') }}/{{$photo->filename}}" alt=""></a>
                    </div>
                    @endforeach
                    <div class="single-3d  empty-space">
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- /.tim-container -->
</section>
<!-- /#about -->
