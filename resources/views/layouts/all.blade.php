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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>


  
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- style -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fab.css') }}" rel="stylesheet">

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
.w3-sidebar {width: 120px;border: 1px solid #f1f1f1}
.span{
  cursor: pointer;
  margin-top: 0;
}
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
.yield{
  width:80%; 
  margin: 0 14%;
  text-align: left;
}
p {
  font-size:16px;
  color:#565656;
}
.w3-top{
  margin-top:13%;
  padding-bottom: 2%;
}
.w3-top a{
  font-size:16px;
  color:#565656;
}
  .fab-container {
    position: sticky;
    bottom: 50px;
    right: 80px;
    z-index: 999;
    cursor: pointer;
}

.fab-icon-holder {
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background: #016fb9;

    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

.fab-icon-holder:hover {
    opacity: 0.8;
}

.fab-icon-holder i {
    display: flex;
    align-items: center;
    justify-content: center;

    height: 100%;
    font-size: 25px;
    color: #ffffff;
}

.fab {
    width: 60px;
    height: 60px;
    background: #d23f31;
}

.fab-options {
    list-style-type: none;
    margin: 0;

    position: absolute;
    bottom: 70px;
    right: 0;

    opacity: 0;

    transition: all 0.3s ease;
    transform: scale(0);
    transform-origin: 85% bottom;
}

.fab:hover+.fab-options,
.fab-options:hover {
    opacity: 1;
    transform: scale(1);
}

.fab-options li {
    display: flex;
    justify-content: flex-end;
    padding: 5px;
}

.fab-label {
    padding: 2px 5px;
    align-self: center;
    user-select: none;
    white-space: nowrap;
    border-radius: 3px;
    font-size: 16px;
    background: #666666;
    color: #ffffff;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    margin-right: 10px;
}

  .required:after {
    content:" *";
    color: red;
    font-weight: bolder;
  }
  table.mceLayout, textarea.tinyMCE {
    width: 100% !important;
}

input:focus {
    outline:none;
}
@media screen and (max-width: 600px) {
  .yield{
    width:98%; 
     margin: 0 auto;
  }

  table.mceLayout, textarea.richEditor {
       width: 600px !important;
    }
}
</style>
</head>
<body>
 <div>
  <div class="w3-bar w3-blue w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right w3-hover-light-gray w3-hover-text-blue" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars w3-xlarge "></i></a>
    <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray w3-hover-text-blue ">
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
        <img src="https://res.cloudinary.com/chidibede/image/upload/v1615639254/user_avatar.jpg" alt="Profile" width="80" height="80" style="border-radius: 40px;">
        <p>{{ Auth::user()->name }} </p>
      </a>

      <a href="{{ '/generate_cv' }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray">
        <i class="fa fa-pencil-square-o w3-text-blue w3-xxlarge"></i>
        <p>Create & Edit CV</p>
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
          <img src="https://res.cloudinary.com/chidibede/image/upload/v1615639254/user_avatar.jpg" alt="Profile" width="30" height="30" style="margin-left: 2%; border-radius: 15px;">
        {{ Auth::user()->name }}
      </a>

        <a href="{{ '/generate_cv' }}" class="w3-bar-item w3-button  w3-hover-light-gray" >
          <i class="fa fa-pencil-square-o w3-text-blue w3-xlarge" style="margin-left: 2%;"></i>
          Create & Edit CV
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

<div class="yield">
   @yield('content')
</div>

<footer class="w3-white w3-text-white w3-padding">
  This is the footer
</footer>


<!-- <script src="http://cdn.tinymce.com/4.4/tinymce.min.js"></script> -->
<!-- <script>
    tinymce.init({
  selector: 'textarea',
  plugins: 'lists advlist'
});
</script> -->
<script src="https://cdn.tiny.cloud/1/g7z1aorm667laumha3v62xyu47lafq9vh9diyn472xgp7r6z/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
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

