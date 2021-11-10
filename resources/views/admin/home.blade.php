@extends('kelcom.admin.home')



@section('title')
    Welcome To Admin Panel
@endsection


@section('content')
<div class="menu">
    <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
            <li><a href="/adminmusiccreate">Music</a></li>
            <li><a href="/adminbeatcreate">Beat</a></li>
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
                        <div class="home_title"><h1>Welcome to the Admin Panel At Kelcom Music.</h1></div>
                         <div class="home_title"><h3>Nathan the owner Kelcom Music is edging you to be carefull with what you will start doing on this site.</h3></div>
                        <div class="button_border home_button trans_200"><a href="">Feel Free to manage Kelcom Music website</a></div>
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
                <div class="button_fill shows_button"><a href="">KELCOM MUSIC</a></div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
