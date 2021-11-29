
<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ $music->title }} | Kelcommusic</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="My Podcast template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/episode.css">
<link rel="stylesheet" type="text/css" href="styles/episode_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_400">

		<!-- Logo -->
		<div class="logo">
			<a href="/"><span></span>Kelcommusic</a>
		</div>

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-start justify-content-start">
							<li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/music">Music</a></li>
                            <li><a href="/videos">Videos</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Submit & Social -->
		<div class="header_right d-flex flex-row align-items-start justify-content-start">

			<!-- Social -->
            <div class="social">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="https://web.facebook.com/kelcomcommunity"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/kelcom-music/?viewAsMember=true"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCpeko27SGsN82OLUOZ7OUtws"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>


			<!-- Hamburger -->
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

		</div>
	</header>

	<!-- Menu -->

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
                        <li><a href="https://www.youtube.com/channel/UCpeko27SGsN82OLUOZ7OUtws"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
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

								<div class="show_info d-flex flex-row align-items-start justify-content-start">
                                   @if ($music->video_id)
                                   <div class="show_comments">
                                    <a href="/videoshow{{ $music->video_id }}">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="show_comments_icon show_info_icon"><img class="svg" src="{{ asset('images/television.svg') }}" alt=""></div>
                                            <div class="show_comments_count">View Video</div>
                                        </div>
                                    </a>
                                   </div>
                                   @else

                                   @endif
                                </div>

							</div>
						</div>
                        <div class="player d-flex flex-row align-items-start justify-content-start s1">
							<div class="player_content">
                                <audio class="justify-right" preload="auto" controls>
                                    <source src="{{ Storage::disk('spaces')->url($music->music) }}" class="audio-right">
                                </audio>

								<div class="show_info d-flex flex-row align-items-start justify-content-start">
                                    <div class="show_comments">
                                    </div>
                                </div>
							</div>
						</div>
                        <div class="col text-center">
                            <div class="button_fill shows_2_button"><a href="/download/music/{{ $music->music }}">Download Audio</a></div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Episode -->
    <br>
    <br>
    <br>
    <br>


	<div class="episode_container">

		<!-- Episode Image -->
		<div class="episode_image_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<!-- Episode Image -->
						<div class="episode_image"><img src="{{ asset('uploads/gallery/' .$music->image) }}" alt=""></div>
					</div>
				</div>
			</div>
		</div>
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
				<div class="col-lg-9 episode_col order-lg-2 order-1">
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
                     </div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
        <div class="container">
            <div class="row footer_content_row">

                <!-- Tags -->
                <div class="col-lg-4">
                    <div class="footer_title">Quick Links</div>
                    <div class="footer_list">
                        <div><div><a href="/">Home</a></div></div>
                        <div><div><a href="/about">About</a></div></div>
                        <div><div><a href="/music">Music</a></div></div>
                        <div><div><a href="/videos">Videos</a></div></div>
                        <div><div><a href="/contact">Contact</a></div></div>
                    </div>
                </div>

                <!-- Latest Episodes -->
                <div class="col-lg-4">
                    <div class="footer_title">Latest Music</div>
                    <div class="latest_container">

                        <!-- Latest -->
                        @foreach ($audios as $music)
                        <div class="latest">
                            <div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
                                <a href="/musicdownload{{ $music->id }}">
                                    <div class="d-flex flex-row align-items-start justify-content-start">
                                        <div class="latest_play">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
                                                <g id="Play">
                                                    <path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="latest_title_content">
                                            <div class="latest_title">{{ $music->title }} - {{ $music->username }}
                                            @if ($music->featuring)
                                                Ft {{ $music->featuring }}
                                            @else

                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="latest_episode_info">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="/musicdownload{{ $music->id }}">{{ $music->month }} {{ $music->day }}, {{ $music->year }}</a></li>
                                    <li><a href="/musicdownload{{ $music->id }}">Music</a></li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Gallery -->
                <div class="col-lg-4">
                    <div class="footer_title">Artists</div>
                    <div class="gallery d-flex flex-row align-items-start justify-content-start flex-wrap">
                    @foreach ($galleries as $gallery)
                      <div class="gallery_item">
                        <a class="colorbox" href="{{ asset('uploads/gallery/' .$gallery->image) }}"><img src="{{ asset('uploads/gallery/' .$gallery->image) }}" alt=""></a>
                      </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="row footer_social_row">
                <div class="col">
                    <div class="footer_social">
                        <ul class="d-flex flex-row align-items-center justify-content-center">
                            <li><a href="https://web.facebook.com/kelcomcommunity"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/kelcom-music/?viewAsMember=true"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCpeko27SGsN82OLUOZ7OUtws"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

    </br></br>
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://kelcomcommunity.com" target="_blank">Kelcom Community</a>

        </div>
       </div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/episode.js"></script>
</body>
</html>
