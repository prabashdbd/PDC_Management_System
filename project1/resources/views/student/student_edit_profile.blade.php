@extends('layouts.adminlte')

@section('styles')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">      --}}
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
@endsection
@section('content') 
@include('layouts.success') 
  <div class="container">
    <h3>Edit Profile</h3>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
                
          <form method="POST" id="addimg" enctype="multipart/form-data" action="{{URL::to('/addimg')}}">
          {{csrf_field()}}           
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar" id="edit_user_image" style="width:100px;height:100px;" >
          <h6>Upload a different photo...</h6>
          <input hidden type="text" name="img_student_id" id="img_student_id" value="{{$sid}}">
          <input type="file" class="form-control" name="img_file"><br>
          <button type="submit" class="btn btn-primary" id="img_upload" >Upload</button>
          </form><br><br>


          <label>Upload CV (Choose a PDF file)</label>
          <form method="POST" id="addcv" enctype="multipart/form-data" action="{{URL::to('/addcv')}}">
            <input hidden type="text" name="cv_student_id" id="cv_student_id" value="{{$sid}}">
            {{csrf_field()}}    
            <div class="form-group">         
                <input type="file" class="form-control" name="cv-file"><br>
                <button type="submit" class="btn btn-primary" id="cv_upload" >Upload</button>
                
            </div> 
        </form>
          
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-7 personal-info">
        {{-- <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div> --}}
        
        
        <form class="form-horizontal" role="form" action="{{ url('/student/add/update')}}" method="POST" id="edit_student_form"> 
                      {{csrf_field()}}
          <h3>Personal Info</h3>
          <input hidden type="text" name="id" id="student_id" value="{{$sid}}">
          <div class="form-group">
            <label class="col-lg-3 control-label">Initials:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" name="student_initials" value="" id="edit_student_initials">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">First names:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name_initials" value="" id="edit_name_initials">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="student_lastname" value="" id="edit_student_lastname">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
                <input class="form-control" name="email" type="email" value="" id="edit_email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Contact Number:</label>
            <div class="col-lg-8">
             <input class="form-control" name="student_contact" type="text" value="" id="edit_student_contact">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">NIC:</label>
            <div class="col-lg-8">
              <input class="form-control" name="nic_num" type="text" value="" id="edit_nic_no">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Index Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text"  name="index_num"value="" id="edit_index_num">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Registration Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text"  name="reg_num"value="" id="edit_reg_num">
            </div>
          </div>
          
          
          <div class="form-group">
            <label class="col-lg-3 control-label"></label>
            
            <div class="col-md-5" align= "left">               
              <input type="submit" id="save_changes" class="btn btn-success" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
               
            </div>
            <div class="col-md-3" align= "right">
              <input type="button" class="btn btn-primary" value="Acedemic Info" id="to_acedemic_info"> 
            </div>
            
          </div>
        </form>





        <form class="form-horizontal" action="{{ url('/student/add/update/academic')}}" method="POST" role="form" id="academic_info_form" hidden>
            {{csrf_field()}}
            <h3>Academic Info</h3>
            <input hidden type="text" name="id" value="{{$sid}}">
            <div class="form-group">
                <label class="col-lg-3 control-label">Degree</label>
                <div class="col-lg-8">
                    {{-- <input class="form-control" type="text" name="degree"value="" id="edit_degree"> --}}
                    <select class="form-control" name="degree" id="edit_degree">
                        <option value="Bsc. Computer Science">Bsc. Computer Science</option>
                        <option value="Bsc. Information Technology">Bsc. Information Technology</option>
                    </select>
                </div>                
            </div>
            
            <div class="form-group">
                <label class="col-lg-3 control-label">General / Special</label>
                <div class="col-lg-8">
                {{-- <input class="form-control" type="text" name="degree_type"value="" id="edit_degree_type"> --}}
                <select class="form-control" name="degree_type" id="edit_degree_type">
                    <option value="General (3 Year)">General (3 Year)</option>
                    <option value="Special (4 Year)">Special (4 Year)</option>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label"></label>
                
                <div class="col-md-5" align= "left">               
                <input type="submit" class="btn btn-success" value="Save Changes">
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
$(document).ready(function() {
});
$("#to_acedemic_info").click(function(){        
    
    $('#edit_student_form').hide();		
    $('#academic_info_form').show();
});
$("#to_personal_info").click(function(){        
    
    $('#academic_info_form').hide();		
    $('#edit_student_form').show();
});

//------------------------------------------------------------
$(document).ready(function(){
    var id = $('#student_id').val();
    // $('#student_id').val(id);
    // console.log(id);
        /* getting existing data to modal */

    $.ajax({
        url: '/student/readStudent{id}',
        type: 'GET',
        data: { id: id },
        success: function(data)
        {    
            console.log(data);            
            $('#edit_user_image').attr("src","/"+data[0].img_path);
            $('#edit_student_initials').val(data[0].student_initials);
            $('#edit_name_initials').val(data[0].name_initials);
            $('#edit_student_initials').val(data[0].student_initials);
            $('#edit_student_lastname').val(data[0].student_lastname);
            $('#edit_email').val(data[0].email);
            $('#edit_student_contact').val(data[0].student_contact);                
            $('#edit_index_num').val(data[0].index_num);
            $('#edit_reg_num').val(data[0].reg_num);
            $('#edit_nic_no').val(data[0].nic_no);
            $('#edit_degree').val(data[0].degree);
            $('#edit_degree_type').val(data[0].degree_type);

        },
        error: function(xhr, textStatus, error){
            console.log(xhr.statusText);
        }
    });
    

    $('#edit_student_form').on('submit',function(e){
        console.log("data"); 
        e.preventDefault();
        var url = $('#edit_student_form').attr('action');
        var data = $('#edit_student_form').serialize();
        $.ajax({
            url: url,
            type: 'POST',
            data: data, //contentType: "application/json; charset=utf-8",
            //dataType: "json",
            success: function(data)
            {     
                console.log(data);
                swal("Success!", "Details Updated", "success");
                
                      
            },
            error: (error) => {
                  console.log(JSON.stringify(error));
            }
        });                         
          
        setTimeout(function(){  
            location.reload();  
        }, 2000);               
        
    });

    $('#academic_info_form').on('submit',function(e){
        console.log("data"); 
        e.preventDefault();
        var url = $('#academic_info_form').attr('action');
        var data = $('#academic_info_form').serialize();
        $.ajax({
            url: url,
            type: 'POST',
            data: data, //contentType: "application/json; charset=utf-8",
            //dataType: "json",
            success: function(data)
            {     
                console.log(data);
                swal("Success!", "Details Updated", "success");
                
                      
            },
            error: (error) => {
                  console.log(JSON.stringify(error));
            }
        });                         
          
        setTimeout(function(){  
            location.reload();  
        }, 2000);               
        
    });



  });
      //---------------------------------------------------------------------------

</script> 





@endsection
