@extends('kelcom.admin.mdownload')



@section('title')
    {{ $artist->username }}
@endsection


@section('content')
<div class="menu">
    <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
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
                        <div class="home_title"><h1>{{ $artist->username }} - {{ $artist->fname }} {{ $artist->lname }}</h1></div>
                        <div class="home_subtitle text-center">{{ $artist->dob }}</div>
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
                   @if ($artist->image)
                   <div class="episode_image"><img src="{{ asset('uploads/artists/' .$artist->image) }}" alt=""></div>
                   @else
                   <div class="episode_image"><img src="{{ asset('images/episode_2.jpg') }}" alt=""></div>
                   @endif
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
                <div class="intro">
                    <div class="section_title">{{ $artist->fname }} {{ $artist->lname }}'s Information</div><br>
                        <h6>First Name: {{ $artist->fname }}</h6><br>
                        <h6>Last name: {{ $artist->lname }}</h6><br>
                        <h6>Username: {{ $artist->username }}</h6><br>
                        <h6>Phone: {{ $artist->phone }}</h6><br>
                        <h6>Email: {{ $artist->email }}</h6><br>
                        <h6>Gender: {{ $artist->gender }}</h6><br>
                        <h6>Country: {{ $artist->country }}</h6><br>
                        <h6>City: {{ $artist->city }}</h6><br>
                        <h6>State: {{ $artist->state }}</h6><br>
                        <h6>Address: {{ $artist->address }}</h6>
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
