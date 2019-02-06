@extends('layouts.adminlte')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> 
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}  

    {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> --}}
@endsection
@section('content')
  <h3>View Student Details</h3><br>
  
  
  <div>
  <table id="studentViewtable" name="studentViewtable" class="table table-striped table-bordered table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Initials</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Index Number</th>
                <th>Reg: Number</th>
                <th>Batch</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            
            
            @foreach($stu as $student)
                <tr>
                <td>{{$student->student_initials}}</td>
                <td>{{$student->student_lastname}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->index_num}}</td>
                <td>{{$student->reg_num}}</td>
                <td>{{$student->batch_detail->batch_name}}</td>



                <td>
                <button class="btn btn-primary btn-sm" id ="view" data-toggle="modal" data-id="{{$student->student_id}}">View</button>
                <button class="btn btn-info btn-sm" id="edit" data-toggle="modal" data-id="{{$student->student_id}}">Edit</button>
                <button class="btn btn-danger btn-sm" data-toggle="modal">Delete</button></td>
                </tr>
            @endforeach
            
          </tbody>
          <tfoot>   
        </tfoot>
    </table>
	</div>


  <div class="container">
    
  <!-- Modal -->
  @foreach($stu as $student)
  <div class="modal fade bd-example-modal-lg" id="view-modal" aria-labelledby="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h3 id="student_name">Title</h3>
        </div>
        <div class="modal-body">
          {{-- <p>Some text in the modal.</p> --}}
          <center>
            <div id ='cv_frame'>
                <iframe src="" id="cv" frameborder="0" width="100%" height="400px"></iframe>
            </div>
          
          </center>
        </div>
        
        <div class="modal-footer">          
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  @endforeach
  
  </div>
  <!-- Student edit modal   --->
  <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h3 id="edit_title"> Title </h3>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button> --}}
              </div>
              <div class="modal-body">

                  <form action="{{ URL::to('/student/add/update')}}" method="POST" id="edit_student_form"> 
                      {{csrf_field()}}
                      <input type="hidden" name="id" id="student_id">
                      <div class="form-group row">
       	   	
                        <div class="col-md-4">
                          <label>Initials </label>
                          <input type="text" name="student_initials" class="form-control" id="edit_student_initials">
                        </div>
                        <div class="col-md-8">
                          <label>Name by initials </label>
                          <input type="text" name="name_initials" class="form-control" id="edit_name_initials">            
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-6">
                          <label>Lastname </label>
                          <input type="text" name="student_lastname" class="form-control" id="edit_student_lastname">
                        </div>
                        <div class="col-md-6">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control" id="edit_email">
                          
                        </div>

                      </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                        <label>Index No</label>
                        <input type="text" name="index_num" class="form-control" id="edit_index_num">
                      </div>
                      <div class="col-md-4">
                        <label>Registration No </label>
                  <input type="text" name="reg_num" class="form-control" id="edit_reg_num">		
                        
                      </div>
      
                      <div class="col-md-4">
                        <label>NIC No </label>
                  <input type="text" name="nic_num" class="form-control" id="edit_nic_no">		
                        
                      </div>
                      
                
                    </div>
                  </div>
                  </form>
      
                  
              <div class="modal-footer">
                  <button type="submit" class="btn btn-success" id="student_update" >Save Changes</button> 
                  <button type="button" class="btn btn-primary" data-dismiss="modal" id="close_edit" >Close</button>
              </div>
          </div>
      </div>
  </div>

  

@endsection

@section('script')

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
      $('#studentViewtable').DataTable();
    });

    $(document).on('click','#view',function(e){
        var id = $(this).data('id');
        $('#student_id').val(id);
        console.log(id);
        
        $.ajax({
            url: '/student/viewStudent/{id}',
            type: 'GET',
            data: { id: id },
            success: function(data)
            { 
                
                if(data[0].cv_path != null){
                    $('#student_name').html(data[0].student_initials+" "+data[0].student_lastname+" "+" (Curriculum Vitae)");
                    $('#cv_frame').show();
                    $('#cv').attr("src","/"+data[0].cv_path);
                    
                }
                else{
                    $('#student_name').html(data[0].student_initials+" "+data[0].student_lastname+" "+" (Curriculum Vitae)");
                    $('#cv_frame').hide();
                    
                }
                

            }, 
        });
        
        $("#view-modal").modal('show'); 

    });

    $(document).on('click','#edit',function(e){
        var id = $(this).data('id');
        $('#student_id').val(id);
        console.log(id);
           /* getting existing data to modal */
        $.ajax({
            url: '/student/readStudent/{id}',
            type: 'GET',
            data: { id: id },
            success: function(data)
            {    
                console.log(data);
                $('#edit_title').html(data[0].student_initials+" "+data[0].student_lastname+" "+" (Student Details Editing)" ); 
                $('#edit_student_initials').val(data[0].student_initials);
                $('#edit_name_initials').val(data[0].name_initials);
                $('#edit_student_initials').val(data[0].student_initials);
                $('#edit_student_lastname').val(data[0].student_lastname);
                $('#edit_email').val(data[0].email);
                $('#edit_index_num').val(data[0].index_num);
                $('#edit_reg_num').val(data[0].reg_num);
                $('#edit_nic_no').val(data[0].nic_no);
   
            },
            error: function(xhr, textStatus, error){
                console.log(xhr.statusText);
            }
        });
        $("#edit-modal").modal('show');

        $('#student_update').on('click',function(e){
            console.log("data"); 
            e.preventDefault();
            var url = $('#edit_student_form').attr('action');
            var data = $('#edit_student_form').serialize();
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(data)
                {     
                    console.log(data);        
                    $('#edit-modal').modal('hide');  
                    //$('#flash-message').html(data);
                          
                },
                error: function(xhr, textStatus, error){
                    console.log(xhr.statusText);
                }
            });     
        });

      });

   

 </script>

@endsection
