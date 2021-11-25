@extends('kelcom.admin.upload')



@section('title')
    Edit {{ $music->title }}
@endsection


@section('content')
<div class="menu">
    <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
            <li><a href="/adminbeatcreate">Beat</a></li>
            <li><a href="/adminmusiccreate">Music</a></li>
            <li><a href="/adminbiographycreate">Biography</a></li>
            <li><a href="/adminadvancecreate">Advance</a></li>
            <li><a href="/adminvideocreate">Video</a></li>
            <li><a href="/admingallery">Gallery</a></li>
            <li><a href="/adminartistcreate">Artist</a></li>
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
                        <div class="home_title"><h1>{{ $music->title }} - {{ $music->username }}
                        @if ($music->featuring)
                            Ft {{ $music->featuring }}
                        @else

                        @endif
                        </h1></div>
                        <div class="home_subtitle text-center">{{ $music->day }} {{ $music->month }}, {{ $music->year }}</div>
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
                            <li><a href="/adminmusic">Music</a></li>
                            <li><a href="/adminartist">Artist</a></li>
                            <li><a href="/adminvideo">Video</a></li>
                            <li><a href="/adminbiography">Biography</a></li>
                            <li><a href="/admingallery">Gallery</a></li>
                            <li><a href="/adminadvance">Advance</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Episode -->
            <div class="col-lg-9 episode_col order-lg-2 order-1">
                <!-- Leave a Comment -->
                <div class="comment_form_container">
                    <div class="section_title">Information</div>
                    <form action="/adminmusic{{ $music->id }}" method="POST" enctype="multipart/form-data" class="comment_form">
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
                        <div><input type="text" name="username" value="{{ $music->username }}" class="comment_input" placeholder="Username"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="featuring" value="{{ $music->featuring }}" class="comment_input" placeholder="Featuring">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="title" value="{{ $music->title }}" class="comment_input" placeholder="Title" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="number" name="day" value="{{ $music->day }}" class="comment_input" placeholder="Day" required="required">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="month" value="{{ $music->month }}" class="comment_input" placeholder="Month" required="required">
                            </div>
                            <div class="col-md-4">
                                <input type="number" name="year" value="{{ $music->year }}" class="comment_input" placeholder="Year" required="required">
                            </div>
                        </div>
                        <div class="form-group col-md-6 px-md-1">
                            <label>Video</label>
                            <select name="video_id" class="form-control form-control-sm select">
                                <option value="" selected disabled></option>
                                @foreach ($videos as $video)
                                <option value="{{ $video->id }}">{{ $video->title }} {{ $video->username }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div><textarea class="comment_input comment_textarea" name="message" placeholder="Message">{{ $music->message }}</textarea></div>
                         <div class="col-md-12">
                            <input type="file" name="image" class="comment_input" placeholder="Image">
                        </div>
                        <div class="col-md-12">
                            <input type="file" name="music" class="comment_input" placeholder="Music">
                        </div>
                         <div class="col-md-12">
                            <input type="text" name="views"  value="{{ $music->views }}" class="comment_input" placeholder="{{ $music->views }}">
                        </div>
                          <div class="col-md-12">
                            <input type="text" name="producer"  value="{{ $music->producer }}" class="comment_input" placeholder="{{ $music->producer }}">
                        </div>
                        <button class="comment_button button_fill">Update</button>
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
