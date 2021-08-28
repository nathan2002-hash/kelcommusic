@extends('kelcom.admin.music')



@section('title')
    Music
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
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/about.jpg') }}" data-speed="0.8"></div>
    <div class="home_container d-flex flex-column align-items-center justify-content-center">
        <div class="home_content">
            <div class="home_title"><h1>Music</h1></div>
        </div>
    </div>
</div>

<!-- Episodes -->

<div class="episodes">
    <div class="container">
        <div class="row episodes_row">

            <!-- Sidebar -->
            <div class="col-lg-3">
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

            <!-- Episodes -->
            <div class="col-lg-9 episodes_col">
                <div class="container-fluid">
                    <form action="{{ route('adminmusicsearch') }}" method="POST" class="form-inline justify-content-center">
                        {{ csrf_field() }}
                        <div class="input-group m-2">
                            <input type="search" class="form-control" name="name" placeholder="Search Music....">
                        </div>
                        <button type="submit" class="btn musica-btn m-2">Search</button>
                    </form>
                <br>
                <div class="episodes_container">
                    <?php
                         function getDateTimeDiff($date){
                                            $now_timestamp = strtotime(date('Y-m-d H:i:s'));
                                            $diff_timestamp = $now_timestamp - strtotime($date);

                                            if($diff_timestamp < 60){
                                                return 'few seconds ago';
                                            }
                                            else if ($diff_timestamp>=60 && $diff_timestamp<3600){
                                                return round($diff_timestamp/60).' Min(s) ago';
                                            }
                                            else if ($diff_timestamp>=3600 && $diff_timestamp<86400){
                                                return round($diff_timestamp/3600).' Hour(s) ago';
                                            }
                                            else if ($diff_timestamp>=86400 && $diff_timestamp<(86400*7)){
                                                return round($diff_timestamp/(86400)).' Day(s) ago';
                                            }
                                            else if ($diff_timestamp>=86400*7 && $diff_timestamp<(86400*30)){
                                                return round($diff_timestamp/(86400*7)).' Week(s) ago';
                                            }
                                            else if ($diff_timestamp>=(86400*30) && $diff_timestamp<(86400*365)){
                                                return round($diff_timestamp/(86400*30)).' Month(s) ago';
                                            }
                                            else{
                                                return round($diff_timestamp/(86400*365)).' Years ago';
                                            }
                                        }
                    foreach ($songs as $music){
                        ?>
                        <!-- Episode -->
                    <div class="episode d-flex flex-row align-items-start justify-content-start s1">
                        <div>
                            <div class="episode_image">
                                @if ($music->image)
                                <img src="{{ Storage::disk('spaces')->url('mphoto/' .$music->image) }}">
                                @else
                                <img src="{{ asset('images/episode_1.jpg') }}" alt="">
                                @endif
                                <div class="tags">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="/adminmusicshow{{ $music->id }}">music</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="episode_content">
                            <div class="episode_name"><a href="/adminmusicshow{{ $music->id }}">{{ $music->title }} - {{ $music->username }}
                            @if ($music->featuring)
                                ft {{ $music->featuring }}
                            @else

                            @endif
                            </a></div>
                            <div class="episode_date"><a href="/adminmusicshow{{ $music->id }}">{{ $music->day }} {{ $music->month }}, {{ $music->year }}
                                <?php
                                 echo getDateTimeDiff($music->created_at);
                                ?>
                            </a></div>
                            <div class="show_info d-flex flex-row align-items-start justify-content-start">
                            </div>
                            <!-- Player -->
                            <div class="single_player_container">

                                <div class="single_player d-flex flex-row align-items-center justify-content-start">
                                    <div id="jplayer_1" class="jp-jplayer"></div>
                                    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                                        <div class="jp-type-single">
                                            <div class="player_controls">
                                                <audio preload="auto" controls>
                                                    <source src="{{ asset('uploads/music/mp3/' . $music->music) }}">
                                                </audio>
                                            </div>
                                            <div class="jp-no-solution">
                                                <span>Update Required</span>
                                                To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tags">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li><a href="/adminmusicedit{{ $music->id }}">Edit Track</a></li>
                                <li>
                                    <form action="{{ url('/adminmusicdelete'.$music->id) }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn-btn">Delete</button>
                                    </form>
                               </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                <br>
                {{ $songs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
