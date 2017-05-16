@extends('layouts.app')

@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
   <div class="row">
    <div class="col s12">
      <ul class="tabs" style="padding: 0px; margin: 0px;">
        <li class="tab" style="padding: 0px; margin: 0px;"><a style="padding: 0px; margin: 0px;" href="#test1"><b>DASHBOARD ></b></a></li>
        <li class="tab" style="padding: 0px; margin: 0px;"><a style="padding: 0px; margin: 0px;" class="active" href="#test2"><b>VIDEO</b></a></li>
     </ul>
    </div>
   
  </div>

    <div class="container">
        <h6><b>INPUT ARTIKEL</b></h6><br>
        @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
          {{session('error')}}
        </div>
        @endif
       <div class="row">
        <form class="col s12" action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
          <select name="kategori_id" class="browser-default">
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Opini</option>
            <option value="2">News</option>
            <option value="3">Tutorial</option>
          </select>    
          <div class="row">
            <div class="input-field col s12">
              <input placeholder="judul" name="judul" type="text" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea required="" name="isi" placeholder="isi artikel"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="file-field input-field col s8">
              <div class="btn">
                <span>File</span>
                <input type="file" name="cover" required="">
              </div>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s12">
              <button class="btn btn-success" type="submit">Daftar</button>
            <button class="btn btn-default btn-sm" type="reset">Reset</button>
            </div>
          </div>
        </form>
      </div>
        
    </div>

<script type="text/javascript">
    $(document).ready(function(){
    $('ul.tabs').tabs('select_tab', 'tab_id');
  });
</script>

@endsection
