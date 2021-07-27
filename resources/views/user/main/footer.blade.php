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
                            <a href="/music/download/{{ $music->id }}">
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
                                <li><a href="/music/download/{{ $music->id }}">{{ $music->month }} {{ $music->day }}, {{ $music->year }}</a></li>
                                <li><a href="/music/download/{{ $music->id }}">Music</a></li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                    <div class="latest">
                        <div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
                            <a href="/ajcostar">
                                <div class="d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_play">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
                                            <g id="Play">
                                                <path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="latest_title_content">
                                        <div class="latest_title">Energy - AJ Costar
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="latest_episode_info">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li><a href="/ajcostar">January 14, 2021</a></li>
                                <li><a href="/ajcostar">Music</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="latest">
                        <div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
                            <a href="/nogeh">
                                <div class="d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_play">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
                                            <g id="Play">
                                                <path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="latest_title_content">
                                        <div class="latest_title">No Geh - Nicho Trex ft Born Stanner
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="latest_episode_info">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li><a href="/nogeh">December 04, 2020</a></li>
                                <li><a href="/nogeh">Music</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="latest">
                        <div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
                            <a href="/bizmack">
                                <div class="d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_play">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
                                            <g id="Play">
                                                <path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="latest_title_content">
                                        <div class="latest_title">Slazenga - Bizmack
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="latest_episode_info">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li><a href="/bizmack">May 21, 2021</a></li>
                                <li><a href="/bizmack">Music</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Gallery -->
            <div class="col-lg-4">
                <div class="footer_title">Artists</div>
                <div class="gallery d-flex flex-row align-items-start justify-content-start flex-wrap">

                    <!-- Gallery Item -->
                    <div class="gallery_item">
                        <a class="colorbox" href="{{ asset('images/lj.jpg') }}"><img src="{{ asset('images/k.jpg') }}" alt=""></a>
                    </div>
                    <div class="gallery_item">
                        <a class="colorbox" href="{{ asset('images/mac.jpg') }}"><img src="{{ asset('images/mac.jpg') }}" alt=""></a>
                    </div>
                    <div class="gallery_item">
                        <a class="colorbox" href="{{ asset('images/aj.jpg') }}"><img src="{{ asset('images/aj.jpg') }}" alt=""></a>
                    </div>
                    <div class="gallery_item">
                        <a class="colorbox" href="{{ asset('images/costar.jpg') }}"><img src="{{ asset('images/costar.jpg') }}" alt=""></a>
                    </div>

                {{-- @foreach ($galleries as $gallery)
                  <div class="gallery_item">
                    <a class="colorbox" href="{{ asset('uploads/gallery/' .$gallery->image) }}"><img src="{{ asset('uploads/gallery/' .$gallery->image) }}" alt=""></a>
                  </div>
                @endforeach --}}
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
</footer>
</div>
