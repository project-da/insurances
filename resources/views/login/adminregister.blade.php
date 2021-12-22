<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="//" rel="icon">
  <link href="admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="admin/css/style.css" rel="stylesheet">
  <link href="admin/css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="{{route('register-user')}}" method="post">
    
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
        <h2 class="form-login-heading">Create account </h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="User Name"  name="name" value="{{old('name')}}" >
          <span class="text-danger">@error('name') {{$message}} @enderror</span>
          <br>
          <input type="text" class="form-control" placeholder="Mobile Number" name="mobileNo" value="{{old('mobileNo')}}" >
          <span class="text-danger">@error('mobileNo') {{$message}} @enderror</span>
          <br>
          <input type="text" class="form-control" placeholder="email" name="Email" value="{{old('Email')}}" >
          <span class="text-danger">@error('Email') {{$message}} @enderror</span>
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}">
          <span class="text-danger">@error('password') {{$message}} @enderror</span>
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            </label>
          <button class="btn btn-theme btn-block" href="#" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
         
          <div class="registration">
            <a class="" href="adminlogin">
             Sign in here
              </a>
          </div>
        </div>
      
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="admin/lib/jquery/jquery.min.js"></script>
  <script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="admin/lib/jquery.backstretch.min.js"></script>
  
</body>

</html>
