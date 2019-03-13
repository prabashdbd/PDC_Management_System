@extends('layouts.adminlte')

@section('styles')      
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	

	<link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
	<link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_style.min.css' rel='stylesheet' type='text/css' />
	{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.css" />
  	

@endsection

@section('content')
@include('layouts.success')
<div class="container-fluid">
  <h3>Send message to students</h3><br>

  <div class="panel panel-primary col-sm-8">
  	<div class="panel-body">
  		<form method="POST" id="student_message" action="{{url('/message/send/student')}}">
			{{csrf_field()}}
  			<div class="form-group">
       	   	<label>Recipient</label><br>
    		<select class="selectpicker form-control dynamic" name="batch_id" id="batch_id" data-live-search="true" data-dependent="student" title='Select Batch'>
				
				@foreach($batch as $data)					
					<option value="{{$data->batch_id}}" >{{$data->batch_name}}</option>
				@endforeach
			</select>
			</div><br>
			  
			<div class="row">
				<div class="form-group col-md-10">
					<select class="selectpicker form-control" name="student_list[]" id="student_list" multiple data-live-search="true" data-selected-text-format="count" title="Select Recipient">
						
					</select>			
				</div><div class="col-md-2">
					<button type="button" id="select_all" class="btn btn-primary">Check All</button>
					<button type="button" id="deselect_all" class="btn btn-primary" style="display: none";>Uncheck All</button>
				</div>
			</div>
			  <br>
       	   <div class="panel panel-default">
       	   	<div class="panel-body">
       	   		
							<div class="form-group">
								<label>Title</label><br>
								<input type="text" id="title" name="title" class="form-control">
							</div>
							{{-- <div class="form-group">
								<label>Name</label><br>
								<input type="text" id="name" class="form-control">
							</div> --}}
								
							<div class="form-group">
								<label>Message</label><br>
								<textarea type="text" name="message" id="message" class="form-control" id="message-text"></textarea>
							</div>

							<div align="right">
								<button type="reset" name="btn_cancel" id="btn_cancel" class="btn btn-warning btn-sm">Cancel</button>
								<button type="submit" name="btn_send" id="btn_send" class="btn btn-success btn-sm">Send</button>
							</div>
       	   		
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
    });
    
  });
  
//   $(function() {  
//  	$('.selectpicker').selectpicker('selectAll');
//   });
	// select_all
	$("#select_all").click(function(){        
		$('#student_list').selectpicker('selectAll');
		$('#select_all').hide();		
		$('#deselect_all').show();
    });
	$("#deselect_all").click(function(){        
		$('#student_list').selectpicker('deselectAll');
		$('#deselect_all').hide();		
		$('#select_all').show();
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
		});

	}
  });  
  

</script>
@endsection    