<!DOCTYPE html>
<html lang="en">
<head>
<title> @yield('title') | Kelcom Music</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Kelcom Music">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset("styles/bootstrap-4.1.2/bootstrap.min.css") }}">
<link href="{{ asset("plugins/font-awesome-4.7.0/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">
<link href="{{ asset("plugins/colorbox/colorbox.css") }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset("styles/episode.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("styles/episode_responsive.css") }}">
</head>


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


<script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
<script src="{{ asset("styles/bootstrap-4.1.2/popper.js") }}"></script>
<script src="{{ asset("styles/bootstrap-4.1.2/bootstrap.min.js") }}"></script>
<script src="{{ asset("plugins/greensock/TweenMax.min.js") }}"></script>
<script src="{{ asset("plugins/greensock/TimelineMax.min.js") }}"></script>
<script src="{{ asset("plugins/scrollmagic/ScrollMagic.min.js") }}"></script>
<script src="{{ asset("plugins/greensock/animation.gsap.min.js") }}"></script>
<script src="{{ asset("plugins/greensock/ScrollToPlugin.min.js") }}"></script>
<script src="{{ asset("plugins/easing/easing.js") }}"></script>
<script src="{{ asset("plugins/colorbox/jquery.colorbox-min.js") }}"></script>
<script src="{{ asset("plugins/progressbar/progressbar.min.js") }}"></script>
<script src="{{ asset("plugins/parallax-js-master/parallax.min.js") }}"></script>
<script src="{{ asset("js/custom.js") }}"></script>
<script src="{{ asset("plugins/jPlayer/jquery.jplayer.min.js") }}"></script>
<script src="{{ asset("plugins/jPlayer/jplayer.playlist.min.js") }}"></script>
<script src="{{ asset("plugins/Isotope/isotope.pkgd.min.js") }}"></script>
<script src="{{ asset("js/episode.js") }}"></script>
</body>
@yield('scripts')
</html>
