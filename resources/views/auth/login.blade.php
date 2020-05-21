@extends('layouts.all')

@section('content')

<div class="w3-container w3-content" style="max-width:1400px;">    
  <!-- The Grid -->
  <div class="w3-row">

<div class="w3-container w3-card w3-white w3-round w3-padding-large" style="max-width:680px;margin:60px auto;">
        <header>
          <h2>{{ __('Login') }}</h2>
        </header>
        <form method="POST" action="{{ route('login') }}">
        @csrf
       <p class="w3-margin-top"><br>
        <label>{{ __('E-Mail Address') }}</label>
        <input  id="email" type="email" class="w3-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="w3-text-red" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </p>

        <p>
        <label>{{ __('Password') }}</label>
        <input id="password" type="password" class="w3-input form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="current-password">

        @error('password')
            <span class="w3-text-red" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </p>

      <p><br>
         <input class="w3-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
        {{ __('Remember Me') }}
        </label> 
      </p>

        <p>
            <button type="submit" class="w3-button w3-text-white w3-blue">
                {{ __('Login') }}
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
