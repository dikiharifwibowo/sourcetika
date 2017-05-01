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
       <div class="row">
        <form class="col s12">
          <select class="browser-default">
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
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
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input type="file" name="cover" required="">
            </div>
          </div>
        </form>
      </div>
        
    </div>

<script type="text/javascript">
    $(document).ready(function(){
    $('ul.tabs').tabs('select_tab', 'tab_id');
  });
        

@endsection
