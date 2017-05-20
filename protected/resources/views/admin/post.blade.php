@extends('layouts.app')

@section('content')
<script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>

  <br>
  <br>
  <br>
  
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
          <select name="kategori_id" class="form-control">
            <option value="" disabled selected>Pilih Kategori</option>
            <option value="1">Opini</option>
            <option value="2">Tutorial</option>
            <option value="3">News</option>
          </select>    
          <div class="form-group form-float">
            <div class="form-line">
                 <input placeholder="judul" name="judul" type="text" class="validate">
            </div>
          </div>
          <div class="form-group form-float">
            <div class="form-line">
                 <span>Cover Artikel</span>
                <input type="file" name="cover" required="">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea style="height: 700px;" required="" id="editor1" name="isi" placeholder="isi artikel"></textarea>
            </div>
          </div>
          
           <div class="row">
            <div class="input-field col s12">
              <button class="btn btn-success" type="submit">SUBMIT</button>
            <button class="btn btn-default btn-sm" type="reset">Reset</button>
            </div>
          </div>
        </form>
      </div>

        
    </div>
    <script>
            CKEDITOR.replace( 'editor1' );
        </script>


@endsection
