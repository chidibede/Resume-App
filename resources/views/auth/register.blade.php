@extends('layouts.all')

@section('content')

<div class="w3-container w3-content" style="max-width:1400px;">    
  <!-- The Grid -->
<div class="w3-row">

<div class="w3-container w3-card w3-white w3-round w3-padding-large" style="max-width:680px;margin:80px auto;">
        <header>
          <h2>{{ __('Register') }}</h2>
        </header>
        <form method="POST" action="{{ route('register') }}"><br>
        @csrf
       <p class="w3-margin-top">
        <label>{{ __('Name') }}</label>
        <input id="name" type="text" class="w3-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </p>

        <p>
        <label>{{ __('Username') }}</label>
         <input id="username" type="username" class="w3-input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username">

            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </p>

      <p class="w3-margin-top">
        <label for="email">{{ __('E-Mail Address') }}</label>
           <input id="email" type="email" class="w3-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </p>

      <p class="w3-margin-top">
            <label for="password">{{ __('Password') }}</label>
           <input id="password" type="password" class="w3-input @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

        @error('password')
            <span class="w3-text-red" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </p>

      <p class="w3-margin-top">
        <label>{{__('Confirm Password') }}</label>

        <input id="password-confirm" type="password" class="w3-input" name="password_confirmation"  autocomplete="new-password">
      </p>

        <p><br>
            <button type="submit" class="w3-button w3-text-white w3-blue w3-round">
                 {{ __('Register') }}
            </button>
        </p>
        </form>
      </div>
  </div>
</div>

@endsection
