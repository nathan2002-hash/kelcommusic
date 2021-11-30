@extends('kelcom.user.blogs')



@section('title')
    Blogs
@endsection


@section('content')
<div class="menu">
    <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/music">Music</a></li>
            <li><a href="/albums">Albums</a></li>
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
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
    <div class="home_container d-flex flex-column align-items-center justify-content-center">
        <div class="home_content">
            <div class="home_title"><h1>blog</h1></div>
        </div>
    </div>
</div>

<!-- Blog -->

<div class="blog">
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
                            <li><a href="/Videos">Videos</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Blog -->
            <div class="col-lg-9 blog_col order-lg-2 order-1">
                <div class="blog_posts">
                    <!-- Blog -->
				<div class="col-lg-9 blog_col order-lg-2 order-1">
					<div class="blog_posts">
                    
                    <!-- Blog Post -->
                    @foreach ($bios as $bio)
                    <div class="blog_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                        <div class="blog_post_image">
                            <img src="{{ Storage::disk('spaces')->url('biography/' .$bio->image) }}" alt="">
                            <div class="blog_post_date"><a href="#">{{ $bio->month }} {{ $bio->day }}, {{ $bio->year }}</a></div>
                        </div>
                        <div class="blog_post_content">
                            <div class="blog_post_title"><a href="#">{{ $bio->title }}</a></div>
                            <div class="blog_post_author">By <a href="#">{{ $bio->artist }}</a></div>
                            <div class="blog_post_text">
                                <p>{{ $bio->info }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <br>
                {{ $bios->links() }}
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
