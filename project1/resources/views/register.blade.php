<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" a href="css/style.css">
</head>
<body>
<div class="container">
    {{-- <form action="store" method="POST"> --}}

    {!! Form::open(['method'=>'POST','action'=>'reg_test@store'])!!}    
        @csrf
        <div class="form-group">
        	{!!Form::label('name','Enter Title:')!!}
        	{!!Form::text('name',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
        	{!!Form::label('address','Enter Address:')!!}
        	{!!Form::text('address',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
        	{!!Form::label('email','Enter Email:')!!}
        	{!!Form::text('email',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
        	{!!Form::submit('Submit',['class'=>'btn btn-primary'])!!}
        	
        </div>
        {{-- <p class="paragraph"> Registration </p>
        <input type="text" name="name" placeholder="Company Name" id="name" class="ipt"/>
        <input type="text" name="address" placeholder="Company Address" id="address"class="ipt"/>
        <input type="text" name="email" placeholder="Email" id="email" class="ipt"/>
        <button class="btn">Sign Up</button> --}}
        	

    {!!Form::close()!!} 
    @if(count($errors)>0)
    	<div class="alert alert-danger">
    		<ul>
    			
    			@foreach($errors->all() as $error)

    				<li>{{$error}}</li>




    			@endforeach

    		</ul>





    @endif



</div>


    
</body>
</html>