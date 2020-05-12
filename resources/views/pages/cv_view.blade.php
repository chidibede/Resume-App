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
    
      
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="/img/default.png"  height="300" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2 style="background: #ddd;">{{$user->name}}</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->profession}}</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->location}}</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->email}}</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->phone_number}}</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p>HTML/CSS/Javascript</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Php</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Laravel</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>Flutter</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Spanish</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Portuguese</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
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
          <h5 class="w3-opacity"><b>Field Service Engineer / Technologia Hospitalaria y Laboratorial (THL)</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>May 2019 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Installation along with preventive and corrective maintenace of Philips medical systems</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>IT Administrator and Instructor / Oris Education Center, American Corner</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>October 2015 - May 2019</h6>
          <p>Operation officer for all technology related issues</p>
          <hr>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Philips HealthCare Academy.</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>February 2020</h6>
          <p>DXR Radiography Essentials </p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>University of Nigeria, Nsukka.</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2011 - 2015</h6>
          <p>Computer Science : Bachelor Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Abia State Senior School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2006 - 2009</h6>
          <p>Senior Secondary Certification</p><br>
        </div>
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

<h1>Unauthorized to view</h1>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="#" target="_blank">Klintgit Media</a></p>
</footer>
@else
<h1>Unauthorized to view page</h1>

@endif
</body>

@endsection