@extends('kelcom.user.video')



@section('title')
    Videos
@endsection


@section('content')
<div class="menu">
    <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/music">Music</a></li>
            <li><a href="/videos">Videos</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <div class="menu_extra d-flex flex-column align-items-end justify-content-start">
            <div class="social">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="https://web.facebook.com/kelcomcommunity"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/kelcom-music/?viewAsMember=true"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCpeko27SGsN82OLUOZ7OUtw"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Home -->

<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/video.jfif') }}" data-speed="0.8"></div>
    <div class="home_container d-flex flex-column align-items-center justify-content-center">
        <div class="home_content">
            <div class="home_title"><h1>Videos</h1></div>
        </div>
    </div>
</div>
<div class="shows_2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="shows_2_title">Download The Best Videos</div>
            </div>
        </div>
        <form action="/searchvideo" method="get" class="form-inline justify-content-center">
             @csrf
            <div class="input-group m-2">
                <input type="search" class="form-control" name="name" placeholder="Search Video....">
            </div>
            <button type="submit" class="btn musica-btn m-2">Search</button>
        </form>
        <div class="row shows_2_row">

            <!-- Show -->
            @foreach ($videos as $video)
            <div class="col-xl-3 col-md-6">
                <div class="show">
                    <div class="show_image">
                        <a href="/videoshow{{ $video->id }}">
                            <video src="{{ Storage::disk('spaces')->url('video/' $video->video) }}" width="340" alt=""></video>
                            <div class="show_play_icon"><img src="{{ asset('images/play.svg') }}" alt=""></div>
                            <div class="show_title_2">{{ $video->username }}
                            @if ($video->featuring)
                                Ft {{ $video->featuring }}
                            @else

                            @endif
                            </div>
                        </a>
                        <div class="show_tags">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="/videoshow{{ $video->id }}">{{ $video->title }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $videos->links() }}
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
