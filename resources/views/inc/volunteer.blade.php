<h2 class="w3-text-grey w3-padding-14"><i
        class="fa fa-handshake-o fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Volunteer
    Experience</h2>

    <p class="w3-text-grey w3-padding-18 ml-3"><i
        class="fa fa-handshake-o  fa-fw w3-margin-right w3-margin-top w3-text-blue"></i> Volunteers
</p>
<div class="w3-container">
    <p id="volunteer-edit-alert" class="alert alert-success" style="display:none"></p>

    <div id="volunteer-list">

    
            @foreach($volunteers as $volunteer)
               
                        <p class="text-primary span">
                            <span data-toggle="collapse" href="#volunteer-{{ $volunteer->id }}" class="span" >
                            {{ $volunteer->job_title }} at {{ $volunteer->organization }}, {{ $volunteer->location }}
                            </span>
           
                        <a onclick="return confirm('Are you sure?')" href="{{ route('destroyVolunteer', ['id' => $volunteer->id]) }}"  class="span">
                            <i class="fa fa-trash fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a>

                        <a data-toggle="collapse" href="#volunteer-{{ $volunteer->id }}" role="button"
                            aria-expanded="false" aria-controls="volunteer-{{ $volunteer->id }}" class="span">
                            <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a>
                        </p>


                        <!-- Volunteer Editing Form -->
                        <form method="POST"
                            data-route="{{ url('updateVolunteers', $volunteer->id) }}"
                            class="collapse" id="volunteer-{{ $volunteer->id }}">
                            <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <input type="hidden" name="volunteer_id" id="volunteer_id{{ $volunteer->id }}"
                                value="{{ $volunteer->id }}">
                            <div class="card" style="border: none;">
                                <div class="form-group">
                                    <input type="text" name="organization" id="organization{{ $volunteer->id }}"
                                        placeholder="Organization" class="form-control w3-margin-bottom"
                                        value="{{ $volunteer->organization }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="job_title" id="job_title{{ $volunteer->id }}"
                                        placeholder="Job Title" class="form-control"
                                        value="{{ $volunteer->job_title }}">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="location" id="location{{ $volunteer->id }}"
                                        placeholder="Job Location" class="form-control"
                                        value="{{ $volunteer->location }}">
                                </div>

                                <div class="form-group">
                                    <span class="w3-medium w3-text-gray">Job Description</span>
                                    <textarea name="job_description" class="form-control" rows="4"
                                        id="comment{{ $volunteer->id }}">{{ $volunteer->job_description }}</textarea>
                                </div>


                                <div class="form-group" style="width:60%;">
                                    <span class="w3-medium w3-text-gray required">Start Date</span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input value="{{ $volunteer->start_year }}" list="year" 
                                            class="form-control w3-margin-bottom" id="start_year{{ $volunteer->id }}" name='start_year' required>
                                            @include('inc.year') 
                                        </div>
                                        <div class="col-md-6">
                                            <input id="start_month{{ $volunteer->id }}" list="month" 
                                            class="form-control w3-margin-bottom" name='start_month' value="{{ $volunteer->start_month }}" required>
                                            @include('inc.month')
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" style="width:60%;">
                                    <span class="w3-medium w3-text-gray required">End Date</span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input value="{{ $volunteer->end_year }}" list="year" 
                                            class="form-control w3-margin-bottom" id="end_year{{ $volunteer->id }}" name='end_year' required>
                                            @include('inc.year') 
                                        </div>
                                        <div class="col-md-6">
                                           

                                            <input id="end_month{{ $volunteer->id }}" list="month" 
                                            class="form-control w3-margin-bottom" name='end_month' value="{{ $volunteer->end_month }}" required>
                                            @include('inc.month')
                                        </div>
                                    </div>
                                </div>


                                {{-- <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" name="start_date" id="start_date{{ $volunteer->id }}"
                                        name="date" class="form-control" value="{{ $volunteer->start_date }}">
                                </div>

                                <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" name="end_date" id="end_date{{ $volunteer->id }}"
                                        name="date" class="form-control" value="{{ $volunteer->end_date }}">
                                </div> --}}

                                <div class="form-group">
                                    <button type="button" data-id={{ $volunteer->id }}
                                        class="btn btn-primary updateVolunteer">Update</button>
                                </div>
                                <hr><br>

                            </div>
                        </form>
                        <!-- End Of Volunteer editing Form -->

            @endforeach
 
    </div>



    <p>
        <span data-toggle="collapse" href="#volunteer" role="button" aria-expanded="false" aria-controls="volunteer"
            class="span">
            Add Volunteer Experience
            <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
        </span>
    </p>
    <p class="alert alert-success" id="volunteer-alert" style="display:none"></p>
    <form class="collapse" id="volunteer" method="POST" data-route="{{ route('createVolunteer') }}">
        @csrf
        <div class="card" style="border: none;">
            <div class="form-group">
                <input type="text" name="organization" id="organization" placeholder="Organisation" class="form-control w3-margin-bottom">
            </div>
            <div class="form-group">
                <input type="text" name="job_title" id="job_title" placeholder="Job Title" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="location" id="location" placeholder="Job Location" class="form-control"
                    required>
            </div>
            <div class="form-group">
                <span class="w3-medium w3-text-gray">Job Description</span>
                <textarea class="form-control" rows="4" id="job_description" name='job_description'></textarea>
            </div>
            <div class="form-group" style="width:60%;">
                <span class="w3-medium w3-text-gray">Start Date</span>
                <div class="row">
                    <div class="col-md-6">
                        <input id="year-input" list="year" placeholder="Enter Start Year"
                        class="form-control w3-margin-bottom" name='start_year' required>
                        @include('inc.year') 
                    </div>
                    <div class="col-md-6">
                        <input id="month-input" list="month" placeholder="Enter Start Month"
                        class="form-control w3-margin-bottom" name='start_month' required>
                        @include('inc.month')
                    </div>
                </div>
            </div>
            <div class="form-group" style="width:60%;">
                <span class="w3-medium w3-text-gray">End Date</span>
                <div class="row">
                    <div class="col-md-6">
                        <input id="year-input" list="year" placeholder="Enter End Year"
                        class="form-control w3-margin-bottom" name='end_year' required>
                        @include('inc.year') 
                    </div>
                    <div class="col-md-6">
                        <input id="month-input" list="month" placeholder="Enter End Month"
                        class="form-control w3-margin-bottom" name='end_month' required>
                        @include('inc.month')
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="volunteer-btn">Save</button>
            </div>

        </div>
    </form>
    <hr>
</div>
