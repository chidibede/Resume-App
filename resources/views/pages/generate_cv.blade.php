@extends('layouts.all')

@section('content')
<body class="w3-light-grey">
    


<!-- Page Container -->
<div class="w3-content w3-margin-bottom" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third w3-margin-top">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="/img/default.png"  height="400" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h3 style="background: #ddd;">User Fullname</h3>
          </div>
        </div>
        <div class="w3-container">

          <p>
            <span data-toggle="collapse" href="#profession" role="button" aria-expanded="false" aria-controls="profession" class="span">
              <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-blue"></i>Your Profession
            <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-blue"></i>
            </span>
          </p>
          <div class="collapse" id="profession">
            <div class="card card-body">
             Form here...
            </div>
          </div>

          <p>
            <span data-toggle="collapse" href="#location" role="button" aria-expanded="false" aria-controls="location" class="span">
              <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i>Your Location and Address
            <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-blue"></i>
            </span>
          </p>
          <div class="collapse" id="location">
            <div class="card card-body">
              Form here...
            </div>
          </div>

          <p>
            <span data-toggle="collapse" href="#email" role="button" aria-expanded="false" aria-controls="email" class="span">
              <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i>User Email Address
            <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-blue"></i>
            </span>
          </p>
          <div class="collapse" id="email">
            <div class="card card-body">
             Form here...
            </div>
          </div>

          <p>
            <span data-toggle="collapse" href="#phone" role="button" aria-expanded="false" aria-controls="phone" class="span">
              <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>Your Phone Number
            <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-blue"></i>
            </span>
          </p>
          <div class="collapse" id="phone">
            <div class="card card-body">
             Form here...
            </div>
          </div>

          <hr>


          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-blue"></i>Skills </b></p>
          
          <p>
            <span data-toggle="collapse" href="#skills" role="button" aria-expanded="false" aria-controls="skills" class="span">
              Add Skill
            <i class="fa fa-plus-circle fa-fw w3-margin-right w3-xlarge w3-text-blue"></i>
            </span>
          </p>
          <div class="collapse" id="skills">
            <div class="card card-body">
             Form here...
            </div>
          </div>
          
          <hr>
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-blue"></i>Languages</b></p>

          <p>
            <span data-toggle="collapse" href="#language" role="button" aria-expanded="false" aria-controls="language" class="span">
              Add Language
            <i class="fa fa-plus-circle fa-fw w3-margin-right w3-xlarge w3-text-blue"></i>
            </span>
          </p>
          <div class="collapse" id="language">
            <div class="card card-body">
             Form here...
            </div>
          </div>
          <br>
        </div>
      </div>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird w3-margin-top">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-15"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Work Experience</h2>
        <div class="w3-container">
        <p>
          <span data-toggle="collapse" href="#current_employment" role="button" aria-expanded="false" aria-controls="current_employment" class="span">
            Your Current Employment
          <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-blue"></i>
          </span>
        </p>
        <div class="collapse" id="current_employment">
          <div class="card card-body">
           Form here...
          </div>
        </div>
        </div>

        <div class="w3-container w3-margin-bottom">
        <p>
          <span data-toggle="collapse" href="#former_employment" role="button" aria-expanded="false" aria-controls="former_employment" class="span">
            Former Employment Position
          <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-blue"></i>
          </span>
        </p>
        <div class="collapse" id="former_employment">
          <div class="card card-body">
           Form here...
          </div>
        </div>
        </div>
      </div>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-15"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Education</h2>


        <div class="w3-container">
         <p>
          <span data-toggle="collapse" href="#education" role="button" aria-expanded="false" aria-controls="education" class="span">
            Add Education and Certification
          <i class="fa fa-plus-circle fa-fw w3-margin-right w3-large w3-text-blue"></i>
          </span>
        </p>
        <div class="collapse" id="education">
          <div class="card card-body">
           Form here...
          </div>
        </div>
          <hr>
        </div>
      </div>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-14"><i class="fa fa-handshake-o fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Volunteer Experience</h2>
        <div class="w3-container">
          <p>
          <span data-toggle="collapse" href="#volunteer" role="button" aria-expanded="false" aria-controls="volunteer" class="span">
            Add Volunteer Experience
          <i class="fa fa-plus-circle fa-fw w3-margin-right w3-large w3-text-blue"></i>
          </span>
        </p>
        <div class="collapse" id="volunteer">
          <div class="card card-body">
           Form here...
          </div>
        </div>
          <hr>
        </div>
      </div>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-14"><i class="fa fa-cogs fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Ongoing And Completed Projects</h2>
        <div class="w3-container">
        <p>
          <span data-toggle="collapse" href="#projects" role="button" aria-expanded="false" aria-controls="projects" class="span">
            Add Ongoing And Completed Projects
          <i class="fa fa-plus-circle fa-fw w3-margin-right w3-large w3-text-blue"></i>
          </span>
        </p>
        <div class="collapse" id="projects">
          <div class="card card-body">
           Form here...
          </div>
        </div>
          <hr>
        </div>
      </div>
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>


@endsection
