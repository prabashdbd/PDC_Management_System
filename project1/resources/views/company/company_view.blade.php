@extends('layouts.adminlte')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
    
@endsection
@section('content')
	<h3>View Company Details</h3>
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Est. Date</th>
                <th>Website</th>
                <th>Technologies</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>Name1</td>
                <td>Address1</td>
                <td>Est. Date1</td>
                <td>Website1</td>
                <td>AAA,BBB,CCC</td>
                {{-- <td>$86,000</td> --}}
                <td><button class="btn btn-primary btn-sm" data-toggle="modal" href="#myModal">View</button>
                <button class="btn btn-info btn-sm" data-toggle="modal" href="#myModal">Edit</button>
                <button class="btn btn-danger btn-sm" data-toggle="modal" href="#myModal">Delete</button></td>
            </tr>
            
            
        </tfoot>
    </table>


  <div class="container">
    
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
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