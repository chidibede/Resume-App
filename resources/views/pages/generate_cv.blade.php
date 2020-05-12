@extends('layouts.app')

@section('content')
    


<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="/img/default.png"  height="300" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h3 style="background: #ddd;">User Fullname</h3>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Your Profession 
            <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-teal"></i></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Your Location and Address
              <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-teal"></i>
          </p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>User Email Address</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Your Phone Number 
            <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-teal"></i></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills </b></p>
          <p>Add Skill <i class="fa fa-plus-circle fa-fw w3-margin-right w3-large w3-text-teal"></i> </p>
          
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>Add a Language <i class="fa fa-plus-circle fa-fw w3-margin-right w3-large w3-text-teal"></i> </p>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
        <p>Your Current Employment <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-teal"></i></p>
        </div>
        <div class="w3-container">
          <p>Former Employment Position <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-teal"></i></p>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <p>Add Education and Certifications <i class="fa fa-plus-circle fa-fw w3-margin-right w3-large w3-text-teal"></i></p>
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
