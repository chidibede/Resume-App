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
  background:#fafafa;
  color:#555;
  font-family:'Roboto';
  font-weight:300;
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  -webkit-transform: translate3d(0,0,0);
  font-size:24px;
    height:100vh;
}
h2 {font-size:24px;font-weight:300;}
.yield{
  width:80%; 
  margin: 0 12%;
  text-align: left;
}
p {
  font-size:14px;
  color:#565656;
}
@media screen and (max-width: 600px) {
  .yield{
    width:98%; 
     margin: 0 auto;
  }
}
</style>
</head>
<body>
<div class="w3-fixed">
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green">
    <i class="fa fa-home w3-text-teal w3-xxlarge"></i>
    <p>{{ 'Home' }}</p>
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
</div>

<nav class="w3-white w3-hide-large w3-hide-medium w3-margin-bottom"  id="myNavbar">
  <nav class="w3-bar w3-center w3-small w3-margin-bottom">
  <!-- Avatar image in top left corner -->
  <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green" style="width:25% !important">
    <i class="fa fa-home w3-text-teal w3-xlarge"></i>
    <p>{{ 'Home' }}</p>
  </a>


  <!-- Authentication Links -->
@guest
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green" style="width:36% !important">
      <i class="fa fa-sign-in w3-text-teal w3-xlarge"></i>
      <p>{{ __('Login') }}</p>
    </a>

       @if (Route::has('register'))
          <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green" style="width:36% !important">
            <i class="fa fa-user-plus w3-text-teal w3-xlarge"></i>
            <p>REGISTER</p>
          </a>
       @endif
  @else
        <a href="{{ '/generate_cv' }}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green" style="width:25% !important">
          <i class="fa fa-sign-in w3-text-teal w3-xlarge"></i>
          <p>CREATE CV</p>
        </a>

        <a href="/cv_view/{{Auth::user()->username}}" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-green" style="width:25% !important">
          <i class="fa fa-user-plus w3-text-teal w3-xlarge"></i>
          <p>VIEW CV</p>
        </a>

        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="w3-dropdown-hover w3-button w3-padding-large w3-hover-pale-green" style="width:25% !important">
          <i class="fa fa-user w3-text-teal w3-xlarge"></i>
          <p>{{ __('Logout') }}</p>
        </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
         </form>
@endguest
    </nav>
    </nav>

<div class="yield"> @yield('content')</div>

</body>
</html>

