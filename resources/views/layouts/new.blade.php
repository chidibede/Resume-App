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
.w3-sidebar {width: 120px;border: 1px solid #f1f1f1}
body {

  background:linear-gradient(-45deg, #f5f7f8 25%, #f6f6f6 40%, #fff 55%);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
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

.header{
  padding-top: 35vh;
}

p {
  font-size:16px;
  color:#565656;
}
.w3-top{
  margin-top:13%;
}
.w3-top a{
  font-size:18px;
  color:#565656;
}

</style>
</head>
<body>
 <div>
  <div class="w3-bar w3-blue w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right w3-hover-white w3-hover-text-blue" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars w3-xlarge "></i></a>
    <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-hover-text-blue ">
    <i class="fa fa-home   w3-xlarge"></i>
    {{ 'Web CV' }}
    </a>
  </div>
</div>
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">

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

<nav id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-top">

  <!-- Authentication Links -->
@guest
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray">
      <i class="fa fa-sign-in w3-text-blue w3-xlarge" style="margin-left: 2%;"></i>
      {{ __('Login') }}
    </a>

       @if (Route::has('register'))
          <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray">
            <i class="fa fa-user-plus w3-text-blue w3-xlarge" style="margin-left: 2%;"></i>
            {{ __('Register') }}
          </a>
       @endif
  @else
    <a href="/profile" class="w3-bar-item w3-button w3-hover-light-gray" >
        <i class="fa fa-user w3-text-blue w3-xlarge"style="margin-left: 2%;"></i>
        {{ Auth::user()->name }}
      </a>

        <a href="{{ '/generate_cv' }}" class="w3-bar-item w3-button  w3-hover-light-gray" >
          <i class="fa fa-pencil-square-o w3-text-blue w3-xlarge" style="margin-left: 2%;"></i>
          Create CV
        </a>

        <a href="/cv_view/{{Auth::user()->username}}" class="w3-bar-item w3-button  w3-hover-light-gray" >
          <i class="fa fa-file-text w3-text-blue w3-xlarge" style="margin-left: 2%;"></i>
          View CV
        </a>

        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="w3-bar-item w3-button w3-hover-light-gray" >
          <i class="fa fa-power-off w3-text-blue w3-xlarge" style="margin-left: 2%;"></i>
          {{ __('Logout') }}
        </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
         </form>
@endguest
</nav>

<div class="w3-center">
<div class="header">Your CV accessible on the web
</div><br> 
<a href="{{ '/generate_cv' }}" style="background: #3c99dc;" class="w3-btn w3-ripple w3-padding-large w3-large w3-text-white w3-hover-opacity">Create Web CV </a>
</div>

 <script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</body>
</html>

