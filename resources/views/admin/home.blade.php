@extends('layouts.admin.home')



@section('title')
    Welcome To Admin Panel
@endsection


@section('content')
<div class="menu">
    <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
            <li><a href="/admin/music/create">Music</a></li>
            <li><a href="about.html">Biography</a></li>
            <li><a href="episodes.html">Advance</a></li>
            <li><a href="blog.html">Video</a></li>
            <li><a href="contact.html">Gallery</a></li>
        </ul>
        <div class="menu_extra d-flex flex-column align-items-end justify-content-start">
            <div class="menu_submit"><a href="#">Submit your podcast</a></div>
            <div class="social">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Home -->

<div class="home">
    <div class="background_image" style="background-image:url({{ asset('images/index.jpg') }})"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title"><h1>Admin Panel At Kelcom Music.</h1></div>
                        <div class="button_border home_button trans_200"><a href="/">Kelcom Music</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Shows -->

        </div>
        <div class="row">
            <div class="col text-center">
                <div class="button_fill shows_button"><a href="/">Kelcom Music</a></div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
