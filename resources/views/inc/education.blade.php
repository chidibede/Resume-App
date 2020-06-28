<h2 class="w3-text-grey w3-padding-15"><i
        class="fa fa-certificate fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Education
</h2>

<p class="w3-text-grey w3-padding-18 ml-4"><i
    class="fa fa-suitcase fa-fw w3-margin-right w3-margin-top w3-text-blue"></i>Schools and Certifications
</p>

<div class="w3-container">
<p id="education-edit-alert" class="alert alert-success" style="display:none"></p>
    <div id="education-list">

       
            @foreach($educations as $education)
                
                        <p class="text-primary span">
                            <span data-toggle="collapse" href="#education-{{ $education->id }}" class="span">
                            {{ $education->school }}/{{ $education->certificate }}/{{ $education->location }}
                            </span>
                   
                        <a onclick="return confirm('Are you sure?')" href="{{ route('destroyEducation', ['id' => $education->id]) }}"  class="span">
                            <i class="fa fa-trash fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a>
                            
                        <a data-toggle="collapse" href="#education-{{ $education->id }}" role="button"
                            aria-expanded="false" aria-controls="education-{{ $education->id }}" class="span">
                            <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue "></i></a>
                        </p>


                        <!-- former Job Editing Form -->
                        <form method="POST"
                            data-route="{{ url('updateEducation', $education->id) }}"
                            class="collapse" id="education-{{ $education->id }}">
                            <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <input type="hidden" name="education_id" id="education_id{{ $education->id }}"
                                value="{{ $education->id }}">
                            <div class="card" style="border: none;">
                                <div class="form-group">
                                    <input type="text" name="school" id="school{{ $education->id }}"
                                        placeholder="Name of School/Institution" class="form-control w3-margin-bottom"
                                        value="{{ $education->school }}">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="location" id="location{{ $education->id }}"
                                        placeholder="School Location" class="form-control"
                                        value="{{ $education->location }}">
                                </div>

                                <div class="form-group">
                                    <span class="w3-medium w3-text-gray">Certificate</span>
                                    <input name="certificate" class="form-control"
                                        id="certificate{{ $education->id }}" value="{{$education->certificate }}" >
                                </div>

                                <div class="form-group" style="width:60%;">
                                    <span class="w3-medium w3-text-gray required">Start Date</span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input value="{{ $education->start_year }}" list="year" 
                                            class="form-control w3-margin-bottom" id="start_year{{ $education->id }}" name='start_year' required>
                                            @include('inc.year') 
                                        </div>
                                        <div class="col-md-6">
                                            <input id="start_month{{ $education->id }}" list="month" 
                                            class="form-control w3-margin-bottom" name='start_month' value="{{ $education->start_month }}" required>
                                            @include('inc.month')
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" style="width:60%;">
                                    <span class="w3-medium w3-text-gray required">End Date</span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input value="{{ $education->end_year }}" list="year" 
                                            class="form-control w3-margin-bottom" id="end_year{{ $education->id }}" name='end_year' required>
                                            @include('inc.year') 
                                        </div>
                                        <div class="col-md-6">
                                            <input id="end_month{{ $education->id }}" list="month" 
                                            class="form-control w3-margin-bottom" name='end_month' value="{{ $education->end_month }}" required>
                                            @include('inc.month')
                                        </div>
                                    </div>
                                </div>


                                {{-- <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">Start Date</span>
                                    <input type="date" name="start_date" id="start_date{{ $education->id }}"
                                        name="date" class="form-control" value="{{ $education->start_date }}">
                                </div> --}}

                                {{-- <div class="form-group" style="width:50%;">
                                    <span class="w3-medium w3-text-gray">End Date</span>
                                    <input type="date" name="end_date" id="end_date{{ $education->id }}" name="date"
                                        class="form-control" value="{{ $education->end_date }}">
                                </div> --}}


                                <div class="form-group">
                                    <button type="button" data-id={{ $education->id }}
                                        class="btn btn-primary updateEducation">Update</button>
                                </div>
                                <hr><br>

                            </div>
                        </form>
                        <!-- End Of former Job editing Form -->
                
            @endforeach
       
    </div>
    
    <p>
        <span data-toggle="collapse" href="#education" role="button" aria-expanded="false" aria-controls="education"
            class="span">
            Add Education and Certification
            <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
        </span>
    </p>

    <p class="alert alert-success" id="education-alert" style="display:none"></p>
    <form method="POST" data-route="{{ route('createEducation') }}"
             class="collapse education-refresh" id="education">
         @csrf    
        <div class="card" style="border: none;">
            <div class="form-group">
                <input type="text" name="school" id="school" placeholder="Name of School/Institution" class="form-control w3-margin-bottom" required>
            </div>
            <div class="form-group">
                <input type="text" name="certificate" id="certificate" placeholder="Acquired Qualification/ Certification" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="location" id="location" placeholder="School Location" class="form-control"
                    required>
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
                <button type="submit" class="btn btn-primary" id="education-btn">Save</button>
            </div>

        </div>
    </form>
    <hr>
</div>
