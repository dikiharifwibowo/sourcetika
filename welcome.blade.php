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
                                <a href="{{ url('/post') }}" class="btn btn-info btn-lg">MENULIS</a> 
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
<!--/.Content-->

@endsection

