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
            <h4 align="center">ARTIKEL TERBARU</h4>
        <hr>
        <div class="row">
             <div class="col-lg-9">
                <div class="row">
                   <?php foreach ($posts as $post) { ?>
                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <div class="card" style="height: 360px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img style="height: 160px; width: 100%;" src="{{asset('img/post/'.$post->cover)}}" class="img-fluid" alt="">
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <p>{{$post->kategori->judul}}</p>
                            <!--Title-->
                            <h4 style="height: 100px;" class="card-title"><a href="{{ url('/'.$post->slug_judul) }}"><strong>{{ strip_tags($post->judul) }}</strong></a> </h4>
                            <p style="margin: 2px;">{{$post->user->name}}</p>
                        </div>
                        <!--/.Card content-->

                        </div>
                        <!--/.Card-->
                    </div>
                    <?php } ?>
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
