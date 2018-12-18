@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! as Admin
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
