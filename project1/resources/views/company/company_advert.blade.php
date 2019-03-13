@extends('layouts.adminlte')

@section('styles')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
@endsection
@section('content')
<h3>Publish Adverts</h3>
<div id="published_adverts">
</div>
<div id="new_advert">
</div>
    
@endsection
@section('script')

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  --}}

@endsection