@extends('layouts.admin.blogs')



@section('title')
    Blogs
@endsection


@section('content')
<div class="menu">
    <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
            <li><a href="/admin/music/create">Music</a></li>
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
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/blog.jpg') }}" data-speed="0.8"></div>
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

            <!-- Blog -->
            <div class="col-lg-9 blog_col order-lg-2 order-1">
                <div class="blog_posts">
                    <form action="{{ route('adminbiosearch') }}" method="POST" class="form-inline justify-content-center">
                        {{ csrf_field() }}
                        <div class="input-group m-2">
                            <input type="search" class="form-control" name="name" placeholder="Search blog....">
                        </div>
                        <button type="submit" class="btn artista-btn m-2">Search</button>
                    </form>
                    <br>
                    @foreach ($bios as $bio)
                    <div class="blog_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                        <div class="blog_post_image">
                            <img src="{{ asset('uploads/biography/' .$bio->image) }}" alt="https://unsplash.com/@kellysikkema">
                            <div class="blog_post_date"><a href="#">{{ $bio->month }} {{ $bio->day }}, {{ $bio->year }}</a></div>
                                    <form action="{{ url('/admin/biography/'.$bio->id) }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn-btn">Delete</button>
                                    </form>
                        </div>
                        <div class="blog_post_content">
                            <div class="blog_post_title"><a href="/admin/biography/{{ $bio->id }}/edit">{{ $bio->title }}</a></div>
                            <div class="blog_post_author">By <a href="/admin/biography/{{ $bio->id }}/edit">{{ $bio->artist }}</a></div>
                            <div class="blog_post_text">
                                <p>{{ $bio->info }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $bios->links() }}
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    //
@endsection
