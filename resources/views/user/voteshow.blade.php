
<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ $candidate->artist }} | Kelcomcandidate</title>
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
                            <li><a href="/candidate">candidate</a></li>
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
                    <li><a href="https://www.linkedin.com/company/kelcom-candidate/?viewAsMember=true"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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
                <li><a href="/candidate">candidate</a></li>
                <li><a href="/videos">Videos</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
			</ul>
			<div class="menu_extra d-flex flex-column align-items-end justify-content-start">
				<div class="social">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li><a href="https://web.facebook.com/kelcomcommunity"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/kelcom-candidate/?viewAsMember=true"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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
                            <div class="home_title"><h1>Thank you for giving a vote to {{ $candidate->artist }}
                            </h1></div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="home_player_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 offset-lg-3">
                        <div class="col text-center">
                            <div class="button_fill shows_2_button"><a href="/music">Music</a></div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="episode_container">

		<!-- Episode Image -->
		<div class="episode_image_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<!-- Episode Image -->
						<div class="episode_image"><img src="{{ Storage::disk('spaces')->url('vote/' .$candidate->image) }}" alt=""></div>
					</div>
				</div>
			</div>
		</div>
        <br>
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
