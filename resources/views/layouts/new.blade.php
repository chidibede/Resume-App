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
.w3-sidebar {width: 120px;border-right: 1px solid #f1f1f1}
.w3-top{border-bottom: 1px solid #f1f1f1}
body {
  text-align:center;
  background:linear-gradient(-45deg,    #ffffff 25%, #f6f6f6 40%, #fff 55%);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
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
.fa{
  color: #3c99dc;
}
.header{
  padding-top: 35vh;
}
p {
  font-size:14px;
  color:#565656;
}
@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
</style>
</head>
<body>
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray">
    <i class="fa fa-home w3-text-blue w3-xxlarge"></i>
    <p>{{ 'Web CV' }}</p>
  </a>
  <!-- Authentication Links -->
@guest
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray">
      <i class="fa fa-sign-in w3-text-blue w3-xxlarge"></i>
      <p>{{ __('Login') }}</p>
    </a>

       @if (Route::has('register'))
      <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray">
        <i class="fa fa-user-plus w3-text-blue w3-xxlarge"></i>
        <p>{{ __('Register') }}</p>
      </a>
       @endif
  @else
      <a href="/profile" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray">
        <i class="fa fa-user w3-text-blue w3-xxlarge"></i>
        <p>{{ Auth::user()->name }} </p>
      </a>
       
      <a href="{{ '/generate_cv' }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray">
        <i class="fa fa-pencil-square-o w3-text-blue w3-xxlarge"></i>
        <p>Create CV</p>
      </a>

      <a href="/cv_view/{{Auth::user()->username}}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray">
        <i class="fa fa-file-text w3-text-blue w3-xxlarge"></i>
        <p>View CV</p>
      </a>

      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="w3-dropdown-hover w3-button w3-padding-large w3-hover-light-gray">
        <i class="fa fa-power-off w3-text-blue w3-xxlarge"></i>
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
  <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-hover-light-gray" style="width:20% !important">
    <i class="fa fa-home w3-text-blue w3-xlarge"></i>
    <p>{{ 'Web Cv' }}</p>
  </a>


  <!-- Authentication Links -->
@guest
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray" style="width:36% !important">
      <i class="fa fa-sign-in w3-text-blue w3-xlarge"></i>
      <p>{{ __('Login') }}</p>
    </a>

       @if (Route::has('register'))
          <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray" style="width:36% !important">
            <i class="fa fa-user-plus w3-text-blue w3-xlarge"></i>
            <p>{{ __('Register') }}</p>
          </a>
       @endif
  @else
      <a href="/profile" class="w3-bar-item w3-button  w3-hover-light-gray" style="width:20% !important">
        <i class="fa fa-user w3-text-blue w3-xlarge"></i>
        <p>{{ Auth::user()->name }} </p>
      </a>


        <a href="{{ '/generate_cv' }}" class="w3-bar-item w3-button w3-hover-light-gray" style="width:20% !important">
          <i class="fa fa-pencil-square-o w3-text-blue w3-xlarge"></i>
          <p>Create CV</p>
        </a>

        <a href="/cv_view/{{Auth::user()->username}}" class="w3-bar-item w3-button w3-hover-light-gray" style="width:20% !important">
          <i class="fa fa-file-text w3-text-blue w3-xlarge"></i>
          <p>View CV</p>
        </a>

        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="w3-dropdown-hover w3-button  w3-hover-light-gray" style="width:20% !important">
          <i class="fa fa-power-off w3-text-blue w3-xlarge"></i>
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
 <p><a href="{{ '/generate_cv' }}" style="background: #3c99dc;" class="w3-btn w3-ripple w3-padding-large w3-large w3-text-white w3-hover-opacity">Create Web CV </a></p>
</body>
</html>

