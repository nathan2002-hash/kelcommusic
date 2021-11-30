@extends('kelcom.user.about')



@section('title')
    About
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

<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/show_6.jpg" data-speed="0.8"></div>
    <div class="home_container d-flex flex-column align-items-center justify-content-center">
        <div class="home_content">
            <div class="home_title"><h1>about</h1></div>
        </div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="intro_content text-center">
                    <div class="section_title text-center"><h1>About <span>Kelcom Music</span></h1></div>
                    <div class="intro_text text-center">
                        <p>Kelcom Music was founded by Nathan Mwamba Musonda the Chief Operating
                            Office of Kelcom Community in 2021. Kelcom Music was developed by
                            Nathan Mwamba, Shadrick Kipamba the CEO Of Kelcom Community and Francis
                            Mwila Mwansa the Director of Kelcom Community and Robert Kachimfya.
                        </p>
                    </div>
                    <div class="button_fill intro_button"><a href="https://www.kelcomcommunity.com">more more</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About -->

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="about_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
                    <div class="about_content">
                        <div class="section_title"><h1>About Kelcom Community</h1></div>
                        <div class="about_text">
                            <p>Kelcom Community it is a software company in Zambia which develops
                                softwares such as, School Management systems, websites for companies
                                and many more, for more info call +260 964473181
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

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
                <div class="newsletter_form_container text-center">
                    <a href="https://www.youtube.com/channel/UCpeko27SGsN82OLUOZ7OUtws" class="newsletter_button button_fill">subscribe now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
        <script type="application/ld+json">
{
  "@context": "http://schema.org",
"@type":    "Website",
"brand":    {
    "@type":    "Brand",
    "logo": https://kelcomm.fra1.digitaloceanspaces.com/gallery/5475491.jpg",
    "url":  "http://www.kelcommusic.com/",
    "name": "Kelcom Music",
    "sameAs":   [
        "https://web.facebook.com/kelcomcommunity",
        "https://www.linkedin.com/company/kelcom-music/?viewAsMember=true",
        ]
    }
}
</script>
@endsection
