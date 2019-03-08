@extends('layouts.adminlte')
@section('styles')
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection

@section('content')
@include('layouts.success')
    <section class="content">
        <h3>Profile Management</h3>
        
        <p><a class="btn btn-primary pull-right" href="{{url('/student/profile/edit')}}" role="button">Edit details</a></p>
        
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{'/'.$test[0]->img_path}}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{$test[0]->student_initials.' '.$test[0]->student_lastname}}</h3>                        

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Email</b><a class="pull-right">{{$test[0]->email}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Mobile Number</b><a class="pull-right">{{$test[0]->student_contact}}</a>
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
                            <li class="active"><a href="#personal" data-toggle="tab">Perosnal</a></li>
                            <li><a href="#acedemic" data-toggle="tab">Academic</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="personal">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>Name</b><a class="pull-right">{{$test[0]->student_initials.' '.$test[0]->student_lastname}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>NIC</b><a class="pull-right">{{$test[0]->nic_no}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Index Number</b><a class="pull-right">{{$test[0]->index_num}}</a>
                                            </li> 
                                            <li class="list-group-item">
                                                <b>Registration Number</b><a class="pull-right">{{$test[0]->reg_num}}</a>
                                            </li>
                                                                    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="acedemic">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>Degree course</b><a class="pull-right">{{$test[0]->degree}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>General / Special</b><a class="pull-right">{{$test[0]->degree_type}}</a>
                                            </li>                                                                                     
                                                                    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                
                
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
@endsection