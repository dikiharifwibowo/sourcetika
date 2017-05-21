@extends('layouts.app')

@section('content')
<br>
<br>
<br>
    <!--Content-->
    <div class="container">
    <h4 align="center"><?php echo $data->judul;?></h4>
    <br> 
        <div class="row">
            <!--Second columnn-->
            <div class="col-lg-12">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="row" style="margin: 10px;">
                        <div class="col-lg-9">
                        <p class="card-text" style="margin: 9px;">
                           <img style="width: 100%; height: 300px;" src="{{ asset('img/post/'.$data->cover) }}" class="img-fluid" alt=""> 
                        </p>
                        <p class="card-text" style="margin: 9px;">
                               "<?php echo $data->isi ?>
                            </p>
                        </div>
                        <div class="col-lg-3" style="margin-top: 20px;">
                            <p class="card-text" style="margin: 9px;">
                                <br>
                                <i class="material-icons">perm_identity</i> Penulis : <b> <?php echo $data->first_name ?>{{$data->user->name}}
                                <br><i class="material-icons">date_range</i> Di Buat : <b>  <?php echo $data->created_at ?> </b>
                                <br>
                            </p>
                        </div>
                        
                    </div>
                    <!--/.Card image-->

                  <!-- -->
                </div>
                <!--/.Card-->
            </div>
        </div>
        <div id="disqus_thread"></div>
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

