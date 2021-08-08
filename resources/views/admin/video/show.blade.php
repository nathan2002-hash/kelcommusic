@extends('kelcom.admin.video')



@section('title')
    {{ $video->title }}
@endsection


@section('content')
<div class="menu">
    <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
            <li><a href="/adminmusiccreate">Music</a></li>
            <li><a href="/adminbiographycreate">Biography</a></li>
            <li><a href="/adminadvancecreate">Advance</a></li>
            <li><a href="/adminvideocreate">Video</a></li>
            <li><a href="/admingallery">Gallery</a></li>
            <li><a href="/adminartistcreate">Artist</a></li>
        </ul>
    </div>
</div>
<div class="shows_2">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="shows_2_title">{{ $video->title }} - {{ $video->username }}
                @if ($video->featuring)
                    Ft {{ $video->featuring }}
                @else

                @endif
                </div>
            </div>
        </div>
        <div class="col text-center">
            <article class="article">
                <div class="text-center text-md-start">
                    <video class="col text-center" width="330" height="300" controls id="player">
                        <source src="{{ asset('uploads/video/mp4/' .$video->video) }}"></div>
                    </video>
                </div>
            </article>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="button_fill shows_2_button"><a href="#">Aj Coasters Videos</a></div>
            </div>
        </div>
        <div class="row shows_2_row">

            <!-- Show -->
            @foreach ($video->artist->videos as $video)
            <div class="col-xl-3 col-md-6">
                <div class="show">
                    <div class="show_image">
                        <a href="/video/show/{{ $video->id }}">
                            <img src="{{ asset('uploads/video/image/' .$video->image) }}" alt="https://unsplash.com/@h4rd3n">
                            <div class="show_play_icon"><img src="{{ asset('images/play.svg') }}" alt="https://www.flaticon.com/authors/cole-bemis"></div>
                            <div class="show_title_2">{{ $video->username }}
                            @if ($video->featuring)
                                Ft {{ $video->featuring }}
                            @else

                            @endif
                            </div>
                        </a>
                        <div class="show_tags">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="/video/show/{{ $video->id }}">{{ $video->title }}</a></li>
                                </ul>
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
