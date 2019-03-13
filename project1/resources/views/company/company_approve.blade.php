@extends('layouts.adminlte')

@section('styles')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
@endsection
@section('content')
    {{-- <span id="message" class="text-success"></span> --}}
	<h3>Approve Company Requests</h3>
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
            
          @foreach($appr_company as $data)
              <tr>
                <td>{{$data->comp_name}}</td>
                <td>{{$data->comp_add_no.','.$data->comp_add_street1.','.$data->comp_add_street2.','.$data->comp_add_city}}</td>
                <td>{{$data->comp_est_date}}</td>
                <td>{{$data->comp_website}}</td>
                <td>Placement Areas</td>
                <td>Number of Vacancies</td>
                



                <td>
                {{-- <button class="btn btn-primary btn-success approve" value="{{$data->id}}" id ="approve" data-id="{{$data->id}}">Approve</button> --}}
                <button class="btn btn-primary btn-success toApprove" data-toggle="modal" value="{{$data->id}}" data-id="{{$data->id}}">Approve</button>
                <button class="btn btn-primary btn-danger toDelete" data-toggle="modal" value="{{$data->id}}" data-id="{{$data->id}}">Remove</button>
                
                {{-- <button class="btn btn-danger btn-sm" data-toggle="modal">Delete</button>--}}
                </td>
              </tr>
          @endforeach
            
            
        </tbody>
    </table>

    <div class="modal fade" id="confirm_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Approve company</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <p>The company will be registered with PDC of UCSC</p>
            </div>
            <div class="modal-footer">
            <button type="button" id="approve" value="" class="btn btn-success approve">Approve</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
        </div>
    </div>
    
    <div class="modal fade" id="delete_confirm_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Delete company</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <p>The company request will be removed. Proceed?</p>
            
            </div>
            <div class="modal-footer">
            <button type="button" id="delete" value="" class="btn btn-danger delete">Yes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
        </div>
    </div>
  

 
@endsection
@section('script')

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function() {
      $('#example').DataTable();
    });

    $('.approve').on('click',function(e){         
        e.preventDefault();
        var id = $(this).data('id');
        console.log(id);
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/company/approve',
            type: 'POST',
            data: {id:id}, 
            success: function(data)
            {     
                console.log(data);
                $('#confirm_modal').modal('hide');
                swal("Success!", "Company Approved", "success");
            },
            error: (error) => {
                console.log(JSON.stringify(error));
            }
        });
          
        setTimeout(function(){  
            location.reload();;  
        }, 3000);
                               
        
    });
    $('.delete').on('click',function(e){         
        e.preventDefault();
        var id = $(this).data('id');
        console.log(id);
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/company/delete_request',
            type: 'POST',
            data: {id:id}, 
            success: function(data)
            {     
                console.log(data);
                $('#delete_confirm_modal').modal('hide');
                swal("Success!", "Company Request Deleted", "success");
            },
            error: (error) => {
                console.log(JSON.stringify(error));
            }
        });
          
        setTimeout(function(){  
            location.reload();;  
        }, 3000);  
    });
    
    $('.toApprove').on('click',function(e){
        var id = $(this).data('id');
        $("#approve").data("id", id);
        $('#confirm_modal').modal('show');
        
        console.log(id);
        
    });
    $('.toDelete').on('click',function(e){        
        var id = $(this).data('id');
        $("#delete").data("id", id);
        $('#delete_confirm_modal').modal('show');
        
        console.log(id);        
    });


 </script>

@endsection