@extends('layouts.all')

@section('content')

<div class="w3-container w3-content" style="max-width:1400px;">    
  <!-- The Grid -->
  <div class="w3-row">

<div class="w3-container w3-card w3-white w3-round w3-padding-large" style="max-width:680px;margin:80px auto;">
        <header>
          <h2>{{ __('Confirm Password') }}</h2>
        </header>
         {{ __('Please confirm your password before continuing.') }}

    <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

        <p><br>
          <label>{{ __('Password') }}</label>
            <input id="password" type="password" class="w3-input form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="current-password">

                @error('password')
                    <span class="w3-text-red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
       </p>
        <p>
            <button type="submit" class="w3-button w3-text-white w3-blue">
                {{ __('Confirm Password') }}
            </button>

            @if (Route::has('password.request'))
                <a class="w3-text-blue w3-medium w3-margin-left" href="{{ route('password.request') }}" style="text-decoration: none;">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </p>
        </form>
      </div>
  </div>
</div>
@endsection
