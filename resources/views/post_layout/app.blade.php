<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>IT club</title>
<link rel="icon" type="image/jpg" href="{{asset('logo.jpg')}}">

  <!-- Font Awesome -->
  <link href="{{asset('dashboard_assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('post_assets/bootstrap.min.css')}}" rel="stylesheet">
  
  <!-- Material Design Bootstrap -->
  
  <link href="{{asset('post_assets/mdb.min.css')}}" rel="stylesheet">
  <style>
    /* Adjustments for Recent Posts section */
    .recent-posts {
      background-color: #f8f9fa;
      padding: 15px;
     
    }
    .recent-post-item {
      margin-bottom: 10px;
    }
  </style>
  <style>

    html,
        body,
        header,
        .jarallax {
          height: 700px;
        }

        @media (max-width: 740px) {
          html,
          body,
          header,
          .jarallax {
            height: 100vh;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .jarallax {
            height: 100vh;
          }
        }

        @media (min-width: 560px) and (max-width: 650px) {
          header .jarallax h5 {
            margin-bottom: 1.5rem !important;
          }
        }

        .top-nav-collapse {
          background-color:  #198754 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                
              background-color:  #198754 !important;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                /*background: #6f7782!important;*/
                background-color:  #198754 !important;
            }
        }
        h1 {
            letter-spacing: 8px;
        }
        h5 {
            letter-spacing: 3px;
        }
        .hr-light {
            border-top: 3px solid #fff;
            width: 80px;
        }
        footer.page-footer {
            background-color: #6f7782;
        }

        @media (max-width: 450px) {
            .btn-floating {
                margin-left: 0;
                margin-right: 0;
            }
        }

    </style>

</head>

<body>
  <header>
        <nav class="navbar navbar-expand-md navbar-light bg-success shadow-sm" style="background-color:  #223d2a !important;>
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ITCLUB') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
 
                           @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif  
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        
   

@yield('content')
<!--Footer-->
<footer class="page-footer pt-4 mt-4   text-center text-md-left">

    <!--Footer Links-->
    <div class="container">
      <div class="row">

        <!--First column-->
        <div class="col-md-3">
          <h5 class="text-uppercase font-weight-bold">About CLUB</h5>
          <p>Designed to provide information about Itclub events,Projects and so much more</p>
        </div>
        <!--/.First column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Second column-->
        <div class="col-md-2 ml-auto">
          <h5 class="text-uppercase font-weight-bold">Social</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Facebook</a></li>
            <li><a href="#!">Instagram</a></li>
            <li><a href="#!">Twitter</a></li>
            <li><a href="#!">Whatsapp</a></li>
          </ul>
        </div>
        <!--/.Second column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Third column-->
        <div class="col-md-2 ml-auto">
          <h5 class="text-uppercase font-weight-bold">Projects</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Project 1</a></li>
            <li><a href="#!">Project 2</a></li>
            <li><a href="#!">Project 3</a></li>
            <li><a href="#!">Project 4</a></li>
          </ul>
        </div>
        <!--/.Third column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Fourth column
        <div class="col-md-2 ml-auto">
          <h5 class="text-uppercase font-weight-bold">Developers</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Iamphort</a></li>
            
            
          </ul>
        </div>
       Fourth column-->

      </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Social buttons-->
    <div class="text-center mb-3">

      <a class="btn-floating btn-fb"><i class="fab fa-facebook-f"> </i></a>
      <a class="btn-floating btn-tw"><i class="fab fa-twitter"> </i></a>
      <a class="btn-floating  bg-success"><i class="fab fa-whatsapp"> </i></a>
      <a class="btn-floating btn-dribbble"><i class="fab fa-instagram"> </i></a>
      <a class="btn-floating btn-primary"><i class="fa fa-phone"> </i></a>

    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2024 Copyright: <a href="#"> UOI IT CLUB </a>

      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->


  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('post_assets/mdb.min.js')}}"></script>
  <script>
    new WOW().init();

  </script>
</body>

</html>
