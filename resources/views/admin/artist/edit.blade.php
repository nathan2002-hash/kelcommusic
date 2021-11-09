@extends('kelcom.admin.upload')



@section('title')
    Edit {{ $artist->username }}
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
                        <div class="home_title"><h1>Edit an artist at kelcom music</h1></div>
                        <div class="home_subtitle text-center"> Today</div>
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
                    <div class="section_title">Artist Information</div>
                    <form action="/adminartist{{ $artist->id }}" method="POST" enctype="multipart/form-data" class="comment_form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="fname" value="{{ $artist->fname }}" class="comment_input" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lname" value="{{ $artist->lname }}" class="comment_input" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="username" value="{{ $artist->username }}" class="comment_input" placeholder="Username">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" value="{{ $artist->email }}" class="comment_input" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="phone" value="{{ $artist->phone }}" class="comment_input" placeholder="Phone">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="gender" value="{{ $artist->gender }}" class="comment_input" placeholder="Gender">
                            </div>
                            <div class="col-md-4">
                                <input type="date" name="dob" value="{{ $artist->dob }}" class="comment_input" placeholder="Date Of Birth">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="country" value="{{ $artist->country }}" class="comment_input" placeholder="Country">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="city" value="{{ $artist->city }}" class="comment_input" placeholder="City">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="address" value="{{ $artist->address }}" class="comment_input" placeholder="Address">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="state" value="{{ $artist->state }}" class="comment_input" placeholder="State">
                            </div>
                            <div class="col-md-4">
                                <input type="number" name="postcode" value="{{ $artist->postcode }}" class="comment_input" placeholder="PostCode">
                            </div>
                        </div>
                         <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input">
                              <label class="custom-file-label">Choose Art work...</label>
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
