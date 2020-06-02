@extends('layouts.all')

@section('content')
@include('inc.messages')
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
                            <img src="/img/default.png" height="400" style="width:100%" alt="Avatar">
                            <div class="w3-display-bottomleft w3-container w3-text-black">
                                <h3 style="background: #ddd;">{{ $user->name }}</h3>
                            </div>
                        </div>
                        <div class="w3-container">

                            <!-- Profession -->
                            <p class="w3-margin-bottom" id='profession-label'>
                                <span data-toggle="collapse" href="#profession" role="button" aria-expanded="false"
                                    aria-controls="profession" class="span">

                                    {{-- Output Your profession if exists --}}
                                    @if($user->profession)
                                      <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-blue"></i>{{$user->profession}}
                            
                                      <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-blue w3-right"></i>
                                      </span>
                                    @else
                                        <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-blue"></i>Your
                                        Profession
                                        <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-blue w3-right"></i>
                                       </span>
                                    @endif
                                    {{-- End of Output Your profession if exists --}}
                            </p>
                            <p class="alert alert-success" id="profession-alert" style="display:none"></p>
                            <form method="POST" class="collapse" id="profession"
                                data-route="{{ route('updateProfession') }}">
                                @csrf
                                <div class="card" style="border: none;">
                                    <div class="form-group">
                                        <input type="text" name='profession' placeholder="Enter Profession"
                                            id="profession-input" class="form-control w3-margin-bottom"
                                            value="{{ $user->profession }}" required>
                                        <button type="submit" class="btn btn-primary" id='profession-btn'>Save</button>
                                    </div>
                            </form>
                        </div>
                        <hr>

                        <!-- Location and Address -->
                        <p id='location-label'>
                            <span data-toggle="collapse" href="#location" role="button" aria-expanded="false"
                                aria-controls="location" class="span">

                                {{-- Output Your location if exists --}}
                                @if($user->location)
                                  <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i>{{$user->location}}/{{$user->nationality}}
                                  <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-blue w3-right"></i>
                                    </span>
                                @else
                                    <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i>Your Location and
                                    Address
                                    <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
                                  </span>
                              @endif
                              {{-- End Output Your profession if exists --}}
                        </p>
                        <p class="alert alert-success" id="location-alert" style="display:none"></p>
                        <form method="POST" data-route="{{ route('updateLocation') }}"
                            class="collapse" id="location">
                            @csrf
                            <div class="card" style="border: none;">

                                <input id="nationality-input" list="country" placeholder="Enter Nationality"
                                    class="form-control w3-margin-bottom" name='nationality'
                                    value="{{ $user->nationality }}" required>
                                @include('inc.countries')

                                <div class="form-group">
                                    <input id="location-input" type="text" placeholder="Enter city and address"
                                        class="form-control w3-margin-bottom" name='location' id="usr"
                                        value="{{ $user->location }}" required>
                                    <button type="submit" class="btn btn-primary" id='location-btn'>Save</button>
                                </div>
                            </div>
                        </form>
                        <hr>

                        <!-- Email Address -->
                        <p id='email-label'>
                            <span data-toggle="collapse" href="#email" role="button" aria-expanded="false"
                                aria-controls="email" class="span">

                                {{-- Output Your location if exists --}}
                              @if($user->cv_email)
                                <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i>{{$user->cv_email}}
                                <i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-blue w3-right"></i>
                                </span>
                              @else
                              
                                {{-- End Output Your profession if exists --}}
                                  <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i> Email Address
                                  <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
                                  </span>
                              @endif
                        </p>
                        <p class="alert alert-success" id="email-alert" style="display:none"></p>
                        <form method="POST" data-route="{{ route('updateEmail') }}" class="collapse"
                            id="email">
                            @csrf
                            <div class="card" style="border: none;">

                                <div class="form-group">
                                    <input id="email-input" value="{{ $user->cv_email }}" name='email' type="text"
                                        placeholder="Enter email address" class="form-control w3-margin-bottom" required>
                                    <button type="submit" class="btn btn-primary" id='email-btn'>Save</button>
                                </div>
                            </div>
                        </form>
                        <hr>

                        <!-- Phone Number -->
                        <p id='phone-label'>
                            <span data-toggle="collapse" href="#phone" role="button" aria-expanded="false"
                                aria-controls="phone" class="span">

                                @if ($user->phone_number)
                                <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>{{$user->phone_number}}
                                <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
                                </span>
                                @else
                                <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>Your Phone Number
                                <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
                                </span>
                                @endif
                                
                        </p>
                        <p class="alert alert-success" id="phone-alert" style="display:none"></p>
                        <form method="POST" data-route="{{ route('updatePhone') }}" class="collapse"
                            id="phone">
                            @csrf
                            <div class="card" style="border: none;">
                                <div class="form-group">
                                    <input id="phone-input" value="{{ $user->phone_number }}" name='phone' type="text"
                                        placeholder="Enter Phone Number" class="form-control w3-margin-bottom" required>
                                    <button type="submit" class="btn btn-primary" id='phone-btn'>Save</button>
                                </div>
                            </div>
                        </form>
                        <hr>


                        <!-- Skills Listing and Updating-->
                        <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-blue"></i>Skills 
                            </b></p>
                            <p id="skills-edit-alert" class="alert alert-success" style="display:none"></p>
                        {{-- Skills list --}}
                        <table class="table" id="skill-list">

                            <tbody>
                                @foreach($skills as $skill)
                                    <tr>
                                        <td><p class="text-primary">{{ $skill->skill_name }}</p></td>
                                        
                                        <td>
                                            <a data-toggle="collapse" href="#skills-{{ $skill->id }}" role="button"
                                                aria-expanded="false" aria-controls="skills-{{ $skill->id }}" class="span">
                                                <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue mt-3"></i></a>
                                                
                                                  
                                                    
                                            <!-- Skills Editing Form -->
                                            <form method="POST" data-route="{{ url('updateSkills', $skill->id) }}"
                                                class="collapse" id="skills-{{ $skill->id }}">
                                                @csrf
                                                <input type="hidden" name="_method" value="PATCH">
                                            <div id="skill-list-{{$skill->id}}" class="card" style="border: none;">
                                                    <div class="form-group">
                                                    <input type="hidden" name="skill_id" id="skill_id{{$skill->id}}" value="{{$skill->id}}">
                                                        <input value="{{ $skill->skill_name }}" id="skill_name{{$skill->id}}"
                                                            name='skill_name' type="text" placeholder="Enter a skillset"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="w3-medium w3-text-gray">Rate your proficiency in
                                                            this skill on a scale of 1 - 100%</span>
                                                        <select name='level' class="form-control w3-margin-bottom"
                                                            id="level{{$skill->id}}">
                                                            <option>{{ $skill->level }}</option>
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
                                                        <button type="button" data-id={{$skill->id}} class="btn btn-primary updateSkills">Save</button>

                                                    </div>
                                                </div>
                                            </form>   
                                          <!-- End Of Skills editing Form -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        <!-- End Of Skills Listing and Updating -->



                        <!-- Skills Addition -->
                        <p>
                            <span data-toggle="collapse" href="#skills" role="button" aria-expanded="false"
                                aria-controls="skills" class="span">
                                Add Skill
                                <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
                                
                            </span>
                        </p>
                        <p class="alert alert-success" id="skills-alert" style="display:none"></p>


                        <form method="POST" data-route="{{ route('createSkills') }}" class="collapse"
                            id="skills">
                            @csrf
                            <div class="card" style="border: none;">
                                <div class="form-group">

                                    <input id="skill_name" name='skill_name' type="text" placeholder="Enter a skillset"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <span class="w3-medium w3-text-gray">Rate your proficiency in this skill on a scale
                                        of 1 - 100%</span>
                                    <select name='level' class="form-control w3-margin-bottom" id="level">
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
                                    <button type="submit" class="btn btn-primary" id="skills-btn">Save</button>

                                </div>
                            </div>
                        </form>
                        <hr>
                        <!-- End Of Skills Addition -->













                    <!-- Languages Listing and Updating-->
                    <p class="w3-large w3-text-theme"><b><i
                        class="fa fa-globe fa-fw w3-margin-right w3-text-blue"></i>Languages</b></p>
                    <p id="languages-edit-alert" class="alert alert-success" style="display:none"></p>
                    {{-- Languages list --}}
                    <table class="table" id="languages-list">

                    <tbody>
                        @foreach($languages as $language)
                            <tr>
                                <td><p class="text-primary">{{ $language->language_name }}</p></td>
                                
                                <td>
                                    <a data-toggle="collapse" href="#languages-{{ $language->id }}" role="button"
                                        aria-expanded="false" aria-controls="languages-{{ $language->id }}" class="span">
                                        <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue mt-3"></i></a>
                                        
                                        
                                            
                                    <!-- Languages Editing Form -->
                                    <form method="POST" data-route="{{ url('updateLanguages', $language->id) }}"
                                        class="collapse" id="languages-{{ $language->id }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="PATCH">
                                    <div id="language-list-{{$language->id}}" class="card" style="border: none;">
                                            <div class="form-group">
                                            <input type="hidden" name="language_id" id="language_id{{$language->id}}" value="{{$language->id}}">
                                                <input value="{{ $language->language_name }}" id="language_name{{$language->id}}"
                                                    name='language_name' type="text" placeholder="Enter a language"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <span class="w3-medium w3-text-gray">Rate your proficiency in
                                                    this language on a scale of 1 - 100%</span>
                                                <select name='level' class="form-control w3-margin-bottom"
                                                    id="level{{$language->id}}">
                                                    <option>{{ $language->level }}</option>
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
                                                <button type="button" data-id={{$language->id}} class="btn btn-primary updateLanguages">Save</button>

                                            </div>
                                        </div>
                                    </form>   
                                <!-- End Of language editing Form -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <!-- End Of Language Listing and Updating -->



                    <!-- Language Addition -->
                    <p>
                    <span data-toggle="collapse" href="#languages" role="button" aria-expanded="false"
                        aria-controls="languages" class="span">
                        Add Language
                        <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
                        
                    </span>
                    </p>
                    <p class="alert alert-success" id="languages-alert" style="display:none"></p>


                    <form method="POST" data-route="{{ route('createLanguages') }}" class="collapse"
                    id="languages">
                    @csrf
                    <div class="card" style="border: none;">
                        <div class="form-group">

                            <input id="language_name" name='language_name' type="text" placeholder="Enter a Language"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <span class="w3-medium w3-text-gray">Rate your proficiency in this language on a scale
                                of 1 - 100%</span>
                            <select name='level' class="form-control w3-margin-bottom" id="level">
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
                            <button type="submit" class="btn btn-primary" >Save</button> 

                        </div>
                    </div>
                    </form>
                    <hr>
                    <!-- End Of Language Addition -->

                    </div>
                </div>

                <!-- End Left Column -->
            </div>



            
            <!-- Right Column -->
            <div class="w3-twothird w3-margin-top">
               

                <div class="w3-container w3-card w3-white  w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-18 w3-center"><i
                        class="fa fa-suitcase fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Work
                    Experience</h2>
                    <p class="w3-text-grey w3-padding-18 ml-4"><i
                        class="fa fa-suitcase fa-fw w3-margin-right w3-margin-top w3-text-blue"></i>Current Employment
                    </p>
                <div class="w3-container">
                    
                    <p id="current-job-edit-alert" class="alert alert-success" style="display:none"></p>

                    <table class="table" id="current-job-list">

                        <tbody>
                            @foreach($current_jobs as $current_job)
                                <tr>
                                    <td><p class="text-primary">{{ $current_job->job_title}}/{{ $current_job->employer}}/{{ $current_job->location}}</p></td>
                                    
                                    <td>
                                        <a data-toggle="collapse" href="#current_job-{{ $current_job->id }}" role="button"
                                            aria-expanded="false" aria-controls="current_job-{{ $current_job->id }}" class="span">
                                            <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue mt-3"></i></a>
                                            
                                            
                                                
                                        <!-- Current Job Editing Form -->
                                        <form method="POST" data-route="{{ url('updateCurrentJob', $current_job->id) }}" class="collapse"  id="current_job-{{ $current_job->id }}">
                                            <input type="hidden" name="_method" value="PATCH">
                                            @csrf
                                            <input type="hidden" name="current_job_id" id="current_job_id{{$current_job->id}}" value="{{$current_job->id}}">
                                            <div class="card" style="border: none;">
                                                <div class="form-group">
                                                    <input type="text" name="employer" id="employer{{$current_job->id}}" placeholder="Current Employer"
                                                        class="form-control w3-margin-bottom" value="{{$current_job->employer}}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="job_title" id="job_title{{$current_job->id}}" placeholder="Job Title" class="form-control" value="{{$current_job->job_title}}">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="location" id="location{{$current_job->id}}" placeholder="Job Location" class="form-control" value="{{$current_job->location}}">
                                                </div>

                                                <div class="form-group">
                                                    <span class="w3-medium w3-text-gray">Job Description</span>
                                                    <textarea name="job_description" class="form-control" rows="4" id="comment{{$current_job->id}}" >{{$current_job->job_description}}</textarea>
                                                </div>
                                                <div class="form-group" style="width:50%;">
                                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                                    <input type="date" name="start_date" id="start_date{{$current_job->id}}" name="date" class="form-control" value="{{$current_job->start_date}}">
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" data-id={{$current_job->id}} class="btn btn-primary updateCurrentJob">Save</button>
                                                </div>
                                                <hr><br>
                
                                            </div>
                                        </form> 
                                    <!-- End Of Current Job editing Form -->
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                        </table>


                        @if ( $wordCount < 1)
                    <!-- Current Work Addition -->
                        <p class="current-job-refresh">
                            <span data-toggle="collapse" href="#current_job" role="button" aria-expanded="false"
                                aria-controls="current_job" class="span">
                                Your Current Employment
                                <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
                            </span>
                        </p>
                        <hr>

                        <p class="alert alert-success" id="current-job-alert" style="display:none"></p>
                        
                        <form method="POST" data-route="{{ route('createCurrentJob') }}" class="collapse current-job-refresh" id="current_job">
                            @csrf
                            <div class="card" style="border: none;">
                                <div class="form-group">
                                    <input type="text" name="employer" id="employer" placeholder="Current Employer"
                                        class="form-control w3-margin-bottom" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="job_title" id="job_title" placeholder="Job Title" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="location" id="job_title" placeholder="Job Location" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <span class="w3-medium w3-text-gray">Job Description</span>
                                    <textarea name="job_description" class="form-control" rows="4" id="comment"></textarea>
                                </div>
                                <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" name="start_date"  id="start date" name="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" id="current-job-btn">Save</button> 
                                </div>
                                <hr><br>

                            </div>
                        </form>
                            
                        @endif
                    </div>



                    <div class="w3-container w3-margin-bottom">
                        <p>
                            <span data-toggle="collapse" href="#former_employment" role="button" aria-expanded="false"
                                aria-controls="former_employment" class="span">
                                Former Employment Positions
                                <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
                            </span>
                        </p>
                        <hr>
                        <div class="collapse" id="former_employment">
                            <div class="card" style="border: none;">
                                <div class="form-group">
                                    <input type="text" placeholder="Former Employer"
                                        class="form-control w3-margin-bottom">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Job Title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span class="w3-medium w3-text-gray">Job Description</span>
                                    <textarea class="form-control" rows="4" id="comment"></textarea>
                                </div>
                                <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" id="start date" name="date" class="form-control">
                                </div>
                                <div class="form-group" style="width:50%;">
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
                    <h2 class="w3-text-grey w3-padding-15"><i
                            class="fa fa-certificate fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Education
                    </h2>


                    <div class="w3-container">
                        <p>
                            <span data-toggle="collapse" href="#education" role="button" aria-expanded="false"
                                aria-controls="education" class="span">
                                Add Education and Certification
                                <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
                            </span>
                        </p>
                        <div class="collapse" id="education">
                            <div class="card" style="border: none;">
                                <div class="form-group">
                                    <input type="text" placeholder="Name of School/Institution"
                                        class="form-control w3-margin-bottom">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Acquired Qualification/ Certification"
                                        class="form-control">
                                </div>
                                <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" id="start date" name="date" class="form-control">
                                </div>
                                <div class="form-group" style="width:50%;">
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
                    <h2 class="w3-text-grey w3-padding-14"><i
                            class="fa fa-handshake-o fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Volunteer
                        Experience</h2>
                    <div class="w3-container">
                        <p>
                            <span data-toggle="collapse" href="#volunteer" role="button" aria-expanded="false"
                                aria-controls="volunteer" class="span">
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
                                <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" id="start date" name="date" class="form-control">
                                </div>
                                <div class="form-group" style="width:50%;">
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
                    <h2 class="w3-text-grey w3-padding-14"><i
                            class="fa fa-cogs fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Ongoing
                        And Completed Projects</h2>
                    <div class="w3-container">
                        <p>
                            <span data-toggle="collapse" href="#projects" role="button" aria-expanded="false"
                                aria-controls="projects" class="span">
                                Add Ongoing And Completed Projects
                                <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
                            </span>
                        </p>
                        <div class="collapse" id="projects">
                            <div class="card" style="border: none;">
                                <div class="form-group">
                                    <input type="text" placeholder="Project Title"
                                        class="form-control w3-margin-bottom">
                                </div>
                                <div class="form-group">
                                    <span class="w3-medium w3-text-gray">Project Description</span>
                                    <textarea class="form-control" rows="4" id="comment"></textarea>
                                </div>
                                <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" id="start date" name="date" class="form-control">
                                </div>
                                <div class="form-group" style="width:50%;">
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
        <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/create_cv.js') }}"></script>
    </body>
@else
    <h1>Login</h1>
@endif
@endsection

{{-- action="{{ action('GenerateCvController@updateSkills', $skill->id) }}" --}}
