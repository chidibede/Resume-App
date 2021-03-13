<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts --> 
  <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto:300');
.w3-sidebar {width: 120px;border: 1px solid #f1f1f1}
.w3-bar-item:hover{text-decoration: none;}
body {
  background:linear-gradient(-45deg,  #f1f1f6 25%,  #f1f1f6 40%, #fff 55%);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  color:#555;
 font-family:Graphik Web,Helvetica Neue,Helvetica,Arial,Verdana,sans-serif;
  font-weight:300;
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  -webkit-transform: translate3d(0,0,0);
  font-size:24px;
}
.welcome{ 
  font-family:Graphik Web,Helvetica Neue,Helvetica,Arial,Verdana,sans-serif;
  font-size:60px;
  font-weight: 300;
  color: #173F5F;
  margin-top: 12%;
  margin-bottom: 5%;
 }
 .subheading{
  font-family:Graphik Web,Helvetica Neue,Helvetica,Arial,Verdana,sans-serif;
  font-size:50px;
  font-weight: 300;
  color: #173F5F;
  margin-bottom: 5%;
 }
.sub{
  font-family:Graphik Web,Helvetica Neue,Helvetica,Arial,Verdana,sans-serif;
  font-size:40px;
  color: #173F5F;
  margin-bottom: 1%;
 }
h2 {font-size:24px;font-weight:300;}

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
.carousel-control {
    background-image:none !important;
    filter:none !important;
}
 .carousel-inner img {
    width: 100%;
    height: 100%;
  }
.carousel-control-prev {
  margin-left: -150px;
  color: red;
}
.carousel-control-next {
  margin-right: -150px;
}
.carousel-control-prev-icon {
 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23173F5F' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23173F5F' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}
}
</style>
</head>
<body>
   <div>
  <div class="w3-bar w3-blue w3-card w3-padding">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right w3-hover-light-gray w3-hover-text-blue" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars w3-xlarge "></i></a>
    <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-hover-light-gray w3-hover-text-blue ">
    <i class="fa fa-home w3-xlarge"></i>
    {{ 'Web CV' }}
    </a>

     <a href="{{ route('register') }}" class="w3-bar-item w3-large w3-right w3-medium w3-button w3-white w3-hover-light-gray w3-text-blue w3-hide-small" style="margin-top: 5px;">{{ __('Create an account') }}</a>

      <a href="{{ route('login') }}" class="w3-right w3-medium w3-text-white w3-large w3-bar-item w3-hover-text-white w3-hide-small" style="margin-top: 5px;">{{ __('Sign in') }}</a>
  </div>
</div>
<nav id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-top">

  <!-- Authentication Links -->
      <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray">
        <i class="fa fa-user-plus w3-text-blue w3-xlarge" style="margin-left: 2%;"></i>
        {{ __('Create an account') }}
      </a>
   

    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-light-gray">
      <i class="fa fa-sign-in w3-text-blue w3-xlarge" style="margin-left: 2%;"></i>
      {{ __('Login') }}
    </a>
</nav>
 <div class="container-fluid" style="width:100%; padding: 5%; padding-top:2%; background: #FAFAFA;">

  <div id="demo" class="carousel slide" data-interval="false">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
       <div class="row">
      <div class="col-sm-6">
        <p><h1 class="welcome">Build a professional profile.</h1></p>
         <p><h4>Effortlessly create a CV that gets you hired.</h4></p>
         <p>
         <a href="{{ route('register') }}">
          <button type="button" class="w3-button" style="border-radius: 0; background: #009bd6; color: white;margin-top: 5%;">Create an account
          </button>
          </a>
          </p>
      </div> 
          <div class="col-sm-6" style="padding:0;">
            <p><img src="img/new.PNG" style="width:100%; margin-top: 3%;"></p>
          </div>        
        </div>
      </div>
    <div class="carousel-item">
             <div class="row">
      <div class="col-sm-6">
        <p><h1 class="welcome">Become more accessible.</h1></p>
         <p><h4>Let the world see your professional profile with just one click.</h4></p>
         <p>
         <a href="{{ route('register') }}">
    <button type="button" class="w3-button" style="border-radius: 0; background: #009bd6; color: white;margin-top: 5%;">Create an account
    </button>
      </a>
      </p>
      </div> 
          <div class="col-sm-6" style="padding:0;">
            <p><img src="img/try.PNG" style="width:100%; margin-top: 3%;"></p>
          </div>        
        </div>
    </div>
    <div class="carousel-item">
      <div class="row">
      <div class="col-sm-6">
        <p><h1 class="welcome">Share instantly.</h1></p>
         <p><h4>Quickly share your Cv to anyone, from anywhere in any format.</h4></p>
         <p>
         <a href="{{ route('register') }}">
    <button type="button" class="w3-button" style="border-radius: 0; background: #009bd6; color: white;margin-top: 5%;">Create an account
    </button>
      </a>
      </p>
      </div> 
          <div class="col-sm-6" style="padding:0;">
            <p><img src="img/condo.PNG" style="width:95%;"></p>
          </div>        
        </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<div class="container-fluid" style="padding: 5%; padding-top: 2%;" >
 <div class="row">
  <div class="col-sm-6">
    <p><img src="img/etc.PNG" style="width:95%;"></p>
  </div>
  <div class="col-sm-6" style="margin-top: 5%;"><p><h1 class="subheading">Edit and update on the go.</h1></p>
    <p><h4>Your CV grows with you as you build that awesome career.</h4></p>
  </div>
 </div>
</div>
<div class="container-fluid" style="padding: 5%; padding-top: 2%; background: #FAFAFA;" >
 <div class="row">
    <div class="col-sm-6">
      <p><img src="img/alls.PNG" style="width:85%;"></p>
  </div>
  <div class="col-sm-6" style="margin-top: 5%;">
    <p><h1 class="subheading">Leave no stone unturned.</h1></p>
    <h5>Your Skills, spoken languages, volunteer experience, ongoing and completed projects.</h5>
  </div>

 </div>
</div>

<div class="container-fluid text-center" style="padding: 5%; padding-top: 2%;" >

    <p>
    <h2 class="sub">Get started with WebCV</h2></p>
    <p>
    <a href="{{ route('register') }}">
    <button type="button" class="w3-button w3-large" style="border-radius: 0; background: #009bd6; color: white;">Create an account
    </button>
    </a>
    </p>
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

