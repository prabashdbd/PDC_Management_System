@extends('layouts.adminlte')

@section('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.css" />
  <link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
  <link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_style.min.css' rel='stylesheet' type='text/css' />
  

@endsection

@section('content')
@include('layouts.success')
<div class="container-fluid">
  <h3>Send message to an outsider</h3><br>

  <div class="panel panel-primary col-sm-8">
    <div class="panel-body">
      <form method="POST" action="{{url('message/send')}}">          
          {{csrf_field()}}
        <div class="form-group">
            <label>Recipient</label><br>
            <input placeholder="example: yyy@gmail.com" type="email" name="email" id="email" class="form-control">
            
           </div><br>
           <div class="panel panel-default">
            <div class="panel-body">
              
              <div class="form-group">
                <label>Title</label><br>
                <input id="title" name="title" type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Message</label><br>
                <textarea type="text" id="message" name="message" class="form-control"></textarea>
              </div>

              <div align="right">
                <button type="reset" name="btn_cancel" id="btn_cancel" class="btn btn-warning btn-sm">Cancel</button>
                <button type="submit" name="btn_send" id="btn_send" class="btn btn-success btn-sm">Send</button>
              </div>
              
           </div>
      </form>
    </div>
  </div>
</div>

@endsection
@section('script')
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.min.js'></script>  


<script>
$(document).ready(function() {
  $('#message').froalaEditor({      
    height: 150
    
  
  });
    
});
</script>
@endsection    