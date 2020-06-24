@extends('layouts.all')

@section('content')

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->

    
    <!-- Middle Column -->
    <div class="w3-container " style="max-width:800px; margin:60px auto;">
      
      <div class="w3-container w3-card w3-white w3-round w3-margin-left w3-padding-large">
       <header><h2>Profile<span class="w3-right w3-opacity w3-medium">Logged in</span></h2><br></header> 

            @if (session('status'))
                <div class="w3-panel w3-pale-green w3-round" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        
       <img src="/storage/profile_pics/{{$user->profile_pics}}" alt="Image" height="200">
        
        <h3 class="w3-margin-left">{{ $user->name}}</h3>
        <p class="w3-margin-left">{{ $user->username}} </p>
        <p class="w3-margin-left">{{ $user->email}}</p>
         <p class="w3-margin-left">{{ $user->profession}}</p>

        <div class="w3-bar w3-margin-top w3-center"><br>
        <a href="/generate_cv" class="w3-button w3-green w3-margin-bottom w3-medium"><i class="fa fa-pencil-square-o"></i>  Generate CV</a> 
        
         <a href="/cv_view/{{Auth::user()->username}}" class="w3-button w3-gray w3-margin-bottom w3-medium"><i class="fa fa-file-text"></i>  View CV</a>

        <a href="/profile/edit" class="w3-button w3-blue w3-margin-bottom w3-medium"><i class="fa fa-address-card"></i>  Edit Profile</a> 
         </div>
      </div><br>
     



@endsection
