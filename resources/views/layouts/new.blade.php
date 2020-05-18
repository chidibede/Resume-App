<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
.w3-sidebar {width: 120px;}
body {
  text-align:center;
  background:#fafafa;
  animation: gradient 15s ease infinite;
  background-size: 400% 400%;
  color:#555;
  font-family:'Roboto';
  font-weight:300;
  font-size:32px;
  height:100vh;
  overflow:hidden;
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  -webkit-transform: translate3d(0,0,0);
}

div {
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
  
}

.header{
  padding-top: 40vh;
}
p {
  font-size:14px;
  color:#999;
}
</style>
</head>
<body>
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green">
    <i class="fa fa-home w3-text-teal w3-xxlarge"></i>
    <p>{{ 'Resume App' }}</p>
  </a>
  <!-- Authentication Links -->
@guest
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green">
      <i class="fa fa-sign-in w3-text-teal w3-xxlarge"></i>
      <p>{{ __('Login') }}</p>
    </a>

       @if (Route::has('register'))
      <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green">
        <i class="fa fa-user-plus w3-text-teal w3-xxlarge"></i>
        <p>{{ __('Register') }}</p>
      </a>
       @endif
  @else
      <a href="{{ '/generate_cv' }}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green">
        <i class="fa fa-sign-in w3-text-teal w3-xxlarge"></i>
        <p>CREATE CV</p>
      </a>

      <a href="/cv_view/{{Auth::user()->username}}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green">
        <i class="fa fa-user-plus w3-text-teal w3-xxlarge"></i>
        <p>VIEW CV</p>
      </a>

      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="w3-dropdown-hover w3-button w3-padding-large w3-hover-pale-green">
        <i class="fa fa-user w3-text-teal w3-xxlarge"></i>
        <p>{{ __('Logout') }}</p>
      </a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
       </form>
@endguest
</nav>

<nav class="w3-top w3-white w3-hide-large w3-hide-medium" id="myNavbar">
  <nav class="w3-bar w3-center w3-small">
  <!-- Avatar image in top left corner -->
  <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green">
    <i class="fa fa-home w3-text-teal w3-xxlarge"></i>
    <p>{{ 'Resume App' }}</p>
  </a>


  <!-- Authentication Links -->
@guest
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green" style="width:33% !important">
      <i class="fa fa-sign-in w3-text-teal w3-xxlarge"></i>
      <p>{{ __('Login') }}</p>
    </a>

       @if (Route::has('register'))
          <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green" style="width:33% !important">
            <i class="fa fa-user-plus w3-text-teal w3-xxlarge"></i>
            <p>REGISTER</p>
          </a>
       @endif
  @else
        <a href="{{ '/generate_cv' }}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green" style="width:33% !important">
          <i class="fa fa-sign-in w3-text-teal w3-xxlarge"></i>
          <p>CREATE CV</p>
        </a>

        <a href="/cv_view/{{Auth::user()->username}}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green" style="width:33% !important">
          <i class="fa fa-user-plus w3-text-teal w3-xxlarge"></i>
          <p>VIEW CV</p>
        </a>

        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="w3-dropdown-hover w3-button w3-padding-large w3-hover-pale-green" style="width:33% !important">
          <i class="fa fa-user w3-text-teal w3-xxlarge"></i>
          <p>{{ __('Logout') }}</p>
        </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
         </form>
@endguest
    </nav>
    </nav>


<div class="header">Your CV</div> 
<div> 
  <span>accessible on the web</span>
</div>
 <div> @yield('content')</div>
 <p><a href="#about" class="w3-btn w3-ripple w3-teal w3-padding-large w3-large w3-margin-top w3-hover-opacity">Create Web CV </a></p>
</body>
</html>

