@extends('kelcom.user.home')



@section('title')
    Home
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
    <div class="background_image" style="background-image:url(images/index.jpg)"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="tags">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li><a href="/blog">Blogs</a></li>
                                <li><a href="/music">Music</a></li>
                                <li><a href="/video">Videos</a></li>
                            </ul>
                        </div>
                        <div class="home_subtitle">Check out the latest music and videos at Kelcom Music</div>
                        <div class="button_border home_button trans_200"><a href="/music">Music</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Shows -->

<div class="shows">
    <div class="container">
        <div class="row shows_row">
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
            <div class="col-lg-4">
                <div class="show">
                    <div class="show_image">
                     <a href="/musicdownload{{ $music->id }}">
                     @if ($music->image)
                     <img src="{{ Storage::disk('spaces')->url($music->image) }}" alt="">
                       @else
                        <img src="{{ asset('images/episode_1.jpg') }}" alt="">
                        @endif
                            <img src="{{ asset('images/blog_1.jpg') }}" alt="https://unsplash.com/@icons8">
                        </a>
                        <div class="show_tags">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="/musicdownload{{ $music->id }}">{{ $music->title }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="show_play_icon"><img src="images/play.svg" alt="https://www.flaticon.com/authors/cole-bemis"></div>
                    </div>
                    <div class="show_content">
                        <div class="show_date"><a href="/musicdownload{{ $music->id }}">{{ $music->day }} {{ $music->month }}, {{ $music->year }} -
                          <?php
                            echo getDateTimeDiff($music->created_at);
                           ?>
                        </a></div>
                        <div class="show_title"><a href="/musicdownload{{ $music->id }}">{{ $music->username }}
                        @if ($music->featuring)
                            Ft {{ $music->featuring }}
                        @else

                        @endif
                        </a></div>
                        <div class="show_info d-flex flex-row align-items-start justify-content-start">
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col text-center">
                <div class="button_fill shows_button"><a href="/music">browse More Music</a></div>
            </div>
        </div>
    </div>
</div>

<!-- Bi Weekly -->

<div class="weekly">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/weekly.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row row-eq-height">

            <!-- Weekly Content -->
           @foreach ($advances as $advance)
           <div class="col-lg-6">
            <div class="weekly_content d-flex flex-column align-items-start justify-content-lg-center justify-content-start">
                <div>
                    <div class="weekly_title"><h1>Biography</h1></div>
                    <div class="weekly_text">
                        <p>{{ $advance->info }}</p>
                    </div>
                    <div class="shops d-flex flex-row align-items-start justify-content-start flex-wrap">
                       @if ($advance->facebook)
                       <div class="button_border"><a href="{{ $advance->facebook }}">Facebook</a></div>
                       @else

                       @endif
                       @if ($advance->twitter)
                       <div class="button_border"><a href="{{ $advance->twitter }}">Twitter</a></div>
                       @else

                       @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Weekly Image -->
        <div class="col-lg-6">
            <div class="weekly_image">
                <img src="{{ asset('uploads/advance/' .$advance->image) }}" alt="">
                <div class="logo">
                    <a href="#" class="d-flex flex-row"><span></span>{{ $advance->artist }}</div></a>
                </div>
            </div>
        </div>
           @endforeach
        </div>
    </div>
</div>

<!-- Shows 2 -->

<div class="shows_2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="shows_2_title">Latest Videos</div>
            </div>
        </div>
        <div class="row shows_2_row">

            <!-- Show -->
            @foreach ($videos as $video)
            <div class="col-xl-3 col-md-6">
                <div class="show">
                    <div class="show_image">
                        <a href="/videoshow{{ $video->id }}">
                            <video src="{{ Storage::disk('spaces')->url($video->video) }}" width="340" alt="https://unsplash.com/@h4rd3n"></video>
                            <div class="show_play_icon"><img src="images/play.svg" alt="https://www.flaticon.com/authors/cole-bemis"></div>
                            <p class="show_title_2">{{ $video->username }}
                            @if ($video->featuring)
                                Ft {{ $video->featuring }}
                            @else

                            @endif
                            </p>
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
        <div class="row">
            <div class="col text-center">
                <div class="button_fill shows_2_button"><a href="/videos">browse More Videos</a></div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
    //
@endsection
