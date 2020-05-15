@extends('layouts.app')

@section('content')

<body class="w3-light-grey">

  @if ($user)
      
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
    
              {{-- Users Info Container --}}
      {{-- Getting data from users table --}} 
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="/img/default.png"  height="300" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2 style="background: #ddd;">{{$user->name}}</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->profession ?? 'N/A'}}</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->location ?? 'N/A'}}</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->email}}</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->phone_number ?? 'N/A'}}</p>
          <hr>
          {{-- End of data calls from users table --}}
                {{-- End of Users Info Table --}}


                {{-- Skills section --}}
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          @foreach($skills as $skill)
            <p>HTML/CSS/Javascript</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal pl-2" style="width:{{ $skill->level}}%">{{ $skill->level}}</div>
            </div>
            <p>{{ $skill->skill_name}}</p>
            <br>
          @endforeach


          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          
          @foreach($languages as $language)
            <p>{{ $language->language_name}}</p>
            <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal pl-2" style="height:24px;width:{{ $language->level}}%">{{ $language->level}}</div>
            </div>
          @endforeach

          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
      
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        
         
        {{-- Current Job Table/Info --}}
        @foreach($currentjobs as $currentjob)
          <div class="w3-container">
            <h5 class="w3-opacity"><b>{{ $currentjob->name}}/{{ $currentjob->firm}}/{{ $currentjob->location}}</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ $currentjob->start_date}} - <span class="w3-tag w3-teal w3-round">{{ $currentjob->end_date}}</span></h6>
            <p>{{ $currentjob->job_description}}</p>
            <hr>
          </div>
          @endforeach  
          {{-- End of Current Job  --}}


        {{-- Previous Job/Work Table/Info --}}
        @foreach ($works as $work)
          <div class="w3-container">
            <h5 class="w3-opacity"><b>{{ $work->title}}/{{ $work->firm}}/{{ $work->location}}</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ $work->start_date}} - <span class="w3-tag w3-teal w3-round">{{ $work->end_date}}</span></h6>
            <p>{{ $work->job_description}}</p>
            <hr>
          </div>    
        @endforeach
        {{-- End of Job/Work Table/Info --}}
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        
        <div class="w3-container">
        @foreach ($educations as $education)
        <div class="w3-container">
          <h5 class="w3-opacity"><b>{{ $education->school}}</b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ $education->start_date }} - {{$education->end_date}}</h6>
          <p>{{ $education->degree}}</p>
          <hr>
        </div>
        @endforeach
      </div>
    <!-- End Right Column -->
    </div>

    
    <div class="w3-container w3-card w3-white mt-4">
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Volunteer Experience</h2>
      
      {{-- Previous Job/Work Table/Info --}}
      @foreach ($volunteers as $volunteer)
      <div class="w3-container">
        <h5 class="w3-opacity"><b>{{ $volunteer->title}}/{{ $volunteer->firm}}/{{ $volunteer->location}}</b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ $volunteer->start_date}} - <span class="w3-tag w3-teal w3-round">{{ $volunteer->end_date}}</span></h6>
        <p>{{ $volunteer->job_description}}</p>
        <hr>
      </div>    
    @endforeach
    {{-- End of Job/Work Table/Info --}}
    
  <!-- End Right Column -->
  </div>
    

  <div class="w3-container w3-card w3-white mt-4">
    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Projects</h2>
    
    <div class="w3-container">
    @foreach ($projects as $project)
    <div class="w3-container">
      <h5 class="w3-opacity"><b>{{ $project->name}}</b></h5>
      <h6 class="w3-text-teal">{{ $project->tools }}</h6>
      <h6 class="w3-text-teal"><a href="{{ $project->link }}">{{ $project->link }}</a></h6>
      <p>{{ $project->description}}</p>
      <hr>
    </div>
    @endforeach
  </div>
  <div class="w3-container">
      <p>Find me on social media.</p>
        <i class="fa fa-facebook-official w3-hover-opacity"></i> 
        <i class="fa fa-instagram w3-hover-opacity"></i> 
        <i class="fa fa-snapchat w3-hover-opacity"></i> 
        <i class="fa fa-pinterest-p w3-hover-opacity"></i> 
        <i class="fa fa-twitter w3-hover-opacity"></i> 
        <i class="fa fa-linkedin w3-hover-opacity"></i> 
  </div>
<!-- End Right Column -->
</div>
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

@else
<h1>Unauthorized to view page</h1>

@endif
</body>

@endsection