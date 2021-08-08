@extends('kelcom.user.contact')



@section('title')
    Contact
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
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
    <div class="home_container d-flex flex-column align-items-center justify-content-center">
        <div class="home_content">
            <div class="home_title"><h1>Contact</h1></div>
        </div>
    </div>
</div>

<!-- Contact -->

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Intro -->
                <div class="intro">
                    <div class="section_title text-center"><h1>Get in touch</h1></div>
                    <div class="intro_text text-center">
                        <p>Do not hesitate, get in touch with kelcom music anytime we are there for you anytime
                        call us on +260 964473181</p>
                    </div>
                    <div class="button_fill intro_button text-center ml-auto mr-auto"><a href="tel://0964473181">Call</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title light text-center"><h1>Join</h1></div>
                <div class="newsletter_text text-center">
                    <p>Stay on track with the latest music on our youtube channel, just click the button below</p>
                </div>
            </div>
        </div>
        <div class="row newsletter_row">
            <div class="col-lg-10 offset-lg-1">
                <div class="col-lg-10 offset-lg-1">
                    <div class="newsletter_form_container text-center">
                        <a href="https://www.youtube.com/channel/UCpeko27SGsN82OLUOZ7OUtws" class="newsletter_button button_fill">subscribe now!</a>
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
