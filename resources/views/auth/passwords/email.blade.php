@extends('layouts.all')

@section('content')

<div class="w3-container w3-content" style="max-width:1400px;">    
  <!-- The Grid -->
  <div class="w3-row">

<div class="w3-container w3-card w3-white w3-round w3-padding-large" style="max-width:680px;margin:80px auto;">
        <header>
          <h2>{{ __('Reset Password') }}</h2>
        </header>

            @if (session('status'))
                <div class="w3-pale-green" role="alert">
                    {{ session('status') }}
                </div>
            @endif

        <form method="POST" action="{{ route('password.email') }}">
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
                <button type="submit" class="w3-button w3-text-white w3-blue w3-round w3-hover-blue-gray ">
                    {{ __('Send Password Reset Link') }}
                </button>
              </p>
    </form>
      </div>
  </div>
</div>

@endsection
