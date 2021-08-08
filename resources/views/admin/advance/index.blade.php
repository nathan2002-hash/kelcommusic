@extends('kelcom.admin.home')



@section('title')
    Advanced Biography
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
    <div class="background_image" style="background-image:url({{ asset('images/index.jpg') }})"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="tags">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li><a href="/adminmusic">Music</a></li>
                            <li><a href="/adminartist">Artist</a></li>
                            <li><a href="/adminvideo">Video</a></li>
                            <li><a href="/adminbiography">Biography</a></li>
                            <li><a href="/admingallery">Gallery</a></li>
                            <li><a href="/adminadvance">Advance</a></li>
                            </ul>
                        </div>
                        <div class="home_subtitle">Check out the latest music and videos at Kelcom Music</div>
                        <div class="button_border home_button trans_200"><a href="/">Music</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Shows -->

<div class="weekly">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/weekly.jpg') }}" data-speed="0.8"></div>
    <div class="container">
        <div class="row row-eq-height">

            <!-- Weekly Content -->
           @foreach ($advances as $advance)
           <div class="col-lg-6">
            <div class="weekly_content d-flex flex-column align-items-start justify-content-lg-center justify-content-start">
                <div>
                    <div class="weekly_title"><h1>Biography</h1></div>
                    <div class="weekly_text">
                        <p>{{ $advance->info }}</p>
                    </div>
                    <div class="shops d-flex flex-row align-items-start justify-content-start flex-wrap">
                       @if ($advance->facebook)
                       <div class="button_border"><a href="{{ $advance->facebook }}">Facebook</a></div>
                       @else

                       @endif
                       @if ($advance->twitter)
                       <div class="button_border"><a href="{{ $advance->twitter }}">Twitter</a></div>
                       @else

                       @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Weekly Image -->
        <div class="col-lg-6">
            <div class="weekly_image">
                <img src="{{ asset('uploads/advance/' .$advance->image) }}" alt="">
                <div class="logo">
                    <a href="#" class="d-flex flex-row"><span></span>{{ $advance->artist }}</div></a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Shows 2 -->

<div class="shows_2">
    <div class="container">
        <div class="row shows_2_row">
        <div class="row">
            <div class="col text-center">
                <div class="button_fill shows_2_button"><a href="/adminadvancedit{{ $advance->id }}">Edit Biography</a></div>
                <form action="{{ url('/adminadvancedelete'.$advance->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                        <button type="submit" class="btn-btn">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection


@section('scripts')
    //
@endsection
