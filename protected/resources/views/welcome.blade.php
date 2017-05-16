    @extends('layouts.app')
  

    @section('caroseal')
    
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
    @endsection

    <br>
    @section('content')
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
    @endsection

    