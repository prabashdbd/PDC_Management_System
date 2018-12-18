@extends('layouts.adminlte')

@section('styles')
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
     
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}
    
@endsection
@section('content')
  <div class="container-fluid">
  <h3>Add Students</h3>
  <ul class="nav nav-tabs">
    
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
       	   	<label>Group Name </label>
    		<input type="text" name="batch_name" class="form-control" id="batch_name">
       	   </div>
       	   

       	   <div class="form-group">
       	   	<label>Intership Period</label>
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
	       <div class="panel-heading">Add students by a list<small style="color: white">&nbsp(Name, Reg: NO, Index NO, Email)</small>
		   </div>
	       <div class="panel-body">
	       	<form >
	       		{{csrf_field()}}
	       	  <div class="form-inline">
	       	   <label>Select Group&nbsp </label>
	       	   <select name="group_id" id="group_id" class="form-control" style="width: 200px;">
		 				@foreach($batch as $data)
		 					<option value="{{$data->batch_id}}" >{{$data->batch_name}}</option>
		 				@endforeach                                
						   
		            </select>
               </div><br>

               <div class="form-inline">
               	<label>Choose file</label>
               	<input type="file" class="form-control-file" id="group_id"><br>
               	
               </div>
               <br><br>

	       	   <div align="right">

	       	   	<button name="btn_cancel" id="btn_cancel" class="btn btn-warning btn-sm">Abort</button>
	       	   	<button name="btn_Upload" id="btn_Upload" class="btn btn-success btn-sm">Upload</button>

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
			       	<select name="group_id" id="group_id" class="form-control" style="width: 200px;">
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

@endsection

@section('script')
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>

@endsection
