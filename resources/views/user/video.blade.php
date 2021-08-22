@extends('kelcom.user.video')



@section('title')
    {{ $video->title }}
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
<div class="shows_2">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="shows_2_title">{{ $video->title }} - {{ $video->username }}
                @if ($video->featuring)
                    Ft {{ $video->featuring }}
                @else

                @endif
                </div>
                {{ $video->image }}
            </div>
        </div>
        <div class="col text-center">
            <article class="article">
                <div class="text-center text-md-start">
                    <video class="col text-center" width="330" height="300" controls id="player">
                        <source src="{{ Storage::disk('spaces')->url('video/' .$video->video) }}"></div>
                    </video>
                </div>
            </article>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="button_fill shows_2_button"><a href="/download/video/{{ $video->video }}">Download Video</a></div>
            </div>
        </div>
        <div class="row shows_2_row">

            <!-- Show -->
            @foreach ($video->artist->videos as $video)
            <div class="col-xl-3 col-md-6">
                <div class="show">
                    <div class="show_image">
                        <a href="/videoshow{{ $video->id }}">
                             <video src="{{ Storage::disk('spaces')->url('video/' .$video->video) }}" width="360" alt=""></video>
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
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
