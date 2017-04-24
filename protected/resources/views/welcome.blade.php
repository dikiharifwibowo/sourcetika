<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jogja Web Developer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('theme/user/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('theme/user/css/mdb.min.css') }}" rel="stylesheet">

   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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


    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
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
                <form class="form-inline waves-effect waves-light">
                    <input class="form-control" type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('{{asset('theme/user/amcc.jpeg')}}'); background-repeat: no-repeat; background-size: cover;">
                
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="h1-responsive">Jogja Web Developer Community</h1></li>
                        <li>
                            <p>Tulis Pengalamanmu, bagikan ke Komunitas</p>
                        </li>
                        <li>
                            <a href="{{ url('/login') }}" class="btn btn-info btn-lg">MENULIS</a> 
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->
                
            </div>
            <!--/.First slide-->

        </div>
        <!--/.Slides-->
    </div>
    <!--/.Carousel Wrapper-->

    <br>

    <!--Content-->
    <div class="container">
        <hr>
            <h2 align="center">ARTIKEL TERBARU</h2>
        <hr>
        <div class="row">
             <div class="col-lg-8">
                <div class="col-lg-6">
                    <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg" class="img-fluid" alt="">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Trevelers Toolbox</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>
                    <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                
             </div>

             <div class="col-lg-4">
                <div class="card">
                    <!--Card content-->
                    <div class="card-block">
                        <!--Text-->
                        <p class="card-text"><i class="large material-icons">insert_chart</i> <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <!--/.Card content-->

                    </div>
                    <!--/.Card-->
             </div>
        </div>
    </div>
    <!--/.Content-->

    <div class="container">
        <hr style="width: 400px;">
            <h2 align="center">EVENT</h2>
        <hr style="width: 400px;">
        <div class="row">
            <div class="col-lg-8">
                <div class="col-lg-6">
                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg" class="img-fluid" alt="" style="width: 100%; height: 240px;">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--Title-->
                    <h4 class="card-title">Trevelers Toolbox</h4>
                    <!--Text-->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.<a href="#">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="container">
        <hr style="width: 400px;">
            <h2 align="center">VIDEO TURORIAL</h2>
        <hr style="width: 400px;">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg" class="img-fluid" alt="">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-block">
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                 <!--/.Card-->
            </div>
        </div>
    </div>


    <!--Footer-->
    <footer class="page-footer center-on-small-only">
        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="http://www.MDBootstrap.com" rel="nofollow"> Sourcetika.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

   <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('theme/user/js/jquery-2.2.3.min.js') }}"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('theme/user/js/tether.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('theme/user/js/bootstrap.min.js') }}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('theme/user/js/mdb.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
          

</body>

</html>