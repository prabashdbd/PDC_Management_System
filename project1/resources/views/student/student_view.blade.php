@extends('layouts.adminlte')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> 
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}  

    {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> --}}
@endsection
@section('content')
  <h3>View Student Details</h3>
	<div>
  <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
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
            
            <tr>
              @foreach($stu as $student)
                <td>{{$student->student_initials}}</td>
                <td>{{$student->student_lastname}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->index_num}}</td>
                <td>{{$student->reg_num}}</td>
                <td>{{$student->batch_detail->batch_name}}</td>



                <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{$student->student_id}}">View</button>
                <button class="btn btn-info btn-sm" data-toggle="modal">Edit</button>
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
  <div class="modal fade bd-example-modal-lg" id="{{$student->student_id}}" aria-labelledby="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{$student->student_initials.' '.$student->student_lastname}}</h4>
        </div>
        <div class="modal-body">
          {{-- <p>Some text in the modal.</p> --}}
          <center>
            <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
            <h3 class="media-heading">Joe Sixpack <small>USA</small></h3>
            <span><strong>Skills: </strong></span>
              <span class="label label-warning">HTML5/CSS</span>
              <span class="label label-info">Adobe CS 5.5</span>
              <span class="label label-info">Microsoft Office</span>
              <span class="label label-success">Windows XP, Vista, 7</span>
          </center>
          <hr>
          <center>
          <p class="text-left"><strong>Bio: </strong><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
          <br>
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

@endsection

@section('script')

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

<script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
 </script>

@endsection