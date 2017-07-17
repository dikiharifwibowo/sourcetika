@extends('layouts.app')

@section('content')
<br>
<br>
<br>

        <div class="container">
            <div class="row">
                 <div class="col-lg-8">
                    <div class="col-lg-12">
                        <div class="card">
                        <!--Card content-->
                        <div class="card-block">
                            <img src="{{ asset('img/header.png') }}">
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
<div class="container">
        <hr>
            <h4 align="center">SOURCETIKA</h4>
        <hr>
        <div class="row">
             <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <div class="card" style="height: 380px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img style="height:300px; width: 100%;" src="{{asset('img/kaos/github.png')}}" class="img-fluid" alt="">
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <p align="center"><b><strong>
                            Kaos Github [L]
                            </strong></b> <br>
                            Rp. 70.000
                            </p>
                           
                            <p align="center" style="margin: 0px;">
                            <a href=""><i class="material-icons">add_shopping_cart</i> Pesan </a>
                            </p>
                        </div>
                        <!--/.Card content-->

                        </div> 
                        <!--/.Card-->
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <div class="card" style="height: 380px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img style="height:300px; width: 100%;" src="{{asset('img/kaos/google.png')}}" class="img-fluid" alt="">
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <p align="center"><b><strong>
                            Kaos Google [L]
                            </strong></b> <br>
                            Rp. 70.000
                            </p>
                           
                            <p align="center" style="margin: 0px;">
                            <a href=""><i class="material-icons">add_shopping_cart</i> Pesan </a>
                            </p>
                        </div>
                        <!--/.Card content-->

                        </div> 
                        <!--/.Card-->
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <div class="card" style="height: 380px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img style="height:300px; width: 100%;" src="{{asset('img/kaos/node.png')}}" class="img-fluid" alt="">
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <p align="center"><b><strong>
                            Kaos Node [L]
                            </strong></b> <br>
                            Rp. 70.000
                            </p>
                           
                            <p align="center" style="margin: 0px;">
                            <a href=""><i class="material-icons">add_shopping_cart</i> Pesan </a>
                            </p>
                        </div>
                        <!--/.Card content-->

                        </div> 
                        <!--/.Card-->
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <div class="card" style="height: 380px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img style="height:300px; width: 100%;" src="{{asset('img/kaos/laravel.png')}}" class="img-fluid" alt="">
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <p align="center"><b><strong>
                            Kaos Laravel [L]
                            </strong></b> <br>
                            Rp. 70.000
                            </p>
                           
                            <p align="center" style="margin: 0px;">
                            <a href=""><i class="material-icons">add_shopping_cart</i> Pesan </a>
                            </p>
                        </div>
                        <!--/.Card content-->

                        </div> 
                        <!--/.Card-->
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <div class="card" style="height: 380px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img style="height:300px; width: 100%;" src="{{asset('img/kaos/react.png')}}" class="img-fluid" alt="">
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <p align="center"><b><strong>
                            Kaos React [L]
                            </strong></b> <br>
                            Rp. 70.000
                            </p>
                           
                            <p align="center" style="margin: 0px;">
                            <a href=""><i class="material-icons">add_shopping_cart</i> Pesan </a>
                            </p>
                        </div>
                        <!--/.Card content-->

                        </div> 
                        <!--/.Card-->
                    </div>

                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <div class="card" style="height: 380px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img style="height:300px; width: 100%;" src="{{asset('img/kaos/programmer.png')}}" class="img-fluid" alt="">
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <p align="center"><b><strong>
                            Kaos Fullstack [L]
                            </strong></b> <br>
                            Rp. 70.000
                            </p>
                           
                            <p align="center" style="margin: 0px;">
                            <a href=""><i class="material-icons">add_shopping_cart</i> Pesan </a>
                            </p>
                        </div>
                        <!--/.Card content-->

                        </div> 
                        <!--/.Card-->
                    </div>

                </div> 
             </div>


             <div class="col-lg-3">
                <div class="card">
                    <!--Card content-->
                    <div class="card-block">
                        <!--Text-->
                        <p class="card-title" align="center"></strong><strong>Technology</strong></p>
                        <ul>
                           <li style="margin: 20px;"><a href="{{ url('/tech/'.'html') }}"><img style="display: inline-block;" src="{{asset('img/sidebar-logo-html.png')}}"><font>   HTML</font></a></li> 
                           <li style="margin: 20px;"><a href="{{ url('tech/'.'javascript') }}"><img style="display: inline-block;" src="{{asset('img/sidebar-logo-js.png')}}"><font>   JavaScript</font></a></li> 
                           <li style="margin: 20px;"><a href="{{ url('tech/'.'node') }}"><img style="display: inline-block;" src="{{asset('img/sidebar-logo-nodejs.png')}}"><font>   Node.Js</font></a></li> 
                           <li style="margin: 20px;"><a href="{{ url('tech/'.'php') }}"><img style="display: inline-block;" src="{{asset('img/sidebar-logo-php.png')}}"><font>   PHP</font></a></li> 
                        </ul>
                    </div>
                    <!--/.Card content-->

                    </div>
                    <!--/.Card-->
            </div>

            
        </div>
    </div>
@endsection
