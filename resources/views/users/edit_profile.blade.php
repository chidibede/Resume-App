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
                        <div class="p-2">
                            {!! Form::open(['action' => ['ProfileController@update', $user], 'method' => 'post', 'enctype'=>'multipart/form-data']) !!}
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', $user->name, [ 'class' =>  'form-control']) }}
                            </div>
                
                
                            
                            <div class="form-group">
                                {{ Form::label('username', 'Username') }}
                                {{ Form::text('username', $user->username, [ 'class' =>  'form-control', ]) }}
                                
                            </div>

                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::text('email', $user->email, [ 'class' =>  'form-control', ]) }}
                                
                            </div>

                            
                
                            {{-- <div class="form-group">
                                {{ Form::file('cover_image') }}
                            </div> --}}
                
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10">
                                        {{ Form::hidden('_method', 'PUT')}}
                                        {{ Form::submit('Update', ['class' => 'btn btn-success pr-4 pl-4']) }}
                                    </div>
                                    <div class="col-md-2 pull-right">
                                        <a href="/profile" class="btn btn-secondary ml-auto pl-4 pr-4 ">Profile</a>
                                    </div>
                                </div>
                               
                            </div>
                
                        {!! Form::close() !!}
                        </div>
                        
                        
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
