@extends('kelcom.user.music')



@section('title')
    Instrumentals
@endsection


@section('content')
<div class="menu">
    <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/music">Music</a></li>
            <li><a href="/videos">videos</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <div class="menu_extra d-flex flex-column align-items-end justify-content-start">
            <div class="social">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="https://web.facebook.com/kelcomcommunity"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/kelcom-music/?viewAsMember=true"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCpeko27SGsN82OLUOZ7OUtws"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
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
			<div class="row">
				<div class="col">
					<div class="season_links">
						<ul class="d-flex flex-row align-items-start justify-content-center flex-wrap">
							<li><a href="/" class="item_filter_btn" data-filter="*">Home</a></li>
							<li><a href="/videos" class="item_filter_btn" data-filter=".s1">Videos</a></li>
							<li><a href="/about" class="item_filter_btn" data-filter=".s2">About</a></li>
							<li><a href="/contact" class="item_filter_btn" data-filter=".s3">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
        <div class="row episodes_row">

            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="sidebar">


                    <!-- Categories -->
                    <div class="sidebar_tags">
                        <div class="sidebar_title">Instrumentals</div>
                        <div class="tags">
                            <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                @foreach ($instrumentals as $beat)
                                <li><a href="/beatdownload{{ $beat->id }}">{{ $beat->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Episodes -->
            <div class="col-lg-9 episodes_col">
                <div class="container-fluid">
                    <form action="/searchbeat" method="get" class="form-inline justify-content-center">
                        @csrf
                        <div class="input-group m-2">
                            <input type="search" name="search" class="form-control" placeholder="Search Instrumental....">
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
                    foreach ($beats as $beat){
                        ?>
                        <!-- Episode -->
                    <div class="episode d-flex flex-row align-items-start justify-content-start s1">
                        <div>
                            <div class="episode_image">
                                @if ($beat->image)
                                 <img src="{{ Storage::disk('spaces')->url('bphoto/' .$beat->image) }}" alt="">
                                @else
                                <img src="{{ asset('images/episode_1.jpg') }}" alt="">
                                @endif
                                <div class="tags">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="/beatdownload{{ $beat->id }}">Beat</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="episode_content">
                            <div class="episode_name"><a href="/beatdownload{{ $beat->id }}">{{ $beat->title }} - {{ $beat->studio }}
                            </a></div>
                            <div class="episode_date"><a href="/beatdownload{{ $beat->id }}">{{ $beat->day }} {{ $beat->month }}, {{ $beat->year }}
                                <?php
                                 echo getDateTimeDiff($beat->created_at);
                                ?>
                            </a>
                           </div>
                           <div class="episode_date">{{ $beat->views }} Views</div>
                            <div class="single_player_container">

                                <div class="single_player d-flex flex-row align-items-center justify-content-start">
                                    <div id="jplayer_1" class="jp-jplayer"></div>
                                    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                                    </div>
                                </div>

                            </div>
                            <div class="show_comments">
                                <a href="/download/beat/{{ $beat->music }}">
                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        {{-- <div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div> --}}
                                        <button type="button" class="download" data-id="{{ $beat->id}}">Download</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')

@endsection
