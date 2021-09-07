<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link href="{{ asset('fonts/icomoon/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Kitting App</title>
  </head>
  <body>


    {{-- <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> --}}

    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-11 col-xl-2">
            {{-- <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">Brand</a></h1> --}}
            <img src="{{url('images/Latecoere_logo.png')}}" alt="">
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block" >
                {{-- <li class="active"><a href="index.html"><span>Picking</span></a></li> --}}
                <li class="has-children active" >
                  <a href="{{route('picking')}}"><span>Picking</span></a>
                  <ul class="dropdown arrow-top" style="z-index: 999999 !important;">
                    <li><a href="{{route('printpicking')}}">Print picking</a></li>
                  </ul>
                </li>
                <li><a href="{{route('kitting')}}"><span>Kitting</span></a></li>
                <li><a href="{{route('missing')}}"><span>Missing</span></a></li>
            </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
    </div>
    <hr>
</header>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <main>
    @yield('content')
    </main>
</div>


    {{-- <div class="hero" style="background-image: url('images/hero_1.jpg');"></div> --}}




</body>
<script type="text/javascript" src="{{url('js/jquery-3.3.1.min.js')}}" defer> </script>
<script type="text/javascript" src="{{url('js/jquery.sticky.js')}}" defer> </script>
<script type="text/javascript" src="{{url('js/main.js')}}" defer> </script>
<script type="text/javascript" src="{{url('js/owl.carousel.min.js')}}" defer> </script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/main.js"></script>
</html>
