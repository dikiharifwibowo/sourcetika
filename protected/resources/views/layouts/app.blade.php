<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sourcetika.com || Jogja Web Developer') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
     <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('theme/user/css/font-awesome.min.css')}} ">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('theme/user/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('theme/user/css/mdb.min.css') }}" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/
        
        html,
        body {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .top-nav-collapse {
            background-color: #304a74;
        }
        
        footer.page-footer {
            background-color: #304a74;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        /* Carousel*/
        
        .carousel {
            height: 50%;
        }
        
        @media (max-width: 776px) {
            .carousel {
                height: 100%;
            }
        }
        
        .carousel-item,
        .active {
            height: 100%;
        }
        
        .carousel-inner {
            height: 100%;
        }
        
        /*Caption*/
        
        .flex-center {
            color: #fff;
        }
    </style>

</head>

<body>

    <div id="app">
        <!--Navbar-->
        <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar" style="background-color: #33b5e5;">
            <div class="container">
                <a class="navbar-brand" href="#">
                <strong>SOURCETIKA</strong>
                </a>
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link">Artikel<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Event</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        @if (Auth::guest())
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="nav-item dropdown btn-group">
                            <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} </a>
                            <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br>
        @yield('content')
        <!--Content-->
       
        <br><br>
        <!--Footer-->
        <footer class="page-footer center" style="background-color: #33b5e5;">

            <!--Copyright-->
            <div class="footer-copyright" style="background-color: #33b5e5;">
                <div class="container">
                    © 2015 Copyright: <a href="http://www.MDBootstrap.com" rel="nofollow"> sourcetika.com</a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

    </div> <!-- app  -->
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('theme/user/js/jquery-2.2.3.min.js') }}"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('theme/user/js/tether.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('theme/user/js/bootstrap.min.js') }}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('theme/user/js/mdb.min.js') }}"></script>
    <script>
    new WOW().init();
    </script>


</body>

</html>