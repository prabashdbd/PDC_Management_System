@extends('layouts.app')
@section('content')
@section('styles1')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('Username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Role --}}
                        <div class="form-group row">
                            <label for="role-selection" class="col-md-4 col-form-label text-md-right">{{ __('Register as') }}</label>

                            {{-- <div class="col-md-6">
                                <input id="role-selection" type="" class="form-control" name="role_selection" required>
                            </div> --}}
                            
                            {{-- <div class="dropdown" name="role_id">
                                <input  class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" value="Select"/>
                                 <span class="caret"></span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown">
                                      <li><a href="#">User</a></li>
                                      <li><a href="#">Company</a></li>
                                      <li><a href="#">Student</a></li>
                                    </ul>
                                </div> --}}
                            <div class="col-md-6">                                
                                    <select  name="role_id" id="role_id" class="form-control" style="height: 35px">                            
                                        <option value="2" selected>User</option>                                
                                        <option value="3">Company</option>
                                        <option value="4">Student</option>   
                                    </select>                                
                            </div>
                            
                        </div>
                        {{-- Role --}}

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

{{-- <script type="text/javascript">
    $('#selection').on('change',function () {
        alert("Single Click");
        console.log("duhufdah");

    });
    
</script> --}}



 {{-- $('.cmbDivHead').on('click',function () {
    $('#txtDivisionalHead').val($(this).attr('data-value'));
    $('#divDiviHead').html($(this).html());
}) --}}

@endsection
