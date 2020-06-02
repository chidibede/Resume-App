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

                    <!-- User Bio Include-->
                    @include('inc.user_bio')

                    <!-- Skills Include-->
                    @include('inc.skills')

                    <!-- Languages Include-->
                    @include('inc.languages')

                </div>
            </div>

            <!-- End Left Column -->
        </div>




        <!-- Right Column -->
        <div class="w3-twothird w3-margin-top">

            <!-- Work -->
            <div class="w3-container w3-card w3-white  w3-margin-bottom">
                <!-- Work Include -->
                @include('inc.work')
            </div>

            <!-- Education -->
            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <!-- education Include -->
                @include('inc.education')
            </div>

            <!-- Volunteer-->
            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <!-- volunteer Include -->
                @include('inc.volunteer')
            </div>

            <!-- Projects -->
            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <!-- Projects Include -->
                @include('inc.projects')
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

{{-- action="{{ action('GenerateCvController@updateSkills', $skill->id) }}"
--}}
