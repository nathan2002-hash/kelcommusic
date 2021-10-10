<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title') | Kelcom Music</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Kelcom Music">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ URL('styles/bootstrap-4.1.2/bootstrap.min.css') }}">
<link href="{{ URL('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL('plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ URL('styles/episodes.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL('styles/episodes_responsive.css') }}">
</head>
<body>

<body>
    <div class="super_container">



        <header class="main-header">

        @include('user.main.header')

        </header>






         <div class="main-content">

           @yield('content')

         </div>





         <footer class="main-footer">

           @include('user.main.footer')

         </footer>


       </div>
     </div>


<script src="{{ URL('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL('styles/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{ URL('styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{ URL('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ URL('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ URL('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ URL('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ URL('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ URL('plugins/easing/easing.js') }}"></script>
<script src="{{ URL('plugins/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ URL('plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{ URL('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ URL('js/custom.js') }}"></script>
<script src="{{ URL('plugins/jPlayer/jquery.jplayer.min.js') }}"></script>
<script src="{{ URL('plugins/jPlayer/jplayer.playlist.min.js') }}"></script>
<script src="{{ URl('plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL('js/episodes.js') }}"></script>
</body>
@yield('scripts')
</html>
