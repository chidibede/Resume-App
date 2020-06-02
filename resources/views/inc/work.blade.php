<h2 class="w3-text-grey w3-padding-18 w3-center"><i
        class="fa fa-suitcase fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Work
    Experience</h2>
<p class="w3-text-grey w3-padding-18 ml-3"><i
        class="fa fa-suitcase fa-fw w3-margin-right w3-margin-top w3-text-blue"></i>Current Employment
</p>
<div class="w3-container">

    <p id="current-job-edit-alert" class="alert alert-success" style="display:none"></p>

    <table class="table" id="current-job-list">

        <tbody>
            @foreach($current_jobs as $current_job)
                <tr>
                    <td>
                        <p class="text-primary">
                            {{ $current_job->job_title }}/{{ $current_job->employer }}/{{ $current_job->location }}
                        </p>
                    </td>

                    <td>
                        <a data-toggle="collapse" href="#current_job-{{ $current_job->id }}" role="button"
                            aria-expanded="false" aria-controls="current_job-{{ $current_job->id }}" class="span">
                            <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue mt-3"></i></a>



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
                                    <textarea name="job_description" class="form-control" rows="4"
                                        id="comment{{ $current_job->id }}">{{ $current_job->job_description }}</textarea>
                                </div>
                                <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" name="start_date" id="start_date{{ $current_job->id }}"
                                        name="date" class="form-control" value="{{ $current_job->start_date }}">
                                </div>
                                <div class="form-group">
                                    <button type="button" data-id={{ $current_job->id }}
                                        class="btn btn-primary updateCurrentJob">Save</button>
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

        <p class="alert alert-success" id="current-job-alert" style="display:none"></p>

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
                    <input type="text" name="location" id="job_title" placeholder="Job Location" class="form-control"
                        required>
                </div>

                <div class="form-group">
                    <span class="w3-medium w3-text-gray">Job Description</span>
                    <textarea name="job_description" class="form-control" rows="4" id="comment"></textarea>
                </div>
                <div class="form-group" style="width:50%;">
                    <span class="w3-medium w3-text-gray">Start Date</span>
                    <input type="date" name="start_date" id="start_date" name="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="current-job-btn">Save</button>
                </div>
                <hr><br>

            </div>
        </form>

    @endif
</div>


{{-- Former employments Editing --}}
<div class="w3-container w3-margin-bottom">
    <p class="w3-text-grey w3-padding-18 "><i
            class="fa fa-suitcase fa-fw w3-margin-right w3-margin-top w3-text-blue"></i>Former Employments
    </p>

    <p id="former-job-edit-alert" class="alert alert-success" style="display:none"></p>

    <table class="table" id="former-job-list">

        <tbody>
            @foreach($former_jobs as $former_job)
                <tr>
                    <td>
                        <p class="text-primary">
                            {{ $former_job->job_title }}/{{ $former_job->employer }}/{{ $former_job->location }}
                        </p>
                    </td>

                    <td>
                        <a data-toggle="collapse" href="#former_job-{{ $former_job->id }}" role="button"
                            aria-expanded="false" aria-controls="former_job-{{ $former_job->id }}" class="span">
                            <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue mt-3"></i></a>



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
                                    <textarea name="job_description" class="form-control" rows="4"
                                        id="comment{{ $former_job->id }}">{{ $former_job->job_description }}</textarea>
                                </div>
                                <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" name="start_date" id="start_date{{ $former_job->id }}"
                                        name="date" class="form-control" value="{{ $former_job->start_date }}">
                                </div>

                                <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">End Date</span>
                                    <input type="date" name="end_date" id="end_date{{ $former_job->id }}" name="date"
                                        class="form-control" value="{{ $former_job->end_date }}">
                                </div>


                                <div class="form-group">
                                    <button type="button" data-id={{ $former_job->id }}
                                        class="btn btn-primary updateFormerJobs">Save</button>
                                </div>
                                <hr><br>

                            </div>
                        </form>
                        <!-- End Of former Job editing Form -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <!-- Former Jobs Addition-->
    <p>
        <span data-toggle="collapse" href="#former_employment" role="button" aria-expanded="false"
            aria-controls="former_employment" class="span">
            Former Employment Positions
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
                <textarea name="job_description" class="form-control" rows="4" id="comment"></textarea>
            </div>
            <div class="form-group" style="width:50%;">
                <span class="w3-medium w3-text-gray">Start Date</span>
                <input type="date" name="start_date" id="start date" name="date" class="form-control" required>
            </div>

            <div class="form-group" style="width:50%;">
                <span class="w3-medium w3-text-gray">End Date</span>
                <input type="date" name="end_date" id="end_date" name="date" class="form-control" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="former-employment-btn">Save</button>
            </div>

        </div>
    </form>
</div>