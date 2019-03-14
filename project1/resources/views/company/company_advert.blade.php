@extends('layouts.adminlte')

@section('styles')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_style.min.css' rel='stylesheet' type='text/css' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
@endsection
@section('content')


<div id="published_adverts" >
    <div class="row">
        <div class="col-md-10">  
            <h3><u>Publish Adverts</u></h3>
        </div>
        <div class="col-md-2">  
            <br><button type="button" id="add_new" class="btn btn-primary">Add New Advert</button>
        </div>
    </div><br><br>
    <table id="published_adverts_table" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Posted On</th>
                <th>Approved On</th>                    
                <th>Actions</th>                    
            </tr>    
        </thead>       
        <tbody>
            @foreach($advert as $data)
            <tr>
            <td>{{$data->ad_name}}</td>
            <td>{{$data->created_at}}</td>
            <td>@if($data->approved_at==null)
                {{'Advert not yet approved'}}
            
            @else
            {{$data->approved_at}}
            @endif   
            </td>         
            <td>
            <button class="btn btn-primary btn-sm" id ="view" data-toggle="modal" data-id="{{$data->id}}">View</button></td>
            </tr>
            @endforeach                
        </tbody>
    </table>
</div>

<div class="modal fade" id="advert-modal" aria-labelledby="advertModal" role="dialog">
    <div class="modal-dialog" style="width:90%;">
    
        <!-- Modal content-->		
        <div class="modal-content">
            <form method="POST" id="add_advert_form" enctype="multipart/form-data" action="{{url('/company/adverts/add')}}">
                {{csrf_field()}}
            <input hidden type="text" name="cid" value="{{$cid}}">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>			
            </div>
            <div class="modal-body">
                <div class="panel panel-default">                   
                    <div class="panel-heading text-center">
                        <h4>Publish A New Advert</h4>
                    </div>
                    <div class="panel-body">
                        
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Title</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="ad_name" id="ad_name">
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">No of Vacancies <small style="color:red">(*)</small></label>
                                <div class="col-lg-5">
                                    <input class="form-control" type="number" name="no_vacancies" id="no_vacancies">
                                </div>
                            </div><br><br>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Add file (PDF)</label>
                                <div class="col-lg-8">
                                    <input type="file" id="advert_file" accept="application/pdf" class="form-control" name="advert_file"><br>
                                </div>
                                    
                            </div>
                            

                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Brief Description</label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" type="text" name="ad_info" id="ad_info"></textarea>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
    
            </div>
            <div class="modal-footer">                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Publish</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
@section('script')
    
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> 
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.min.js'></script>   
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
<script>    
    $(document).ready(function() {
        $('#published_adverts_table').DataTable();
    });
    $('#add_new').click(function(){
        $('#advert-modal').modal('show');
    });
    $('#ad_info').froalaEditor({      
    height: 150
    });
</script>



<script>
$('#add_advert_form').on('submit',function(e){     
    e.preventDefault();    
    var url = $('#add_advert_form').attr('action');
    $.ajax({
        url: url,
        type: 'POST',
        data: new FormData(this), 
        // contentType: "application/json; charset=utf-8",
        // dataType: "json",
        processData: false,
        contentType: false,
        success: function(data)
        {     
            console.log(data);
            swal("Success!", "Advert published and pending for approval", "success");
            $('#advert-modal').modal('hide');           
                    
        },
        error: (error) => {
                console.log(JSON.stringify(error));
        }
    });                         
        
    setTimeout(function(){  
        location.reload();  
    }, 2000);               
    
});
</script>


@endsection