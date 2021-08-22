@extends('kelcom.admin.video')



@section('title')
    Videos
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

<!-- Home -->

<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/contact.jpg') }}" data-speed="0.8"></div>
    <div class="home_container d-flex flex-column align-items-center justify-content-center">
        <div class="home_content">
            <div class="home_title"><h1>Videos</h1></div>
        </div>
    </div>
</div>
<div class="shows_2">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('adminvideosearch') }}" method="POST" class="form-inline justify-content-center">
                    {{ csrf_field() }}
                    <div class="input-group m-2">
                        <input type="search" class="form-control" name="name" placeholder="Search Video....">
                    </div>
                    <button type="submit" class="btn musica-btn m-2">Search</button>
                </form>
            </div>
        </div>
        <div class="row shows_2_row">

            <!-- Show -->
            @foreach ($videos as $video)
            <div class="col-xl-3 col-md-6">
                <div class="show">
                    <div class="show_image">
                        <a href="/adminvideoshow{{ $video->id }}">
                           <video src="{{ Storage::disk('spaces')->url('upload/' .$video->video) }}" width="340" alt=""></video>
                            <div class="show_play_icon"><img src="{{ asset('images/play.svg') }}" alt=""></div>
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
                                    <li><a href="/adminvideoedit{{ $video->id }}">Edit</a></li>
                                    <li>
                                        <form action="{{ url('/adminvideodelete'.$video->id) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                                <button type="submit" class="btn-btn">Delete</button>
                                        </form>
                                    </li>
                                </ul>
                                <br>
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="/adminvideoshow{{ $video->id }}">{{ $video->title }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $videos->links() }}
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
