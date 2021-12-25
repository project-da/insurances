<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, fixed, after scrolling page, navbar, menu CSS examples" />
<meta name="description" content="Bootstrap 5 fixed navbar on scroll page examples, Bootstrap 5" />  

<title>Header</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
		
		window.addEventListener('scroll', function() {
	       
			if (window.scrollY > 50) {
				document.getElementById('navbar_top').classList.add('fixed-top');
				// add padding top to show content behind navbar
				navbar_height = document.querySelector('.navbar').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
			 	document.getElementById('navbar_top').classList.remove('fixed-top');
				 // remove padding top from body
				document.body.style.paddingTop = '0';
			} 
		});
	}); 
	// DOMContentLoaded  end
</script>
<style>
nav#navbar_top {
    background-color: whitesmoke;
}
.navbar-dark .navbar-brand {
    color:  #011a41;
    font-size: 205%;
}
.dropdown-menu>li>a {
    display: block;
    padding: 6px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color:  #011a41;
    white-space: nowrap;
    font-size: 150%;
    text-align: center;
}

.navbar-dark .navbar-nav .nav-link {
    color: #011a41;
}
.navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
    color: rgb(49 50 106 / 55%);
}

.navbar-dark .navbar-brand:focus, .navbar-dark .navbar-brand:hover {
    color: #000;
}
li.nav-item {
    font-size: 103%;
}
.bg-warning {
    background-color: #011a41!important;
}
.container {
    color: white;
}
span.no {
    float: right;
}
.navbar-brand {
  
     margin-top: -5rem; 
}
.navbar-brand > img {
    display: block;
    max-width: 100%;
    margin-top: 78px;
    margin-left: 51%;
}
</style></head>
<body>
<div class="bg-warning py-3">
	<div class="container">
	<span class="email"><i class="fa fa-envelope"></i>&nbsp; email@gmail.com</span> <span class="no">(+91) - 9876543210 &nbsp;&nbsp; <i class="fa fa-facebook" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-twitter" aria-hidden="true"></i></span>
    
       
	</div>
</div>





<!-- ============= COMPONENT ============== -->
<nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark ">
 <div class="container">
 	 <a class="navbar-brand" href="userindex"><img class="images" src="uploads\images\logo-five.png" ></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav">
	

	<ul class="navbar-nav ms-auto">
		<li class="nav-item"><a class="nav-link" href="userindex"><strong>Home</strong> </a></li>
		<li class="nav-item"><a class="nav-link" href="compare"> <strong>
		    Compare
		</strong> </a></li>
		<li class="nav-item dropdown">
        @guest
              @if (Route::has('login'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><strong>{{ __('Login') }}</strong></a>
              </li>
              @endif

              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else
       
    
			<a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  {{ Auth::user()->name }}</a>
		    <ul class="dropdown-menu dropdown-menu-right">
			  <li><a class="dropdown-item" href="#"> <strong>Leads</strong></a></li>
			  <li><a class="dropdown-item" href="logout"> <STRONG>Logout </STRONG> </a></li>
		    </ul>
            @endguest
		</li>
	</ul>

  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>
<!-- ============= COMPONENT END// ============== -->






</div><!-- container //  -->

</body>
</html>