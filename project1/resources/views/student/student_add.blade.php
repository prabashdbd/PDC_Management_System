@extends('layouts.adminlte')

@section('styles')
	<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<style>
	.inputfile
	 {
		width: 0.1px;
		height: 0.1px;
		opacity: 0;
		overflow: hidden;
		position: absolute;
		z-index: -1;
	}
	</style>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    
@endsection
@section('content')
	@include('layouts.success')
  <div class="container-fluid">
  <h3>Add Students</h3>

  <ul class="nav nav-tabs">
	<li><a href=""></a></li>
	<li class="active"><a href="#menu1">Add Groups</a></li>
	<li><a href="#menu2">Add by list</a></li>
	<li><a href="#menu3">Add a single</a></li>
	
  </ul>

  <div class="tab-content" style="margin-top:16px;">
    
    
    <div id="menu1" class="tab-pane fade in active">
    	
      <div class="panel panel-primary col-sm-8">
       <div class="panel-heading"><center>Create a student group</center></div>
       <div class="panel-body">
       	<form method="POST" id="add_group" action="{{ URL::to('/students/add/addGroup')}}">
       		{{csrf_field()}}
       	   <div class="form-group">
       	   	<label>Group Name</label>
    		<input type="text" name="batch_name" class="form-control" id="batch_name">
       	   </div>
       	   

       	   <div class="form-group">
       	   	<label>Internship Period</label>
       	   	<br>
    		<div class="form-inline">
    			<label><p style="font-style: italic;: "> &nbspFrom: </p></label>
    			<input type="date" name="intern_period_start" class="form-control" id="intern_period_start">
    			<label><p style="font-style: italic;: "> &nbspTo: </p></label>
    			<input type="date" name="intern_period_end" class="form-control" id="intern_period_end">
    		</div>
    		
       	   </div>

       	   <div align="right">

       	   	<button type="reset" name="btn_reset" id="btn_reset" class="btn btn-info btn-sm">Reset</button>
       	   	<button name="btn_cancel" id="btn_cancel" class="btn btn-warning btn-sm">Abort</button>
       	   	<button type="submit" name="btn_create" id="btn_create" class="btn btn-success btn-sm">Create</button>

       	   </div>



       	</form>
       </div>
   	 </div>
      
    </div>
	
    <div id="menu2" class="tab-pane fade">
      <div id="menu1" class="tab-pane fade in active">
	    <div class="panel panel-primary col-sm-8">
	       <div class="panel-heading">Add students by a list<small style="color: white">&nbsp(Reg: NO, Index NO, Initials, Name by initials, Lastname, NIC, Email,Contact Number)</small>
		   </div>
	       <div class="panel-body">
	       	<form method="POST" id="addbylist" enctype="multipart/form-data" action="{{URL::to('/students/add/addByList')}}">
				   {{csrf_field()}}
				   
	       	  <div class="form-inline">
	       	   <label>Select Group&nbsp </label>
	       	   <select name="batch_id" id="group_id" class="form-control" style="width: 200px;">
					@foreach($batch as $data)
						<option value="{{$data->batch_id}}" >{{$data->batch_name}}</option>
					@endforeach                                
						   
		        </select>
               </div><br>

               <div class="form-inline">
               	<label for="upload-file">Choose a CSV file</label>
               	<input type="file" id="upload-file" accept=".csv" class="form-control-file" name="upload-file"><br>
               	
               </div>
               <br><br>

	       	   <div align="right">

					<button type="reset" name="btn_cancel" id="btn_cancel" class="btn btn-warning btn-sm">Abort</button>
					<button type="button" name="btn_proceed" id="btn_proceed" class="btn btn-primary btn-sm">Proceed</button>
					<button type="submit" name="btn_upload" id="btn_upload" class="btn btn-success btn-sm">Upload</button>      	   		

	       	   </div>
       	</form>
	    </div>
	  </div>
      
    </div>
      
    </div>
    <div id="menu3" class="tab-pane fade">
      <div id="menu1" class="tab-pane fade in active">
      <div class="panel panel-primary col-sm-8">
       <div class="panel-heading">Add a single student</div>
       <div class="panel-body">
       	<form method="POST" id="add_single" action="{{ URL::to('/students/add/addSingle')}}">
       		{{csrf_field()}}
       	   <div class="form-group row">
       	   	
       	   	<div class="col-md-4">
	       	   	<label>Initials </label>
	    		<input type="text" name="student_initials" class="form-control" id="student_initials">
	    	</div>

    		<div class="col-md-8">
	    		<label>Lastname </label>
	    		<input type="text" name="student_lastname" class="form-control" id="student_lastname">
       	   	</div>
			</div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-md-8">
						<label>Name denoted by initials </label>
						<input type="text" name="name_initials" class="form-control" id="name_initials">
					</div>
					<div class="col-md-4">
						<label>Contact Number </label>
						<input type="text" name="student_contact" class="form-control" id="student_contact">	
						
					</div>
				</div>
			</div>
			  

       	   <div class="form-group">
	       	   <div class="row">
	       	   	<div class="col-md-4">
	       	   		<label>Index No</label>
	       	   		<input type="text" name="index_num" class="form-control" id="index_num">
	       	   	</div>
	       	   	<div class="col-md-4">
	       	   		<label>Registration No </label>
	    			<input type="text" name="reg_num" class="form-control" id="reg_num">		
	       	   		
	       	   	</div>

	       	   	<div class="col-md-4">
	       	   		<label>NIC No </label>
	    			<input type="text" name="nic_num" class="form-control" id="nic_num">		
	       	   		
	       	   	</div>
	       	   	
	    		
	       	   </div>
	       	</div>
       	   <div class="form-group">
	       	   <div class="row">
	       	   	<div class="col-md-6">
	       	   		<label>Email</label>
	       	   		<input type="text" name="email" class="form-control" id="email">
	       	   	</div>
	       	   	<div class="col-md-6">	       	   		
	    			<label>Select Group </label>
			       	<select name="batch_id" id="batch_id" class="form-control" style="width: 200px;">
		 				@foreach($batch as $data)
		 					<option value="{{$data->batch_id}}" >{{$data->batch_name}}</option>
		 				@endforeach                                
						   
		            </select>		
	       	   		
	       	   	</div>
	       	   	
	    		
	       	   </div>
	       	</div>
       	   <div align="right">

       	   	<button type="reset" name="btn_reset" id="btn_reset" class="btn btn-info btn-sm">Reset</button>
       	   	<button name="btn_cancel" id="btn_cancel" class="btn btn-warning btn-sm">Abort</button>
       	   	<button type="submit" name="btn_create" id="btn_create" class="btn btn-success btn-sm">Create</button>

       	   </div>



       	</form>
       </div>
    </div>
      
    </div>
  </div>
  </div>
