<h2 class="w3-text-grey w3-padding-18"><i
        class="fa fa-suitcase fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Work
    Experience</h2>
<p class="w3-text-grey ml-3"><i
        class="fa fa-suitcase fa-fw w3-margin-right w3-margin-top w3-text-blue"></i>Current Employment
</p>
<div class="w3-container">

    <p id="current-job-edit-alert" class="alert alert-success mb-3" style="display:none"></p>

    <div id="current-job-list">

            @foreach($current_jobs as $current_job)
                        <p data-toggle="collapse" href="#current_job-{{ $current_job->id }}"  class="text-primary span">
                            {{ $current_job->job_title }} at {{ $current_job->employer }}, {{ $current_job->location }}
                        <a onclick="return confirm('Are you sure?')" href="{{ route('destroyCurrentJob', ['id' => $current_job->id]) }}"  class="span">
                            <i class="fa fa-trash fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a>

                        <a data-toggle="collapse" href="#current_job-{{ $current_job->id }}" role="button"
                            aria-expanded="false" aria-controls="current_job-{{ $current_job->id }}" class="span">
                            <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a>
                        </p>


                        <!-- Current Job Editing Form -->
                        <form method="POST"
                            data-route="{{ url('updateCurrentJob', $current_job->id) }}"
                            class="collapse" id="current_job-{{ $current_job->id }}">
                            <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <input type="hidden" name="current_job_id" id="current_job_id{{ $current_job->id }}"
                                value="{{ $current_job->id }}">
                            <div class="card" style="border: none;">
                                <div class="form-group">
                                    <input type="text" name="employer" id="employer{{ $current_job->id }}"
                                        placeholder="Current Employer" class="form-control w3-margin-bottom"
                                        value="{{ $current_job->employer }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="job_title" id="job_title{{ $current_job->id }}"
                                        placeholder="Job Title" class="form-control"
                                        value="{{ $current_job->job_title }}">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="location" id="location{{ $current_job->id }}"
                                        placeholder="Job Location" class="form-control"
                                        value="{{ $current_job->location }}">
                                </div>

                                <div class="form-group">
                                    <span class="w3-medium w3-text-gray">Job Description</span>
                                    <textarea class="description" rows="4" name="job_description" id="comment{{ $current_job->id }}">{{ $current_job->job_description }}</textarea>
                                </div>

                                <div class="form-group" style="width:60%;">
                                    <span class="w3-medium w3-text-gray required">Start Date</span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input value="{{ $current_job->start_year }}" list="year" 
                                            class="form-control w3-margin-bottom" id="start_year{{ $current_job->id }}" name='start_year' required>
                                            @include('inc.year') 
                                        </div>
                                        <div class="col-md-6">
                                            <input id="start_month{{ $current_job->id }}" list="month" 
                                            class="form-control w3-margin-bottom" name='start_month' value="{{ $current_job->start_month }}" required>
                                            @include('inc.month')
                                        </div>
                                    </div>
                                </div>

             



                                {{-- <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" name="start_date" id="start_date{{ $current_job->id }}"
                                        name="date" class="form-control" value="{{ $current_job->start_date }}">
                                </div> --}}
                                <div class="form-group">
                                    <button type="button" data-id={{ $current_job->id }}
                                        class="btn btn-primary updateCurrentJob">Update</button>
                                </div>
                                <hr><br>

                            </div>
                        </form>
                        <!-- End Of Current Job editing Form -->
            
            @endforeach
    </div>


    @if( $currentJobRowCount < 1)
        <!-- Current Work Addition -->
        <p class="current-job-refresh">
            <span data-toggle="collapse" href="#current_job" role="button" aria-expanded="false"
                aria-controls="current_job" class="span">
                Your Current Employment
                <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
            </span>
        </p>
        <hr>

        <p class="alert alert-success mb-3" id="current-job-alert" style="display:none"></p>

        <form method="POST" data-route="{{ route('createCurrentJob') }}"
            class="collapse current-job-refresh" id="current_job">
            @csrf
            <div class="card" style="border: none;">
                <div class="form-group">
                    <input type="text" name="employer" id="employer" placeholder="Current Employer"
                        class="form-control w3-margin-bottom" required>
                </div>
                <div class="form-group">
                    <input type="text" name="job_title" id="job_title" placeholder="Job Title" class="form-control"
                        required>
                </div>

                <div class="form-group">
                    <input type="text" name="location" id="location" placeholder="Job Location" class="form-control"
                        required>
                </div>

                <div class="form-group">
                    <span class="w3-medium w3-text-gray ">Job Description</span>
                    <textarea class="description" name="job_description" class="form-control" rows="4" id="comment"></textarea>
                </div>
                <div class="form-group" style="width:60%;">
                    <span class="w3-medium w3-text-gray required">Start Date</span>
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
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="current-job-btn">Save</button>
                </div>
                <hr><br>

            </div>
        </form>

    @endif
</div><hr>


