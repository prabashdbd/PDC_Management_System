@extends('layouts.adminlte')

@section('styles')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
@endsection
@section('content')
    {{-- <span id="message" class="text-success"></span> --}}
    <h3>Approve Company Requests</h3><br>
    <table id="advert_approve" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Title</th>
                <th>No of Vacancies</th>
                <th>Posted On</th>                   
                <th>Actions</th>  
                
            </tr>
        </thead>
        <tbody>
            
            @foreach($advert_appr as $data)
            <tr>
            <td>{{$data->comp_name}}
            <td>{{$data->ad_name}}</td>            
            <td>{{$data->no_vacancies}}</td>
            <td>{{$data->created_at}}</td>
            <td>
            <button class="btn btn-primary btn-sm toApprove" id ="view" data-toggle="modal" data-id="{{$data->id}}">View</button></td>
            </tr>
            @endforeach
            
            
        </tbody>
    </table>

    <div class="modal fade" id="approve_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center><p><h3 id="modal_heading"></h3><p></center>
                <center><p><h5 id="modal_sub_heading"></h5><p></center>                
            </div>
            <div class="modal-body">
                <label><u>Brief description on the advert</u></label>
                <p id="ad_infomation"></p><br>
                <center>
                <div id ='ad_frame'>
                    <iframe src="" id="advert_pdf" frameborder="0" width="100%" height="400px"></iframe>
                </div>
                  
                </center>
            </div>
            <div class="modal-footer">            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" id="approve" class="btn btn-success approve" data-id="">Approve</button>
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
      $('#advert_approve').DataTable();
    });

    $('.toApprove').on('click',function(e){         
        e.preventDefault();
        var id = $(this).data('id');
        $("#approve").data("id", id);
        console.log(id);
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/company/adverts/modalview',
            type: 'GET',
            data: {id:id}, 
            success: function(data)
            {     
                console.log(data);
                $('#modal_heading').html(data[0].ad_name);
                $('#modal_sub_heading').html("Published by"+" "+data[0].comp_name);
                $('#ad_infomation').html(data[0].ad_info);
                $('#advert_pdf').attr("src","/"+data[0].ad_path);
                $('#ad_frame').show();
            },
            error: (error) => {
                console.log(JSON.stringify(error));
            }
        });
        $('#approve_modal').modal('show');
          
                                     
        
    });    
    
    $('.approve').on('click',function(e){
        var id = $(this).data('id');
        
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/company/adverts/approve',
            type: 'POST',
            data: {id:id}, 
            success: function(data)
            {     
                console.log(data);
                swal("Success!", "Advert approved successfully", "success");
                $('#approve_modal').modal('hide');
                
            },
            error: (error) => {
                console.log(JSON.stringify(error));
            }
        });
        setTimeout(function(){  
            location.reload();;  
        }, 3000);        
        
    });
 </script>

@endsection