<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>PDCMS | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/login/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/bower_components/login/AdminLTE.min.css">
  <!-- iCheck -->
  {{-- <link rel="stylesheet" href="/bower_components/login/blue.css"> --}}

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>PDC</b>@UCSC</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Log in to start your session</p>

    <form method="post" action="{{url('/user/login')}}" id="login_form">
        {{csrf_field()}}
      <div class="form-group has-feedback">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span id="email_error" style="color:red"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <span id="password_error" style="color:red"></span>
      </div>      
      <div class="row">
        <div class="col-md-8">
          <div class="checkbox">
            <label><input type="checkbox" value="">Remember Me</label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <button id="login_btn" type="submit" class="btn btn-primary btn-block btn-flat">Log In&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-sign-in"></i></button>          
          {{-- <p><a class="btn btn-primary btn-block btn-flat" href="{{url('/adminlte')}}" role="submit">Log In&nbsp&nbsp&nbsp<i class="fa fa-sign-in"></i></a></p> --}}
          {{-- <input type="submit" value="LOGIN"/> --}}
        </div>
        <!-- /.col -->
      </div>
    </form>

    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- iCheck -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script> --}}

<script>
   

  $('#email').change(function(){
    
    var email = $(this).val();
    $.ajax({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type:'post',
      url:"{{route('verify_email')}}",
      data:{'email':email},
      success:function(data){
        
        if (!$.trim(data)){   
            // alert("What follows is blank: " + data);
            $('#email_error').html(data);
            $('#login_btn').removeAttr('disabled');
        }
        else{   
            // alert("What follows is not blank: " + data);
            $('#email_error').html(data);
            $('#login_btn').attr('disabled', 'disabled');
        }
      },
      error: (error) => {
        console.log(JSON.stringify(error));
      }
      
    });
  });



  $('#password').change(function(){
    
    var password = $(this).val();
    var email = $('#email').val();
    $.ajax({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type:'post',
      url:"{{route('verify_password')}}",
      data:{'password':password,'email':email},
      success:function(data){
        
        if (!$.trim(data)){   
            // alert("What follows is blank: " + data);
            $('#password_error').html(data);
            $('#login_btn').removeAttr('disabled');
        }
        else{   
            // alert("What follows is not blank: " + data);
            $('#password_error').html(data);
            $('#login_btn').attr('disabled', 'disabled');
        }
      },
      error: (error) => {
        console.log(JSON.stringify(error));
      }
    });
  });

  
</script>
</body>
</html>