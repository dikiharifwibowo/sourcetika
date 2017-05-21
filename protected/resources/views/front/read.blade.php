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
                                <br><i class="material-icons">date_range</i><b> Di Buat : <?php echo $data->created_at ?> </b>
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
    </div>
@endsection
