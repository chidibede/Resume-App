@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="content-section">
                        <p>Logged in</p>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <img src="/img/default.png" alt="" height="200">
                            </div>
                            <div class="col-md-6">
                                <h3>{{ $user->name}}</h3>
                                <p>{{ $user->username}}</p>
                                <p>{{ $user->email}}</p>
                                <p>{{ $user->profession}}</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="/profile/edit" class="btn btn-primary btn-lg mr-4">Edit Profile</a>
                            <a href="/generate_cv" class="btn btn-success btn-lg mr-4">Generate CV </a>
                            <a href="/cv_view" class="btn btn-secondary btn-lg">View CV </a>
                        </div>
                        
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
