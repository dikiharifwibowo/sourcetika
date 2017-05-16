@extends('layouts.app')

@section('content')
<br>
<br>
<br>

<div class="container">
    <div class="row">
            <div class="row">
                 <div class="col-lg-8">
                    <div class="col-lg-12">
                        <div class="card">
                        <!--Card content-->
                        <div class="card-block">
                            <h4>Mengapa harus berbagi???</h4>
                            <!--Text-->
                            <p class="card-text" style="height: 200px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <!--/.Card content-->

                        </div>
                        <!--/.Card-->
                    </div>
                    
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                            <br>
                            <div class="list-group">
                                <a href="{{url('/home')}}" class="list-group-item active">DASHBOARD</a>
                                <a href="#" class="list-group-item">Profil</a>
                                <a href="#" class="list-group-item">Event</a>
                                <a href="#" class="list-group-item">Video</a>
                                <a href="{{url('/post')}}" class="list-group-item">Artikel</a>
                            </div>
                        </div>

                    </div>
                        <!--/.Card-->
                 </div>
            </div>   
    </div>
</div>
<div class="container">
        <hr>
            <h4 align="center">ARTIKEL TERBARU</h4>
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
                        <p class="card-text"> <br>
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
@endsection
