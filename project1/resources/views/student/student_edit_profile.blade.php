@extends('layouts.adminlte')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
     
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
@endsection
@section('content')  
  <div class="container">
    <h3>Edit Profile</h3>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" name="profile_image" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-7 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        
        
        <form class="form-horizontal" role="form" id="personal_info_form">
          <h3>Personal Info</h3>
          <div class="form-group">
            <label class="col-lg-3 control-label">Initials:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" name="student_initials" value="">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">First names:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name_initials" value="">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="student_lastname" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
                <input class="form-control" name="email" type="email" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Contact Number:</label>
            <div class="col-lg-8">
             <input class="form-control" name="student_contact" type="email" value="">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">NIC:</label>
            <div class="col-lg-8">
              <input class="form-control" name="nic_no" type="text" value="">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Index Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text"  name="index_num"value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Registration Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text"  name="reg_num"value="">
            </div>
          </div>
          
          
          <div class="form-group">
            <label class="col-lg-3 control-label"></label>
            
            <div class="col-md-5" align= "left">               
              <input type="button" class="btn btn-success" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
               
            </div>
            <div class="col-md-3" align= "right">
              <input type="button" class="btn btn-primary" value="Acedemic Info" id="to_acedemic_info"> 
            </div>
            
          </div>
        </form>





        <form class="form-horizontal" role="form" id="academic_info_form" hidden>
            <h3>Academic Info</h3>
            <div class="form-group">
                <label class="col-lg-3 control-label">Initials:</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-3 control-label">First name:</label>
                <div class="col-lg-8">
                <input class="form-control" type="text" value="">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-3 control-label">Last name:</label>
                <div class="col-lg-8">
                <input class="form-control" type="text" value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">NIC:</label>
                <div class="col-lg-8">
                <input class="form-control" type="text" value="">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-3 control-label">Index Number:</label>
                <div class="col-lg-8">
                <input class="form-control" type="text" value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Registration Number:</label>
                <div class="col-lg-8">
                <input class="form-control" type="text" value="">
                </div>
            </div>
            
            
            <div class="form-group">
                <label class="col-lg-3 control-label"></label>
                
                <div class="col-md-5" align= "left">               
                <input type="button" class="btn btn-success" value="Save Changes">
                <span></span>
                <input type="reset" class="btn btn-default" value="Cancel">
                    
                </div>
                <div class="col-md-3" align= "right">
                <input type="button" class="btn btn-primary" value="Personal Info" id="to_personal_info"> 
                </div>
                
            </div>
        </form>

      </div>
  </div>
</div>
<hr>
  

@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script>
$(document).ready(function() {
});
$("#to_acedemic_info").click(function(){        
    
    $('#personal_info_form').hide();		
    $('#academic_info_form').show();
});
$("#to_personal_info").click(function(){        
    
    $('#academic_info_form').hide();		
    $('#personal_info_form').show();
});

</script> 





@endsection
