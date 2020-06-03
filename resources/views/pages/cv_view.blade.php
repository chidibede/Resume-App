@extends('layouts.all')
@section('content')
<body class="w3-light-grey">


  @if ($user)
      
<!-- Page Container -->
<div class="w3-content w3-margin-bottom" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding ">
  
    <!-- Left Column -->
    <div class="w3-third w3-margin-top ">
    
    
              {{-- Users Info Container --}}
      {{-- Getting data from users table --}} 
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="/img/default.png"  height="400" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h3 style="background: #fafafa;">{{$user->name}}</h3>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-blue"></i>{{$user->profession ?? 'N/A'}}</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i>{{$user->location ?? 'N/A'}}</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i>{{$user->email}}</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>{{$user->phone_number ?? 'N/A'}}</p>
          <p><i class="fa fa-globe fa-fw w3-margin-right w3-large w3-text-blue"></i>{{$user->website ?? 'N/A'}}</p>
          <p><i class="fa fa-linkedin fa-fw w3-margin-right w3-large w3-text-blue"></i>{{$user->linkedin ?? 'N/A'}}</p>
          <hr>
          {{-- End of data calls from users table --}}
                {{-- End of Users Info Table --}}


                {{-- Skills section --}}
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-blue"></i>Skills</b></p>
          @foreach($skills as $skill)
            <p>{{ $skill->skill_name}}</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-blue pl-2" style="width:{{ $skill->level}}%">{{ $skill->level}}</div>
            </div>
            <br>
          @endforeach


          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-blue"></i>Languages</b></p>
          
          @foreach($languages as $language)
            <p>{{ $language->language_name}}</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-round-xlarge w3-blue pl-2" style="height:24px;width:{{ $language->level}}%">{{ $language->level}}</div>
            </div>
          @endforeach

          <br>
        </div>
      </div>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird w3-margin-top ">
      
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Work Experience</h2>
        
         
        {{-- Current Job Table/Info --}}
        @foreach($currentjobs as $currentjob)
          <div class="w3-container">
            <h5 class="w3-opacity"><b>{{ $currentjob->job_title}}/{{ $currentjob->employer}}/{{ $currentjob->location}}</b></h5>
            <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ $currentjob->start_date}} - <span class="w3-tag w3-blue w3-round">{{ $currentjob->end_date}}</span></h6>
            <p>{{ $currentjob->job_description}}</p>
            <hr>
          </div>
          @endforeach  
          {{-- End of Current Job  --}}


        {{-- Previous Job/Work Table/Info --}}
        @foreach ($works as $work)
          <div class="w3-container">
            <h5 class="w3-opacity"><b>{{ $work->job_title}}/{{ $work->employer}}/{{ $work->location}}</b></h5>
            <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ $work->start_date}} - <span class="w3-tag w3-blue w3-round">{{ $work->end_date}}</span></h6>
            <p>{{ $work->job_description}}</p>
            <hr>
          </div>    
        @endforeach
        {{-- End of Job/Work Table/Info --}}
      </div>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Education</h2>
        
        <div class="w3-container">
        @foreach ($educations as $education)
        <div class="w3-container">
          <h5 class="w3-opacity"><b>{{ $education->school}}</b></h5>
        <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ $education->start_date }} - {{$education->end_date}}</h6>
          <p>{{ $education->certificate}}</p>
          <hr>
        </div>
        @endforeach
      </div>
    <!-- End Right Column -->
    </div>

    
    <div class="w3-container w3-card w3-white mt-4 w3-margin-bottom">
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-handshake-o fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Volunteer Experience</h2>
      
      {{-- Previous Job/Work Table/Info --}}
      @foreach ($volunteers as $volunteer)
      <div class="w3-container">
        <h5 class="w3-opacity"><b>{{ $volunteer->job_title}}/{{ $volunteer->organization}}/{{ $volunteer->location}}</b></h5>
        <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ $volunteer->start_date}} - <span class="w3-tag w3-blue w3-round">{{ $volunteer->end_date}}</span></h6>
        <p>{{ $volunteer->job_description}}</p>
        <hr>
      </div>    
    @endforeach
    {{-- End of Job/Work Table/Info --}}
    
  <!-- End Right Column -->
  </div>
    

  <div class="w3-container w3-card w3-white mt-4">
    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-cogs fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Projects</h2>
    
    <div class="w3-container">
    @foreach ($projects as $project)
    <div class="w3-container">
      <h5 class="w3-opacity"><b>{{ $project->name}}</b></h5>
      <h6 class="w3-text-blue"><a href="{{ $project->link }}">{{ $project->link }}</a></h6>
      <p>{{ $project->description}}</p>
      <hr>
    </div>
    @endforeach
  </div>
  <div class="w3-container w3-margin-bottom">
      <p>Find me on social media.</p>
        <a href="{{$user->facebook}}" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i> </a> 
        <a href="{{$user->twitter}}" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
        <a href="{{$user->linkedin}}" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i> </a> 
  </div>
<!-- End Right Column -->
</div>
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
</div>

@else
<h1>Unauthorized to view page</h1>

@endif
</body>

@endsection