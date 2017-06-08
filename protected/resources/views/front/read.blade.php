@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<!--Content-->
<style type="text/css">
    
.cssui-usercard__header{
  padding-left: 0.1rem;
  padding-bottom: 1rem;
  padding-top: 1rem;
  display: flex;
  align-items: center;  
}

.cssui-usercard__avatar{
/*  border-radius: 50%;*/
  border: 2px solid #fff;
  box-sizing: border-box;
  margin-right: 2%;
  width: 5rem;
  height: 5rem;
}

.cssui-usercard__name{
  font-size: 2rem;
  margin-top: 0;  
  margin-bottom: 0;  
}

.cssui-usercard__name-label{
  font-weight:400;
}

.cssui-usercard__post{
  display: block;
}
</style>
<div class="container">
    <h4 align="center"><?php echo $data->judul;?></h4>
    <br> 
    <div class="row">
        <!--Second columnn-->
        <div class="col-lg-9">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="row" style="margin: 0px;">
                        <div class="col-lg-12">
                        <header class="cssui-usercard__header">
                            <img src="https://stas-melnikov.ru/cliparts/stas.jpg" class="cssui-usercard__avatar" alt="Avatar">
                            <div class="cssui-usercard__header-info">
                                <h3 class="cssui-usercard__name">{{ $data->first_name}}   <span class="cssui-usercard__name-label">{{$data->user->name}}</span></h3>
                                <span class="cssui-usercard__post">UI Developer</span>
                                 <span class="cssui-usercard__post">{{ \Carbon\Carbon::parse($data->create_at)->format('d M Y')}} </span>
                            </div>
                        </header>
                        <p class="card-text" style="margin-bottom: 9px;">
                            <img style="width: 100%; height: 300px;" src="{{ asset('img/post/'.$data->cover) }}" class="img-fluid" alt=""> 
                        </p>

                        <p class="card-text" style="margin: 9px;">
                             "<?php echo $data->isi ?>
                        </p>
                     </div>
                     

                </div>
                <!--/.Card image-->
            <!--/.Card-->
        </div>
        <div id="disqus_thread"></div>
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

</div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://sourcetika.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<script id="dsq-count-scr" src="//sourcetika.disqus.com/count.js" async></script>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5921753bbaf27a00129fc615&product=sticky-share-buttons"></script>
@endsection

