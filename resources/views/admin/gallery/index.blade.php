@extends('layouts.admin.mdownload')



@section('title')
    Gallery
@endsection


@section('content')
<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/episode.jpg') }}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title"><h1>Gallery Page</h1></div>
                        <div class="home_subtitle text-center">Today</div>
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
                                            <div class="player_controls">
                                                <div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
                                                    <div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-between">
                                                        <div>
                                                            <div class="jp-controls-holder play_button ml-auto">
                                                                <button class="jp-play" tabindex="0"></button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="jp-progress">
                                                                <div class="jp-seek-bar">
                                                                    <div class="jp-play-bar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp-volume-controls d-flex flex-row align-items-center justify-content-between ml-auto">
                                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                                            <button class="jp-mute" tabindex="0"></button>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                                            <div class="jp-volume-bar">
                                                                <div class="jp-volume-bar-value"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp-no-solution">
                                                <span>Update Required</span>
                                                To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="show_info d-flex flex-row align-items-start justify-content-start">
                                <div class="show_fav d-flex flex-row align-items-center justify-content-start">
                                    <div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
                                    <div class="show_fav_count">2371</div>
                                </div>
                                <div class="show_comments">
                                    <a href="#">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
                                            <div class="show_comments_count">88 Comments</div>
                                        </div>
                                    </a>
                                </div>
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

    <div class="container">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-3 order-lg-1 order-2 sidebar_col">
                <div class="sidebar">

                    <!-- Categories -->
                    <div class="sidebar_list">
                        <div class="sidebar_title">Quick Links</div>
                        <ul>
                            <li><a href="/admin/music">Music</a></li>
                            <li><a href="/admin/artist">Artist</a></li>
                            <li><a href="/admin/video">Video</a></li>
                            <li><a href="/admin/biography">Biography</a></li>
                            <li><a href="/admin/gallery">Gallery</a></li>
                            <li><a href="/admin/advance">Advance</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Episode -->
            <div class="col-lg-9 episode_col order-lg-2 order-1">
                <div class="guests">
                    <div class="section_title">Guests</div>
                    <div class="guests_container d-flex flex-md-row flex-column align-items-md-start align-items-center justify-content-start">

                        <!-- Guest -->
                        @foreach ($galleries as $gallery)
                        <div class="guest_container">
                            <div class="guest">
                                <div class="guest_image"><img src="{{ asset('uploads/gallery/' .$gallery->image) }}" alt="https://unsplash.com/@stairhopper"></div>
                                <div class="guest_content text-center">
                                    <div class="guest_title">
                                        <form action="{{ url('/admin/gallery/'.$gallery->id) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                                <button type="submit" class="btn-btn">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
