@extends('layouts.admin.music')



@section('title')
    List of artists
@endsection


@section('content')
<div class="menu">
    <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
            <li><a href="/admin/artist/create">artist</a></li>
            <li><a href="/admin/biography/create">Biography</a></li>
            <li><a href="/admin/advance/create">Advance</a></li>
            <li><a href="/admin/video/create">Video</a></li>
            <li><a href="/admin/gallery">Gallery</a></li>
            <li><a href="/admin/artist/create">Artist</a></li>
        </ul>
    </div>
</div>

<!-- Home -->

<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/about.jpg') }}" data-speed="0.8"></div>
    <div class="home_container d-flex flex-column align-items-center justify-content-center">
        <div class="home_content">
            <div class="home_title"><h1>artist</h1></div>
        </div>
    </div>
</div>

<!-- Episodes -->

<div class="episodes">
    <div class="container">
        <div class="row episodes_row">

            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="sidebar">


                    <!-- Categories -->
                    <div class="sidebar_list">
                        <div class="sidebar_title">Quick Links</div>
                        <ul>
                            <li><a href="/admin/music">Music</a></li>
                            <li><a href="/admin/artist">Artist</a></li>
                            <li><a href="/admin/video">Video</a></li>
                            <li><a href="/admin/biography">Biography</a></li>
                            <li><a href="/admin/gallery">Gallery</a></li>
                            <li><a href="/admin/advance">Advance</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Episodes -->
            <div class="col-lg-9 episodes_col">
                <div class="container-fluid">
                    <form action="{{ route('adminartistsearch') }}" method="POST" class="form-inline justify-content-center">
                        {{ csrf_field() }}
                        <div class="input-group m-2">
                            <input type="search" class="form-control" name="name" placeholder="Search artist....">
                        </div>
                        <button type="submit" class="btn artista-btn m-2">Search</button>
                    </form>
                <br>
                <div class="episodes_container">
                    <?php
                         function getDateTimeDiff($date){
                                            $now_timestamp = strtotime(date('Y-m-d H:i:s'));
                                            $diff_timestamp = $now_timestamp - strtotime($date);

                                            if($diff_timestamp < 60){
                                                return 'few seconds ago';
                                            }
                                            else if ($diff_timestamp>=60 && $diff_timestamp<3600){
                                                return round($diff_timestamp/60).' Min(s) ago';
                                            }
                                            else if ($diff_timestamp>=3600 && $diff_timestamp<86400){
                                                return round($diff_timestamp/3600).' Hour(s) ago';
                                            }
                                            else if ($diff_timestamp>=86400 && $diff_timestamp<(86400*7)){
                                                return round($diff_timestamp/(86400)).' Day(s) ago';
                                            }
                                            else if ($diff_timestamp>=86400*7 && $diff_timestamp<(86400*30)){
                                                return round($diff_timestamp/(86400*7)).' Week(s) ago';
                                            }
                                            else if ($diff_timestamp>=(86400*30) && $diff_timestamp<(86400*365)){
                                                return round($diff_timestamp/(86400*30)).' Month(s) ago';
                                            }
                                            else{
                                                return round($diff_timestamp/(86400*365)).' Years ago';
                                            }
                                        }
                    foreach ($artists as $artist){
                        ?>
                        <!-- Episode -->
                    <div class="episode d-flex flex-row align-items-start justify-content-start s1">
                        <div>
                            <div class="episode_image">
                                @if ($artist->image)
                                <img src="{{ asset('uploads/artists/'. $artist->image) }}" alt="">
                                @else
                                <img src="{{ asset('images/episode_1.jpg') }}" alt="">
                                @endif
                                <div class="tags">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="/artist/download/{{ $artist->id }}">artist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="episode_content">
                            <div class="episode_name"><a href="/admin/artist/{{ $artist->id }}">{{ $artist->username }}</a></div>
                            <div class="episode_date"><a href="/admin/artist/{{ $artist->id }}">{{ $artist->year }} Added
                                <?php
                                 echo getDateTimeDiff($artist->created_at);
                                ?>
                            </a></div>
                            <div class="show_info d-flex flex-row align-items-start justify-content-start">
                            </div>
                            <!-- Player -->
                        </div>
                        <div class="tags">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li><a href="/admin/artist/{{ $artist->id }}/edit">Edit Artist</a></li>
                                <li>
                                    <form action="{{ url('/admin/artist/'.$artist->id) }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn-btn">Delete</button>
                                    </form>
                               </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                <br>
                {{ $artists->links() }}
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
