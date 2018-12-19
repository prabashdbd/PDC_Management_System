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
                <th>Placement Areas</th>
                <th>Number of Vacancies</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>Name1</td>
                <td>Address1</td>
                <td>Est. Date1</td>
                <td>Website1</td>
                <td>1</td>
                <td>AAA,BBB,CCC</td>
                {{-- <td>$86,000</td> --}}
                <td><button class="btn btn-primary btn-sm" data-toggle="modal" href="#myModal">View</button>
                <button class="btn btn-info btn-sm" data-toggle="modal" href="#myModal">Edit</button>
                <button class="btn btn-danger btn-sm" data-toggle="modal" href="#myModal">Delete</button></td>
            </tr>
            
            
        </tfoot>
    </table>


  <div class="container">
    
  <!-- Modals -->
  <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="modal-title"><span>Company Name</span></h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <center><h5>Contact details</h5></center>
                </div>
                <div class="panel-body">
                  <label>Name</label><br>
                  <label>Email</label><br>
                  <label>Tel (Land)</label><br>
                  <label>Tel (Mobile)</label><br>



                </div> 
              </div>


            </div>
            <div class="col-md-8">
              <div class="panel panel-info">
                <div class="panel-heading">
                    <center><h5>Company details</h5></center>
                </div>
                <div class="panel-body">
                    <label>Parent Organization</label><br>
                    <label>Address</label><br>
                    <label>Website</label><br>
                    <label>Placement Areas</label><br>
                    <label>Available Vanancies</label>



                </div>
              </div>
            </div>
          </div>

        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal" data-toggle="modal" href="#myModal1">See Adverts</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


  <div class="modal fade bd-example-modal-lg" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"><span>Adverts from Company Name</span></h4>
        </div>
        <div class="modal-body">


          {{-- <body> --}}

        </div>
        <div class="modal-footer">            
            <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#myModal">Close</button>
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