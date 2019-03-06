@extends('layouts.adminlte')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" type="text/css" href="/css/dashboard.css">
    {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>  --}}
@endsection
@section('content')
<div class="main-section" style="border:1px solid black; margin-top:10px">
    <div class="dashbord">
        <div class="icon-section">
            <i class="fa fa-users" aria-hidden="true"></i><br>
            <label>Students</label>
            <p>256</p>
        </div>
        
        <div class="detail-section">
            <a href="/students/view">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-green">
        <div class="icon-section">
            <i class="fa fa-building" aria-hidden="true"></i><br>
            <label>Companies</label>
            <p>$ 256</p>
        </div>
        <div class="detail-section">
            <a href="/company/view">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-blue">
        <div class="icon-section">
            <i class="fa fa-bell" aria-hidden="true"></i><br>
            <label>Placements</label>
            <p>9 New</p>
        </div>
        <div class="detail-section">
            <a href="/student/placements">More Info </a>
        </div>
    </div>
    {{-- <div class="dashbord dashbord-blue">
        <div class="icon-section">
            <i class="fa fa-tasks" aria-hidden="true"></i><br>
            <small>Task</small>
            <p>8</p>
        </div>
        <div class="detail-section">
            <a href="#">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-red">
        <div class="icon-section">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
            <small>Cart</small>
            <p>$ 24</p>
        </div>
        <div class="detail-section">
            <a href="#">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-skyblue">
        <div class="icon-section">
            <i class="fa fa-comments" aria-hidden="true"></i><br>
            <small>Mentions</small>
            <p>96</p>
        </div>
        <div class="detail-section">
            <a href="#">More Info </a>
        </div>
    </div> --}}
</div>



<div class="main-section" style="border:1px solid black; margin-top:10px">
    <div class="dashbord">
        <div class="icon-section">
            <i class="fa fa-users" aria-hidden="true"></i><br>
            <label>Students</label>
            <p>256</p>
        </div>
        
        <div class="detail-section">
            <a href="#">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-green">
        <div class="icon-section">
            <i class="fa fa-buysellads" aria-hidden="true"></i><br>
            <label>Publish Adverts</label>
            <p>$ 256</p>
        </div>
        <div class="detail-section">
            <a href="#">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-blue">
        <div class="icon-section">
            <i class="fa fa-bell" aria-hidden="true"></i><br>
            <label>Placement Requests</label>
            <p>9 New</p>
        </div>
        <div class="detail-section">
            <a href="#">More Info </a>
        </div>
    </div>
</div>


<div class="main-section" style="border:1px solid black; margin-top:10px;">
    <div class="dashbord">
        <div class="icon-section">
            <i class="fa fa-users" aria-hidden="true"></i><br>
            <label>Students</label>
            <p>256</p>
        </div>
        
        <div class="detail-section">
            <a href="#">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-green">
        <div class="icon-section">
            <i class="fa fa-money" aria-hidden="true"></i><br>
            <label>Companies</label>
            <p>$ 256</p>
        </div>
        <div class="detail-section">
            <a href="#">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-blue">
        <div class="icon-section">
            <i class="fa fa-bell" aria-hidden="true"></i><br>
            <label>Messages</label>
            <p>9 New</p>
        </div>
        <div class="detail-section">
            <a href="#">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-red">
        <div class="icon-section">
            <i class="fa fa-bell" aria-hidden="true"></i><br>
            <label>Reports</label>
            <p>9 New</p>
        </div>
        <div class="detail-section">
            <a href="#">More Info </a>
        </div>
    </div>
</div>










@endsection