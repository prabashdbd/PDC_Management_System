@extends('layouts.adminlte')

@section('styles')      
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	

	<link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
	<link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_style.min.css' rel='stylesheet' type='text/css' />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.css" />
  	

@endsection

@section('content')
<div class="container-fluid">
  <h3>Send message to students</h3><br>

  <div class="panel panel-primary col-sm-8">
  	<div class="panel-body">
  		<form>
			{{csrf_field()}}
  			<div class="form-group">
       	   	<label>Recipient</label><br>
    		<select class="selectpicker form-control dynamic" name="batch_id" id="batch_id" data-live-search="true" data-dependent="student">
				<option  value="">Select Batch</option>
				@foreach($batch as $data)					
					<option value="{{$data->batch_id}}" >{{$data->batch_name}}</option>
				@endforeach
			</select>
			</div><br>
			  
			<div class="form-group">
			<select class="selectpicker form-control" name="student_list" id="student_list" multiple data-live-search="true" data-none-selected-text="Select Recipient">
			   
			</select>
			
			
       	   </div><br>
       	   <div class="panel panel-default">
       	   	<div class="panel-body">
       	   		<form>
       	   			<div class="form-group">
       	   				<label>Title</label><br>
       	   				<input type="text" class="form-control">
       	   			</div>
       	   			<div class="form-group">
       	   				<label>Message</label><br>
       	   				<textarea id="message" class="form-control" id="message-text"></textarea>
       	   			</div>

       	   			<div align="right">
	       	   			<button name="btn_cancel" id="btn_cancel" class="btn btn-warning btn-sm">Cancel</button>
	       	   			<button name="btn_send" id="btn_send" class="btn btn-success btn-sm">Send</button>
	       	   		</div>
       	   		</form>
       	   </div>
  		</form>
  	</div>
  </div>
</div>

@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.min.js'></script>
  
<script>
  $(document).ready(function() {
	
    $('textarea#message').froalaEditor({
    height: 150
    })
    
  });
  $('.dynamic').change(function(){
	
	if($(this).val() !='')	{
		
		var value = $(this).val();
		var dependent = $(this).data('dependent');
		var _token = $('input[name="_token"]').val();
		$.ajax({
			url:"{{route('messageController.fetch')}}",
			method:"POST",
			data:{value:value,_token:_token,
			dependent:dependent},
			success:function(data)
			{
				console.log(data);
				$('#student_list').html(data);
				$('#student_list').selectpicker('refresh');
				
				
			}
		})

	}
  });
</script>
@endsection    