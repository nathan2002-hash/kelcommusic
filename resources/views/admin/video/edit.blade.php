@extends('layouts.admin.upload')



@section('title')
    Edit {{ $video->title }}
@endsection


@section('content')
<div class="menu">
    <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
            <li><a href="/admin/music/create">Music</a></li>
            <li><a href="/admin/biography/create">Biography</a></li>
            <li><a href="/admin/advance/create">Advance</a></li>
            <li><a href="/admin/video/create">Video</a></li>
            <li><a href="/admin/gallery">Gallery</a></li>
            <li><a href="/admin/artist/create">Artist</a></li>
        </ul>
    </div>
</div>

<!-- Home -->

<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/episode.jpg') }}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title"><h1>{{ $video->title }} - {{ $video->username }}
                        @if ($video->featuring)
                            Ft {{ $video->featuring }}
                        @else

                        @endif
                        </h1></div>
                        <div class="home_subtitle text-center">{{ $video->day }} {{ $video->month }}, {{ $video->year }}</div>
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

    <!-- Episode Image -->
    <div class="episode_image_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Episode Image -->
                    <div class="episode_image"><img src="images/episode_2.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>

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
                <!-- Leave a Comment -->
                <div class="comment_form_container">
                    <div class="section_title">Information</div>
                    <form action="/admin/video/{{ $video->id }}" method="POST" enctype="multipart/form-data" class="comment_form">
                        @csrf
                        <div class="form-group col-md-6 px-md-1">
                            <label>Artist</label>
                            <select name="artist_id" class="form-control form-control-sm select" required>
                                <option value="" selected disabled>Select Artist</option>
                                @foreach ($artists as $artist)
                                <option value="{{ $artist->id }}">{{ $artist->username }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div><input type="text" name="username" value="{{ $video->username }}" class="comment_input" placeholder="Username"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="featuring" value="{{ $video->featuring }}" class="comment_input" placeholder="Featuring">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="title" value="{{ $video->title }}" class="comment_input" placeholder="Title" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="number" name="day" value="{{ $video->day }}" class="comment_input" placeholder="Day" required="required">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="month" value="{{ $video->month }}" class="comment_input" placeholder="Month" required="required">
                            </div>
                            <div class="col-md-4">
                                <input type="number" name="year" value="{{ $video->year }}" class="comment_input" placeholder="Year" required="required">
                            </div>
                        </div>
                        <div class="form-group m-2">
                            <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input">
                              <label class="custom-file-label">Choose Image...</label>
                            </div>
                        </div>
                        <div class="form-group m-2">
                            <div class="custom-file">
                              <input type="file" name="video" class="custom-file-input">
                              <label class="custom-file-label">Choose Video...</label>
                            </div>
                        </div>
                        {{ method_field('PUT') }}
                        <button class="comment_button button_fill">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
