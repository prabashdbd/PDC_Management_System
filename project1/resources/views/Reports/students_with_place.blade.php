@extends('layouts.adminlte')
@section('styles')
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> 
    <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.css" rel="stylesheet" />
    
@endsection
@section('content')
<div class="container-fliud">
    <div >
        <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
                <tr>
                        <th>Initials</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Index Number</th>
                        <th>Reg: Number</th>
                        <th>Batch</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    
                    @foreach($stu as $student)
                    <tr>
                        <td>{{$student->student_initials}}</td>
                        <td>{{$student->student_lastname}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->student_contact}}</td>
                        <td>{{$student->index_num}}</td>
                        <td>{{$student->reg_num}}</td>
                        <td>{{$student->batch_detail->batch_name}}</td>
        
        
                    </tr>
                    @endforeach
            
            </tbody>
            <tfoot>   
            </tfoot>
        </table>
    </div>
  </div>
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

