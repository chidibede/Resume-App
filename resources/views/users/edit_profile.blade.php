@extends('layouts.all')

@section('content')
<div class="w3-container w3-content" style="max-width:1400px;"> 
  <!-- The Grid -->
<div class="w3-row">
 <div class="w3-container w3-card w3-white w3-round w3-padding-large" style="max-width:680px;margin:80px auto;">
        <header>
          <h2>Edit Profile</h2>
        </header>

                    @if (session('status'))
                        <div class="w3-text-red" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="content-section">
                        <div class="pl-2 pr-2">
                            {!! Form::open(['action' => ['ProfileController@update', $user], 'method' => 'post', 'enctype'=>'multipart/form-data']) !!}
                            <p>
                                {{ Form::label('name', 'Name', ['class' =>  'w3-text-blue', ]) }}
                                {{ Form::text('name', $user->name, [ 'class' =>  'w3-input']) }}
                            </p>
                
                
                            
                            <p>
                                {{ Form::label('username', 'Username', ['class' =>  'w3-text-blue', ]) }}
                                {{ Form::text('username', $user->username, [ 'class' =>  'w3-input', ]) }}
                                
                            </p>

                            <p>
                                {{ Form::label('email', 'Email', ['class' =>  'w3-text-blue', ]) }}
                                {{ Form::text('email', $user->email, [ 'class' =>  'w3-input', ]) }}
                                
                            </p>

                            <p>
                                {{ Form::label('profession', 'Profession', ['class' =>  'w3-text-blue', ]) }}
                                {{ Form::text('profession', $user->profession, [ 'class' =>  'w3-input', ]) }}
                                
                            </p>

                            <p>
                                {{ Form::label('location', 'Location', ['class' =>  'w3-text-blue', ]) }}
                                {{ Form::text('location', $user->location, [ 'class' =>  'w3-input', ]) }}
                                
                            </p>

                            <p>
                                {{ Form::label('phone_number', 'Phone Number', ['class' =>  'w3-text-blue', ]) }}
                                {{ Form::text('phone_number', $user->phone_number, [ 'class' =>  'w3-input', ]) }}
                                
                            </p>

                            
                
                            {{-- <p>
                                {{ Form::file('cover_image') }}
                            </p> --}}
                
                            <p>
                                {{ Form::hidden('_method', 'PUT')}}
                                {{ Form::submit('Update', ['class' => 'w3-button w3-blue w3-round ']) }}
                                <span class="pull-right"><a href="/profile" class="w3-button w3-gray w3-round">Profile</a></span>
                               
                            </p>
                
                        {!! Form::close() !!}
                        </div>
                        
                        
                      </div>
                </div>
            </div>
        </div>
@endsection
