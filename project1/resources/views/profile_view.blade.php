@extends('layouts.adminlte')

@section('styles')
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />    
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  	

@endsection    

<!------ Include the above in your HEAD tag ---------->
@section('content')
<form id="upload_csv" method="post" enctype="multipart/form-data" action={{url('/csv/view')}}>
    {{csrf_field()}}
    <div class="col-md-3">
     <br />
     <label>Add More Data</label>
    </div>  
        <div class="col-md-4">  
            <input type="file" name="csv_file" id="csv_file" accept=".csv" style="margin-top:15px;" />
        </div>  
        <div class="col-md-5">  
            <input type="submit" name="upload" id="upload" value="Upload" style="margin-top:10px;" class="btn btn-info" />
        </div>  
        <div style="clear:both"></div>
</form><br>
<table class="table table-striped table-bordered" id="data-table">
    <thead>
        {{-- <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Phone Number</th>
        </tr> --}}
    </thead>
</table>

@endsection




@section('scripts')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function(){
        
        $('#upload_csv').on('submit', function(event){
        
        event.preventDefault();
        var url = $(this).attr('action');
        var formData = new FormData(this);
        $.ajax({
            url:url,
            method:"POST",
            data:formData,
            dataType:'json',
            contentType:"application/json",
            cache:false,
            processData:false,
            success:function(jsonData)
            {
                var details = JSON.parse(jsonData);
                console.log(details);
                // $('#csv_file').val('');
                // $('#data-table').DataTable({
                // data  :  jsonData,
                // columns :  [
                // { data : "student_id" },
                // { data : "student_name" },
                // { data : "student_phone" }
                // ]
                // });
            }
        });
        });
    });

</script>
@endsection