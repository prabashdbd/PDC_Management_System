@extends('layouts.adminlte')
@section('styles')
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection

@section('content')
    <section class="content">
        <h3>Profile Management</h3><br>
        <div class="row col-md-6">
            <p><a class="btn btn-lg btn-primary" href="{{url('/student/profile/edit')}}" role="button">Edit details</a></p>
            
        </div>
        <div class="col-md-6">
            <form method="POST" id="addcv" enctype="multipart/form-data" action="{{URL::to('/addcv')}}">
                {{csrf_field()}}    
                <div class="form-group">
                    <label for="cv-file">Choose a PDF file</label>          
                    <input type="file" class="form-control-file" name="cv-file"><br>
                    <button type="submit" class="btn btn-success" id="cv_upload" >Upload</button>
                    
                </div> 
            </form>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="" alt="User profile picture">

                        <h3 class="profile-username text-center"></h3>

                        <p class="text-muted text-center"></p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Email</b> <a class="pull-right"></a>
                            </li>
                            <li class="list-group-item">
                                <b>Mobile Number</b> <a class="pull-right"></a>
                            </li>                            
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Personal</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                            <div class="post">
                                <div class="user-block">
                                    {{-- <img class="img-circle img-bordered-sm" src="" alt="user image">
                                    <span class="username">
                                        <a href="#"></a>
                                    </span> --}}
                                    {{-- <span class="description">Joined date - </span>
                                    <h5>Date Of Birth - </h5>
                                    <h5>NIC Number - </h5>
                                    <h5>Gender - </h5>
                                    <h5>Marital Status - </h5>
                                    <h5>Address - </h5>
                                    <h5>Division - </h5>
                                    <h5>Designation - </h5>
                                    <h5>Date Of Join - </h5> --}}
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
@endsection