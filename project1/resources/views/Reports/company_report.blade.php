@extends('layouts.adminlte')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> 
    <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.css" rel="stylesheet" />
     
    
@endsection
@section('content')
	<h3>Companys Registered</h3>
    <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Est. Date</th>
                <th>Website</th>
                <th>Placement Areas</th>
                <th>Number of Vacancies</th>
                
            </tr>
        </thead>
        <tbody>
            
          @foreach($company as $data)
              <tr>
                <td>{{$data->comp_name}}</td>
                <td>{{$data->comp_add_no.','.$data->comp_add_street1.','.$data->comp_add_street2.','.$data->comp_add_city}}</td>
                <td>{{$data->comp_est_date}}</td>
                <td>{{$data->comp_website}}</td>
                <td>Placement Areas</td>
                <td>Number of Vacancies</td>
              </tr>
          @endforeach
            
            
        </tfoot>
    </table>
@endsection
@section('script')

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>


<script>
    $(document).ready(function() {
        var buttonCommon = {
        exportOptions: {
            format: {
                body: function ( data, row, column, node ) {
                    // Strip $ from salary column to make it numeric
                    return column === 5 ?
                        data.replace( /[$,]/g, '' ) :
                        data;
                }
            }
        }
    };
    $('#example').DataTable({
    dom: 'Bfrtip',
        buttons: [
        $.extend( true, {}, buttonCommon, {
            extend: 'copyHtml5'
        } ),
        $.extend( true, {}, buttonCommon, {
            extend: 'excelHtml5',
            filename: 'students_with_placements'
        } ),
        $.extend( true, {}, buttonCommon, {
            extend: 'pdfHtml5',
            filename: 'students_with_placements'
        } )
    ]
    });
});
 </script>

@endsection