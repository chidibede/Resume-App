@extends('layouts.all')

@section('content')
@if($user)
<body class="w3-light-grey">



<!-- Page Container -->
<div class="w3-content w3-margin-bottom" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third w3-margin-top">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container w3-padding-bottom">
          <img src="/img/default.png"  height="400" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
          <h3 style="background: #ddd;">{{$user->name}}</h3>
          </div>
        </div>
        <div class="w3-container">

          <!-- Profession -->
          <p class="w3-margin-bottom">    
            <span data-toggle="collapse" href="#profession" role="button" aria-expanded="false" aria-controls="profession" class="span">
              <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-blue"></i>Your Profession
            <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-blue w3-right"></i>
            </span>
          </p>
          <p class="alert alert-success" id="profession-alert" style="display:none"></p>
         <form method="POST" class="collapse" id="profession" data-route="{{ route('updateProfession')}}">
            @csrf
            <div class="card" style="border: none;">          
              <div class="form-group">
              <input type="text" name='profession' placeholder="Enter Profession" id="profession-input" class="form-control w3-margin-bottom" value="{{$user->profession}}">
               <button type="button" class="btn btn-primary" id='profession-btn'>Save</button>
              </div>
            </form>
          </div><hr>

          <!-- Location and Address -->
          <p>
            <span data-toggle="collapse" href="#location" role="button" aria-expanded="false" aria-controls="location" class="span">
              <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i>Your Location and Address
            <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
            </span>
          </p>
          <p class="alert alert-success" id="location-alert" style="display:none"></p>
        <form method="POST" data-route = "{{ route('updateLocation')}}" class="collapse" id="location">
          @csrf  
          <div class="card" style="border: none;">
              
            <input id="nationality-input" list="country" placeholder="Enter Nationality" class="form-control w3-margin-bottom" name='nationality' value="{{ $user->nationality}}">
               @include('inc.countries')

              <div class="form-group">
              <input id="location-input" type="text" placeholder="Enter city and address" class="form-control w3-margin-bottom" name='location' id="usr" value="{{$user->location}}">
              <button type="button" class="btn btn-primary" id='location-btn'>Save</button>
            </div>
            </div>
          </form><hr>

          <!-- Email Address -->
          <p>
            <span data-toggle="collapse" href="#email" role="button" aria-expanded="false" aria-controls="email" class="span">
              <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i> Email Address
            <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
            </span>
          </p>
          <p class="alert alert-success" id="email-alert" style="display:none"></p>
        <form method="POST" data-route="{{ route('updateEmail')}}" class="collapse" id="email">
          @csrf
           <div class="card" style="border: none;">

          <div class="form-group">
          <input id="email-input" value="{{$user->cv_email}}" name='email' type="text" placeholder="Enter email address" class="form-control w3-margin-bottom">
           <button type="button" class="btn btn-primary" id='email-btn'>Save</button>
            </div>
            </div>
          </form><hr>

          <!-- Phone Number -->
          <p>
            <span data-toggle="collapse" href="#phone" role="button" aria-expanded="false" aria-controls="phone" class="span">
              <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>Your Phone Number
            <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
            </span>
          </p>
          <p class="alert alert-success" id="phone-alert" style="display:none"></p>
        <form method="POST" data-route="{{ route('updatePhone')}}" class="collapse" id="phone">
          @csrf
            <div class="card" style="border: none;">
            <div class="form-group">
             <input id="phone-input" value="{{$user->phone_number}}" name='phone' type="text" placeholder="Enter Phone Number" class="form-control w3-margin-bottom">
             <button type="button" class="btn btn-primary" id='phone-btn'>Save</button>
            </div>
            </div>
          </form><hr>


        <!-- Skills -->
        <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-blue"></i>Skills </b></p>
          {{-- Skills list --}}
          <table class="table">
            
            <tbody>
                @foreach ($skills as $skill)
                    <tr>
                        <td><a href=""><small>{{$skill->skill_name}}</small></a></td>
                        <td>
                            <a data-toggle="collapse" href="#skills-{{ $skill->skill_name}}" role="button" aria-expanded="false" aria-controls="skills" class="span"><i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a> 
                           {{-- <input type="text" class="collapse" id="skills-{{ $skill->skill_name}}"> --}}
                           {{-- Skills Edit --}}
                           <form method="POST" data-route="{{ route('createSkills') }}" class="collapse" id="skills-{{ $skill->skill_name}}">
                            @csrf
                                <div class="card" style="border: none;">
                                <div class="form-group">
                  
                                <input value="{{$skill->skill_name}}" id="skill_name" name='skill_name' type="text" placeholder="Enter a skillset" class="form-control">
                                </div>
                                  <div class="form-group">
                                    <span class="w3-medium w3-text-gray">Rate your proficiency in this skill on a scale of 1 - 100%</span>
                                    <select name='level' class="form-control w3-margin-bottom" id="level" >
                                      <option>{{$skill->level}}</option>
                                      <option>10%</option>
                                      <option>20%</option>
                                      <option>30%</option>
                                      <option>40%</option>
                                      <option>50%</option>
                                      <option>60%</option>
                                      <option>70%</option>
                                      <option>80%</option>
                                      <option>90%</option>
                                      <option>100%</option>
                                    </select>
                                    <button type="button" class="btn btn-primary" id="skills-btn">Save</button>
                  
                                  </div>
                              </div>
                        </form>
                          </td>
                        {{-- <td>
                                {!! Form::open(['action'=> ['PostsController@destroy', $skill->id], 
                                'method'=> 'post','onsubmit' => 'return confirm("Are you sure you want to delete?")'])!!}
                                    {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                                    {{Form::hidden('_method', 'DELETE')}}
                                {!! Form::close()!!}
                    </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
          <p>
            <span data-toggle="collapse" href="#skills" role="button" aria-expanded="false" aria-controls="skills" class="span">
              Add Skill
            <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
            </span>
          </p>
          <p class="alert alert-success" id="skills-alert" style="display:none"></p>
          
            
          
          
        
          
        <form method="POST" data-route="{{ route('createSkills') }}" class="collapse" id="skills">
          @csrf
              <div class="card" style="border: none;">
              <div class="form-group">

              <input id="skill_name" name='skill_name' type="text" placeholder="Enter a skillset" class="form-control">
              </div>
                <div class="form-group">
                  <span class="w3-medium w3-text-gray">Rate your proficiency in this skill on a scale of 1 - 100%</span>
                  <select name='level' class="form-control w3-margin-bottom" id="level" >
                    <option>0%</option>
                    <option>10%</option>
                    <option>20%</option>
                    <option>30%</option>
                    <option>40%</option>
                    <option>50%</option>
                    <option>60%</option>
                    <option>70%</option>
                    <option>80%</option>
                    <option>90%</option>
                    <option>100%</option>
                  </select>
                  <button type="button" class="btn btn-primary" id="skills-btn">Save</button>

                </div>
            </div>
      </form>
          
          <hr>
          <!-- Languages -->
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-blue"></i>Languages</b></p>

          <p>
            <span data-toggle="collapse" href="#language" role="button" aria-expanded="false" aria-controls="language" class="span">
              Add Language
            <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
            </span>
          </p>
          <div class="collapse" id="language">
          <div class="card" style="border: none;">
          <div class="form-group">

          <input type="text" placeholder="Enter a language you speak" class="form-control">
          </div>
            <div class="form-group">
              <span class="w3-medium w3-text-gray">Rate your proficiency in this language on a scale of 10 - 100%</span>
              <select class="form-control w3-margin-bottom" id="language_select">
                <option>Self rating (10 - 100%) </option>
                <option>10%</option>
                <option>20%</option>
                <option>30%</option>
                <option>40%</option>
                <option>50%</option>
                <option>60%</option>
                <option>70%</option>
                <option>80%</option>
                <option>90%</option>
                <option>100%</option>
              </select>
              <a href="#" class="btn btn-primary">Save</a>

            </div>
        </div>
          </div><hr>
          <br>
        </div>
      </div>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird w3-margin-top">
    
      <div class="w3-container w3-card w3-white  w3-margin-bottom">
    <!-- Work  -->
        <h2 class="w3-text-grey w3-padding-18"><i class="fa fa-suitcase fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Work Experience</h2>
        <div class="w3-container">
          <p>
            <span data-toggle="collapse" href="#current_employment" role="button" aria-expanded="false" aria-controls="current_employment" class="span">
              Your Current Employment
            <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
            </span>
          </p><hr>
          <div class="collapse" id="current_employment">
            <div class="card" style="border: none;">
              <div class="form-group">
                <input type="text" placeholder="Current Employer" class="form-control w3-margin-bottom">
              </div>
               <div class="form-group">
                <input type="text" placeholder="Job Title" class="form-control">
              </div>
              <div class="form-group">
                <span class="w3-medium w3-text-gray">Job Description</span>
                  <textarea class="form-control" rows="4" id="comment"></textarea>
              </div>
              <div class="form-group"style="width:50%;">
                 <span class="w3-medium w3-text-gray">Start Date</span>
                <input type="date" id="start date" name="date" class="form-control">
              </div>
              <div class="form-group">
                <a href="#" class="btn btn-primary">Save</a>
              </div><hr><br>

            </div>
          </div>
        </div>

        <div class="w3-container w3-margin-bottom">
        <p>
          <span data-toggle="collapse" href="#former_employment" role="button" aria-expanded="false" aria-controls="former_employment" class="span">
            Former Employment Positions
          <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
          </span>
        </p><hr>
        <div class="collapse" id="former_employment">
          <div class="card" style="border: none;">
              <div class="form-group">
                <input type="text" placeholder="Former Employer" class="form-control w3-margin-bottom">
              </div>
               <div class="form-group">
                <input type="text" placeholder="Job Title" class="form-control">
               </div>
              <div class="form-group">
                <span class="w3-medium w3-text-gray">Job Description</span>
                  <textarea class="form-control" rows="4" id="comment"></textarea>
              </div>
              <div class="form-group"style="width:50%;">
                 <span class="w3-medium w3-text-gray">Start Date</span>
                <input type="date" id="start date" name="date" class="form-control">
              </div>
              <div class="form-group"style="width:50%;">
                 <span class="w3-medium w3-text-gray">End Date</span>
                <input type="date" id="start date" name="date" class="form-control">
              </div>
              <div class="form-group">
                <a href="#" class="btn btn-primary">Save</a>
              </div>

            </div>
        </div>
        </div>
      </div>
    
    <!-- Education -->
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-15"><i class="fa fa-certificate fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Education</h2>


        <div class="w3-container">
         <p>
          <span data-toggle="collapse" href="#education" role="button" aria-expanded="false" aria-controls="education" class="span">
            Add Education and Certification
          <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
          </span>
        </p>
        <div class="collapse" id="education">
          <div class="card" style="border: none;">
              <div class="form-group">
                <input type="text" placeholder="Name of School/Institution" class="form-control w3-margin-bottom">
              </div>
               <div class="form-group">
                <input type="text" placeholder="Acquired Qualification/ Certification" class="form-control">
               </div>
              <div class="form-group"style="width:50%;">
                 <span class="w3-medium w3-text-gray">Start Date</span>
                <input type="date" id="start date" name="date" class="form-control">
              </div>
              <div class="form-group"style="width:50%;">
                 <span class="w3-medium w3-text-gray">End Date</span>
                <input type="date" id="start date" name="date" class="form-control">
              </div>
              <div class="form-group">
                <a href="#" class="btn btn-primary">Save</a>
              </div>

            </div>
        </div>
          <hr>
        </div>
      </div>

      <!-- Volunteer-->
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-14"><i class="fa fa-handshake-o fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Volunteer Experience</h2>
        <div class="w3-container">
          <p>
          <span data-toggle="collapse" href="#volunteer" role="button" aria-expanded="false" aria-controls="volunteer" class="span">
            Add Volunteer Experience
          <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
          </span>
        </p>
        <div class="collapse" id="volunteer">
          <div class="card" style="border: none;">
              <div class="form-group">
                <input type="text" placeholder="Organisation" class="form-control w3-margin-bottom">
              </div>
               <div class="form-group">
                <input type="text" placeholder="Job Title" class="form-control">
               </div>
              <div class="form-group">
                <span class="w3-medium w3-text-gray">Job Description</span>
                  <textarea class="form-control" rows="4" id="comment"></textarea>
              </div>
              <div class="form-group"style="width:50%;">
                 <span class="w3-medium w3-text-gray">Start Date</span>
                <input type="date" id="start date" name="date" class="form-control">
              </div>
              <div class="form-group"style="width:50%;">
                 <span class="w3-medium w3-text-gray">End Date</span>
                <input type="date" id="start date" name="date" class="form-control">
              </div>
              <div class="form-group">
                <a href="#" class="btn btn-primary">Save</a>
              </div>

            </div>
        </div>
          <hr>
        </div>
      </div>

      <!-- Projects -->
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-14"><i class="fa fa-cogs fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Ongoing And Completed Projects</h2>
        <div class="w3-container">
        <p>
          <span data-toggle="collapse" href="#projects" role="button" aria-expanded="false" aria-controls="projects" class="span">
            Add Ongoing And Completed Projects
          <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
          </span>
        </p>
        <div class="collapse" id="projects">
          <div class="card" style="border: none;">
              <div class="form-group">
                <input type="text" placeholder="Project Title" class="form-control w3-margin-bottom">
              </div>
              <div class="form-group">
                <span class="w3-medium w3-text-gray">Project Description</span>
                  <textarea class="form-control" rows="4" id="comment"></textarea>
              </div>
              <div class="form-group"style="width:50%;">
                 <span class="w3-medium w3-text-gray">Start Date</span>
                <input type="date" id="start date" name="date" class="form-control">
              </div>
              <div class="form-group"style="width:50%;">
                 <span class="w3-medium w3-text-gray">Completion Date</span>
                <input type="date" id="start date" name="date" class="form-control">
              </div>
              <div class="form-group">
                <a href="#" class="btn btn-primary">Save</a>
              </div>
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

 <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
 <script src="{{ asset('js/create_cv.js') }}" ></script>
</body>
@else
<h1>Login</h1>
@endif
@endsection
