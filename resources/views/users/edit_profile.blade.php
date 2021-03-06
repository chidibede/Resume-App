@extends('layouts.all')

@section('content')

<div class="w3-container w3-content" style="max-width:1400px;"> 
  <!-- The Grid -->
<div class="w3-row">
    {{-- messages alert --}}
    <div class="col-md-8 mt-3 text-center" style="margin-left: 17%">
        @include('inc.messages')
    </div>
 <div class="w3-container w3-card w3-white w3-round w3-padding-large" style="max-width:680px;margin:60px auto;">
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
                            <p>
                            <img src="/storage/profile_pics/{{$user->profile_pics}}" alt="Image" height="200">
                            </p>
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
                                {{ Form::label('website', 'Website', ['class' =>  'w3-text-blue', ]) }}
                                {{ Form::text('website', $user->website, [ 'class' =>  'w3-input', ]) }}
                                
                            </p>

                            <p>
                                {{ Form::label('linkedin', 'Linkedin', ['class' =>  'w3-text-blue', ]) }}
                                {{ Form::text('linkedin', $user->linkedin, [ 'class' =>  'w3-input', ]) }}
                                
                            </p>

                            <p>
                                {{ Form::label('facebook', 'Facebook', ['class' =>  'w3-text-blue', ]) }}
                                {{ Form::text('facebook', $user->facebook, [ 'class' =>  'w3-input', ]) }}
                                
                            </p>

                            <p>
                                {{ Form::label('twitter', 'Twitter', ['class' =>  'w3-text-blue', ]) }}
                                {{ Form::text('twitter', $user->twitter, [ 'class' =>  'w3-input', ]) }}
                                
                            </p>

                            <p>
                                {{ Form::label('profile_pics', 'Profile Picture', ['class' =>  'w3-text-blue', ]) }}
                                {{ Form::file('profile_pics') }}
                            </p>
                        
                
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
