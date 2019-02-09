@extends('layouts.adminlte')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> 
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}  

    {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> --}}
@endsection
@section('content')
  <h3>Placement Vacancies</h3><br>
  
  
  <div>
  <table id="placementViewtable" name="placementViewtable" class="table table-striped table-bordered table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Initials</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Index Number</th>
                <th>Reg: Number</th>
                <th>Batch</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            
           
        </tbody>
        <tfoot>   
        </tfoot>
    </table>
	</div>


  

  

@endsection

@section('script')

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
      $('#placementViewtable').DataTable();
    });
 </script>

@endsection
