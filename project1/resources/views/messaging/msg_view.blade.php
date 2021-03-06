@extends('layouts.adminlte')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> 
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
@endsection
@section('content')
  <h3>View Messages</h3><br> 
  
  <div>
        <table id="messageViewtable" name="messageViewtable" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Recipient</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($msg as $msg)
                <tr>
                <td>{{$msg->created_at}}</td>
                <td>{{$msg->email}}</td>
                <td>
                <button class="btn btn-primary btn-sm" id ="view" data-toggle="modal" data-id="{{$msg->message_id}}">View</button>                
                <button class="btn btn-danger btn-sm" data-toggle="modal">Delete</button></td>
                </tr>
                @endforeach
                
            </tbody>
            <tfoot>   
            </tfoot>
        </table>
    </div>

    <div class="modal fade" id="msg_view_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">{{$msg->title}}</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <p>{{$msg->message}}</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    $('#messageViewtable').DataTable();
});

</script>

@endsection
