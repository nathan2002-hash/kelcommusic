@extends('layouts.user.mdownload')



@section('title')
    Umusepela Mac
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
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/about.jpg') }}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title"><h1>Kufipatula - Umusepala Mac
                        </h1></div>
                        <div class="home_subtitle text-center">10 February, 2021</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home_player_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-3">

                    <!-- Episode -->
                    <div class="player d-flex flex-row align-items-start justify-content-start s1">
                        <div class="player_content">

                            <!-- Player -->
                            <div class="single_player_container">

                                <div class="single_player d-flex flex-row align-items-center justify-content-start">
                                    <div id="jplayer_1" class="jp-jplayer"></div>
                                    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                                        <div class="jp-type-single">
                                            <div class="jp-no-solution">
                                                <span>Update Required</span>
                                                To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="show_info d-flex flex-row align-items-start justify-content-start">
                                <div class="show_comments">
                                    <a href="/download/music">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="show_comments_icon show_info_icon"><img class="svg" src="{{ asset('images/download.png') }}" alt=""></div>
                                            <div class="show_comments_count">No Download</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="show_comments">
                                    <a href="#">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="show_comments_icon show_info_icon"><img class="svg" src="{{ asset('images/download.png') }}" alt=""></div>
                                            <div class="show_comments_count">Climax Studio</div>
                                        </div>
                                    </a>
                                </div>
                               {{-- @if ($music->video_id)
                               <div class="show_comments">
                                <a href="/video/show/{{ $music->video_id }}">
                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="show_comments_icon show_info_icon"><img class="svg" src="{{ asset('images/television.svg') }}" alt=""></div>
                                        <div class="show_comments_count">View Video</div>
                                    </div>
                                </a>
                               </div>
                               @else

                               @endif --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Episode -->

<div class="episode_container">

    <!-- Episode Image -->
    <div class="episode_image_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Episode Image -->
                    <div class="episode_image"><img src="{{ asset('images/mac.jpg') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-3 order-lg-1 order-2 sidebar_col">
                <div class="sidebar">

                    <!-- Categories -->
                    <div class="sidebar_list">
                        <div class="sidebar_title">Quick Links</div>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/music">Music</a></li>
                            <li><a href="/videos">Videos</a></li>
                            <li><a href="/blog">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Episode -->
            {{-- <div class="col-lg-9 episode_col order-lg-2 order-1">
                <div class="intro">
                   @if ($music->message)
                   <div class="section_title">Message</div>
                   <div class="intro_text">
                       <p>
                           @if ($music->message)
                               {{ $music->message }}
                           @else

                           @endif
                       </p>
                   </div>
                   @else

                   @endif
                </div> --}}
                {{-- <div class="guests">
                    <div class="section_title">Other songs</div>
                    <div class="guests_container d-flex flex-md-row flex-column align-items-md-start align-items-center justify-content-start">

                        <!-- Guest -->
                        @foreach ($music->artist->musics as $music)
                        <div class="guest_container">
                            <div class="guest">
                                <div class="guest_image"><img src="{{ asset('uploads/music/image/' . $music->image) }}" alt="https://unsplash.com/@stairhopper"></div>
                                <div class="guest_content text-center">
                                    <div class="guest_name"><a href="/music/download/{{ $music->id }}">{{ $music->title }}</a></div>
                                    <div class="guest_title">{{ $music->username }}
                                        @if ($music->featuring)
                                            Ft {{ $music->featuring }}
                                        @else

                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
