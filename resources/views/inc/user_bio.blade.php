<div class="w3-white w3-text-grey w3-card-4">
    <div class="w3-display-container w3-padding-bottom">
        <img src="/storage/profile_pics/{{$user->profile_pics}}" height="400" style="width:100%" alt="Avatar">
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
                    <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-blue"></i>{{ $user->profession }}

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
                    <input type="text" name='profession' placeholder="Enter Profession" id="profession-input"
                        class="form-control w3-margin-bottom" value="{{ $user->profession }}" required>
                    <button type="submit" class="btn btn-primary" id='profession-btn'>Save</button>
                </div>
        </form>
    </div>
    <hr>

    <!-- Location and Address -->
    <p id='location-label'>
        <span data-toggle="collapse" href="#location" role="button" aria-expanded="false" aria-controls="location"
            class="span">

            {{-- Output Your location if exists --}}
            @if($user->location)
                <i
                    class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i>{{ $user->location }}/{{ $user->nationality }}
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
    <form method="POST" data-route="{{ route('updateLocation') }}" class="collapse" id="location">
        @csrf
        <div class="card" style="border: none;">

            <input id="nationality-input" list="country" placeholder="Enter Nationality"
                class="form-control w3-margin-bottom" name='nationality' value="{{ $user->nationality }}" required>
            @include('inc.countries')

            <div class="form-group">
                <input id="location-input" type="text" placeholder="Enter city and address"
                    class="form-control w3-margin-bottom" name='location' id="usr" value="{{ $user->location }}"
                    required>
                <button type="submit" class="btn btn-primary" id='location-btn'>Save</button>
            </div>
        </div>
    </form>
    <hr>

    <!-- Email Address -->
    <p id='email-label'>
        <span data-toggle="collapse" href="#email" role="button" aria-expanded="false" aria-controls="email"
            class="span">

            {{-- Output Your location if exists --}}
            @if($user->cv_email)
                <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i>{{ $user->cv_email }}
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
    <form method="POST" data-route="{{ route('updateEmail') }}" class="collapse" id="email">
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
        <span data-toggle="collapse" href="#phone" role="button" aria-expanded="false" aria-controls="phone"
            class="span">

    @if($user->phone_number)
                <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>{{ $user->phone_number }}
                <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
        </span>
    @else
        <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>Your Phone Number
        <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i>
        </span>
     @endif

    </p>
    <p class="alert alert-success" id="phone-alert" style="display:none"></p>
    <form method="POST" data-route="{{ route('updatePhone') }}" class="collapse" id="phone">
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
