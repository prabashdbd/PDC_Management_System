@extends('layouts.app')

@section('styles')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" a href="css/style.css">
@endsection    

<!------ Include the above in your HEAD tag ---------->
@section('content')
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <!-- <div class="profile-img">
                            <img src="images/kudda.jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                      @foreach($company as $data)
                                        {{$data->comp_name}}
                                      @endforeach 
                                    </h5>
                                    <h6>
                                      @foreach($company as $data)
                                        {{$data->comp_address}}
                                      @endforeach
                                    </h6>
                                    <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contact Details</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>CONTACT DETAILS</p>
                                <ul>
                                    @foreach($contact as $data)
                                        {{$data->tel}}
                                      @endforeach                                
                                </ul>
                                <ul>
                                    @foreach($contact as $data)
                                        {{$data->fax}}
                                      @endforeach                                
                                </ul>
                                <ul>
                                    @foreach($contact as $data)
                                        {{$data->email}}
                                      @endforeach                                
                                </ul>

                            {{-- <a href="">Website Link</a><br/> --}}
                            <p>SPECIALIZED AREAS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-borderless">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <label>Company Website</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                   @foreach($company as $data)
                                                    {{$data->comp_website}} 
                                                   @endforeach 

                                                </p>
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <label>Company Established Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                @foreach($company as $data)
                                                    {{$data->comp_est_date}} 
                                                   @endforeach</p>
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <label>Company Registration Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                @foreach($company as $data)
                                                    {{$data->comp_reg_num}} 
                                                   @endforeach</p>
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <label>Company Registered Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                @foreach($company as $data)
                                                    {{$data->comp_reg_date}} 
                                                   @endforeach</p>
                                            </div>
                                    </div>



                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <label>Company Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p></p>
                                            </div>
                                        </div> -->
                            </div>
                            {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        @endsection