</div>


<div class="container">
    
		<!-- Modal -->
		
	<div class="modal fade bd-example-modal-lg" id="csv-modal" aria-labelledby="csvModal" role="dialog">
		<div class="modal-dialog modal-lg">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			
			</div>
			<div class="modal-body">
				
				<div style="overflow: auto">
					<form>

					<table id="csv-table" class="table table-striped table-bordered">
						<thead>
							{{-- <tr>
								<th>Reg No</th>
								<th>Index No</th>
								<th>Initials</th>
								<th>Names</th>
								<th>Lastname</th>
								<th>NIC No</th>
								<th>Email</th>
								
							</tr> --}}
							<tr>
								<th>Student ID</th>
								<th>Student Name</th>
								<th>Student Phone</th>						
									
							</tr>
						</thead>
						<tbody>
							



						</tbody>
					</table>
					</form>
				</div>
				
			
			</div>
			
			<div class="modal-footer">
			
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" name="btn_upload" id="btn_upload" class="btn btn-success btn-sm">Upload</button>
			</div>
		</div>
		
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
	$(document).ready(function() {
	$('#csv-table').DataTable();
	});
</script>
<script>
$(document).ready(function(){
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	
	
	$.noConflict();
    
	
	
	$(".nav-tabs a").click(function(){
        $(this).tab('show');
    });


	$("#btn_proceed").click(function(){        
		$('#csv-modal').modal('show');
    });



	$('#btn_proceed').click(function(){
		$.ajax({
			url:"{{route('StudentController.csv')}}",
			method:"POST",
			data:new FormData(this),
			dataType:'json',
			contentType:false,
			cache:false,
			processData:false,
			success:function(jsonData)
			{
				console.log(jsonData);
				// $('#upload-file').val('');
				// $('#csv-table').DataTable({
				// data  :  jsonData,
				// columns :  [
				// { data : "student_id" },
				// { data : "student_name" },
				// { data : "student_phone" }
				// ]
				// });
				
			}		
		});
		$('#csv-modal').modal('show');
 	});
	
});
</script>

@endsection