{{-- Former employments Editing --}}
<div class="w3-container w3-margin-bottom">
    <p class="w3-text-grey w3-padding-18 "><i
            class="fa fa-suitcase fa-fw w3-margin-right w3-margin-top w3-text-blue"></i>Former Employments
    </p>

    <p id="former-job-edit-alert" class="alert alert-success" style="display:none"></p>

    <div id="former-job-list">

            @foreach($former_jobs as $former_job)

                        <p class="text-primary">
                         <span data-toggle="collapse" href="#former_job-{{ $current_job->id }}" class="span" >  {{ $former_job->job_title }} at {{ $former_job->employer }}, {{ $former_job->location }} </span>
                        
                        <a onclick="return confirm('Are you sure?')" href="{{ route('destroyFormerJob', ['id' => $former_job->id]) }}"  class="span">
                            <i class="fa fa-trash fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a>

                        <a data-toggle="collapse" href="#former_job-{{ $former_job->id }}" role="button"
                            aria-expanded="false" aria-controls="former_job-{{ $former_job->id }}" class="span">
                            <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a>
                        </p>


                        <!-- former Job Editing Form -->
                        <form method="POST"
                            data-route="{{ url('updateFormerJobs', $former_job->id) }}"
                            class="collapse" id="former_job-{{ $former_job->id }}">
                            <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <input type="hidden" name="former_job_id" id="former_job_id{{ $former_job->id }}"
                                value="{{ $former_job->id }}">
                            <div class="card" style="border: none;">
                                <div class="form-group">
                                    <input type="text" name="employer" id="employer{{ $former_job->id }}"
                                        placeholder="former Employer" class="form-control w3-margin-bottom"
                                        value="{{ $former_job->employer }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="job_title" id="job_title{{ $former_job->id }}"
                                        placeholder="Job Title" class="form-control"
                                        value="{{ $former_job->job_title }}">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="location" id="location{{ $former_job->id }}"
                                        placeholder="Job Location" class="form-control"
                                        value="{{ $former_job->location }}">
                                </div>

                                <div class="form-group">
                                    <span class="w3-medium w3-text-gray">Job Description</span>
                                    <textarea class="description" rows="4" name="job_description" id="comment{{ $former_job->id }}">{{ $former_job->job_description }}</textarea>
                                    <textarea name="job_description" class="form-control" rows="4"
                                        id="comment{{ $former_job->id }}">{{ $former_job->job_description }}</textarea>
                                </div>


                                <div class="form-group" style="width:60%;">
                                    <span class="w3-medium w3-text-gray required">Start Date</span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input value="{{ $former_job->start_year }}" list="year" 
                                            class="form-control w3-margin-bottom" id="start_year{{ $former_job->id }}" name='start_year' required>
                                            @include('inc.year') 
                                        </div>
                                        <div class="col-md-6">
                                            <input id="start_month{{ $former_job->id }}" list="month" 
                                            class="form-control w3-margin-bottom" name='start_month' value="{{ $former_job->start_month }}" required>
                                            @include('inc.month')
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" style="width:60%;">
                                    <span class="w3-medium w3-text-gray required">End Date</span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input value="{{ $former_job->end_year }}" list="year" 
                                            class="form-control w3-margin-bottom" id="end_year{{ $former_job->id }}" name='end_year' required>
                                            @include('inc.year') 
                                        </div>
                                        <div class="col-md-6">
                                            <input id="end_month{{ $former_job->id }}" list="month" 
                                            class="form-control w3-margin-bottom" name='end_month' value="{{ $former_job->end_month }}" required>
                                            @include('inc.month')
                                        </div>
                                    </div>
                                </div>



                                {{-- <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" name="start_date" id="start_date{{ $former_job->id }}"
                                        name="date" class="form-control" value="{{ $former_job->start_date }}">
                                </div>

                                <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">End Date</span>
                                    <input type="date" name="end_date" id="end_date{{ $former_job->id }}" name="date"
                                        class="form-control" value="{{ $former_job->end_date }}">
                                </div> --}}


                                <div class="form-group">
                                    <button type="button" data-id={{ $former_job->id }}
                                        class="btn btn-primary updateFormerJobs">Update</button>
                                </div>
                                <hr><br>

                            </div>
                        </form>
                        <!-- End Of former Job editing Form -->

            @endforeach

    </div>


    <!-- Former Jobs Addition-->
    <p>
        <span data-toggle="collapse" href="#former_employment" role="button" aria-expanded="false"
            aria-controls="former_employment" class="span">
            Add Former Employment Positions
            <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
        </span>
    </p>
    <hr>

    <p class="alert alert-success" id="former-job-alert" style="display:none"></p>
    <form method="POST" data-route="{{ route('createFormerJobs') }}"
        class="collapse former-employment-refresh" id="former_employment">
        @csrf
        <div class="card" style="border: none;">
            <div class="form-group">
                <input type="text" name="employer" id="employer" placeholder="Former Employer"
                    class="form-control w3-margin-bottom" required>
            </div>
            <div class="form-group">
                <input type="text" name="job_title" id="job_title" placeholder="Job Title" class="form-control"
                    required>
            </div>

            <div class="form-group">
                <input type="text" name="location" id="location" placeholder="Job Location" class="form-control"
                    required>
            </div>

            <div class="form-group">
                <span class="w3-medium w3-text-gray">Job Description</span>
                <textarea class="description" rows="4" name="job_description" id="comment"></textarea>
                {{-- <textarea  class="form-control" rows="4" id="comment"></textarea> --}}
            </div>
            <div class="form-group" style="width:60%;">
                <span class="w3-medium w3-text-gray required">Start Date</span>
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
                <span class="w3-medium w3-text-gray required">End Date</span>
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
                <button type="submit" class="btn btn-primary" id="former-employment-btn">Save</button>
            </div>

        </div>
    </form>
</div>
