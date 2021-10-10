@extends('kelcom.user.mus')



@section('title')
    Votes Section
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
                        <div class="sidebar_title">Vote For The Artist Of Your Choice</div>
                        <div class="tags">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Episodes -->
                <div class="col-lg-9 episodes_col">
					<div class="episodes_container">

						<!-- Episode -->
                        @foreach ($candidates as $candidate)
						<div class="episode d-flex flex-row align-items-start justify-content-start s1">
							<div>
								<div class="episode_image">
									<img src="{{ Storage::disk('spaces')->url('vote/' .$candidate->image) }}" alt="">
								</div>
							</div>
							<div class="episode_content">
								<div class="episode_name"><a href="episode.html">{{ $candidate->artist }}</a></div>
								<div class="episode_date"><a href="#">Click on the button to vote for {{ $candidate->artist }}</a></div>
								<!-- Player -->
								<div class="single_player_container">

                                    <div class="col">
                                        <div class="button_fill shows_2_button"><a href="/clickvote{{ $candidate->id }}">Click To Vote For {{ $candidate->artist }}</a></div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>
@endsection



@section('scripts')
    //
@endsection
