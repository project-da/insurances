<!DOCTYPE html>
<html lang="en" ng-app="healthplan">
<head>
<title> landingPage</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="#">
	<link href='../assets/css/font.css' rel='stylesheet' type='text/css'> 
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="../assets/css/menu.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
</head>
<style>
	div#totop {
    height: 14%;
}
.col-md-4 {
    margin-top: 3%;
}
</style>
<body>
<!-- Google Tag Manager (noscript) -->
<!-- End Google Tag Manager (noscript) -->
 <!-- NAVBAR ================================================== -->  
@include('user/header')

 <!-- NAVBAR ================================================== -->  
 <link href="../assets/css/my-style.css" rel="stylesheet">
	<!-- NAVBAR ================================================== --> 
	<style type="text/css">
.formLayout {
    background-color: #011a41;
    border: solid 1px #a1a1a1;
    padding: 12px;
    width: 100%;
}
	.formLayout select 
	{
		margin-bottom: 5px;
		border-radius: 5px;
		height: 30px;
	}
	.formLayout input 
	{
		display: block;
		width: 100%;
		float: left;
		margin-bottom: 5px;
		height: 30px;
		/* border-radius: 5px; */
		padding-left: 5px;
	}
	.formLayout label
	{
		display: block;
		width: 100%;
		float: left;
		text-align: left;
		padding-right: 20px;
	}
	br 	{ clear: left; }
	.slider-right {	margin-top: 50px; }
	.buy_link{margin-top: 15px;}
	.carousel-indicators .active {  background-color: #444; }
	.carousel-indicators { bottom: -15px;}
	</style>
	<!-- slider sec -->
	<div class="slider-section" style="padding:30px 0px 0px 0px;border-bottom:1px solid #eee;background-image: url('assets/images/header-sky.png');">
      <div class="layout"> 
	    <div class="row">
          <div class="slider-right"> 		
		 <div class="col-md-8"> 
	     <div id="Carousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#Carousel" data-slide-to="0" class="active"></li>
				<li data-target="#Carousel" data-slide-to="1"></li>
				<li data-target="#Carousel" data-slide-to="2"></li>
			</ol> 
			<div class="carousel-inner">
				<div class="item active">
					<div class="col-md-12"> 
						<div class="sleft mob-img-size"> 
                        <img src="assets\images\slider1.png" alt="First slide" style=" margin-top: -20px;"> 	
						</div>
			        </div>					
				</div>
			    <div class="item">
				    <div class="col-md-12"> 
						 <div class="sleft mob-img-size"> 
                         <img src="assets\images\slider2.png" alt="Second slide" style=" margin-top: -20px;">
						 </div>
			        </div>										
				</div> 	
				<div class="item">
				    <div class="col-md-12"> 
						 <div class="sleft mob-img-size"> 
                         <img  src="assets\images\slider3.png" alt="Third slide" style=" margin-top: -20px;">	
						 </div>
			        </div>										
				</div>
			</div>
			</div> <!-- Carousel ends -->
		 </div> <!-- md8 -->
		 <div class="col-md-4">	
			<div class="col-md-10">		 
			<form  method="post" action="add">
            @csrf
			<div class="formLayout">
				<h1 style="vertical-align:middle; text-align:center; color:white; font-weight:800; font-size:32px; margin-top:5px; font-family: Times New Roman;">Top 5 Term Plans</h1>
				<div > 

				<input  type="text" name="name"  placeholder="Name" id="name" style="width:214px; " value="{{ old('name')}}"/><br>
                <span style="color:red">@error('name'){{ $message }} @enderror</span>
				<label>DOB:</label>
				<input  type="DATE" name="birth"  placeholder="dd/mm/yyyy" id="birth" style="width:214px;" value="{{ old('birth')}}"/><br>
                <span style="color:red">@error('birth'){{ $message }} @enderror</span>
				<br>
				<label>Gender</label>
				<select class="dropdown" name="gender" style="width:214px;"  value="{{ old('gender')}}">
					<option>Male</option>
					<option>Female</option>
				</select><br>
				<label>Smoking</label>
				<select class="dropdown" name="smoking" style="width:214px;"  value="{{ old('smoking')}}">
					<option value="false">No</option>
					<option value="true">Yes</option>
				</select><br>
					<label>Income</label>
				<select class="dropdown" name="income" style="width:214px;"   value="{{ old('income')}}">
					<option value="Less than 3Lakhs">Less than 3Lakhs</option>
					<option value="3Lakhs - 5Lakhs">3Lakhs - 5Lakhs</option>
					<option value="5Lakhs - 7Lakhs" selected="selected">5Lakhs - 7Lakhs</option>
					<option value="7Lakhs - 10Lakhs">7Lakhs - 10Lakhs</option>
					<option value="More than 10lakhs">More than 10lakhs</option>
				</select><br>
				<input name="phone"  type="text" maxlength="10" style="width:214px;"   placeholder="Mobile Number" id="phno" value="{{ old('phone')}}" style="width:178px;" /><br>
                <span style="color:red">@error('phone'){{ $message }} @enderror</span>	
				<input name="email" type="text" placeholder="Email" style="width:214px;"   id="email" value="{{ old('email')}}" style="width:214px;" regex="^['_A-Za-z0-9-]+(\.['_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*\.(([A-Za-z]{2,3})|(aero|coop|info|museum|name))$" /><br>
                <span style="color:red">@error('email'){{ $message }} @enderror</span>
				<!-- <label>City</label> -->
				<select class="dropdown" name="city" id="city" style="width:214px;"  value="{{ old('city')}}">
					<option value="">Select City</option>
					<option value='BANGALORE'>BANGALORE</option>
                    <option value='CHENNAI'>CHENNAI</option>
                    <option value='DELHI'>DELHI</option>
                    <option value='FARIDABAD'>FARIDABAD</option>
                    <option value='GHAZIABAD'>GHAZIABAD</option>
                    <option value='GURGAON'>GURGAON</option>
                    <option value='HYDERABAD'>HYDERABAD</option>
                    <option value='KOLKATA'>KOLKATA</option>
                    <option value='MUMBAI'>MUMBAI</option>
                    <option value='NOIDA'>NOIDA</option>
                    <option value='PUNE'>PUNE</option>
                    <option value='THANE'>THANE</option>	
					<option value='AGRA'>AGRA</option>
                    <option value='AHMEDABAD'>AHMEDABAD</option>
                    <option value='ALIGARH'>ALIGARH</option>
                    <option value='ALLAHABAD'>ALLAHABAD</option>
                   <option value="OTHER">OTHER</option>	
				</select><br>
				<div><input type="checkbox" id="chkagree" name="chkadgree" value="1" style="display: inline-block; width: auto; margin-right: 5px; height: 18px;" checked> <span style="color:#fff">I agree to <a href="http://www.trucompare.in/term_condition.php" target="_blank" style="color:#FD772F">terms and conditions</a> and <a href="http://www.trucompare.in/privacy.php" target="_blank" style="color:#FD772F">privacy policy </a> </span></div>
				<button type="submit" class="buy_link" style="width:214px;"  name="submit" id="btnSubmit">SAVE</button>
				</div>
			</div>
			</form>
			</div>
		</div> <!-- md4 -->
	</div> <!-- slider-right -->
   </div> <!-- row -->
</div> <!-- layout -->
</div>


<!------Logo Section------------>

<section id="indent" style="background-color:#fff;">
	<div class="layout">
	<div class="row">
		<div class="col-md-12">
			<div class="client">                   
				<div class="client-img"><img src="assets/images/hdfc-logo.png" title=""/></div>
				<div class="client-img"><img src="assets/images/eldewesis-logo.jpg" /></div> 
				<div class="client-img"><img src="assets/images/bajaj-logo.png" title=""/></div>
				<div class="client-img"><img src="assets/images/pnb.jpg"></div>
				<div class="client-img"><img src="assets/images/SBILogo_97by47.jpg" /></div>
				<div class="client-img"><img src="assets/images/Lic_front.jpg" /> </div>
				<div class="client-img"><img src="assets/images/Bharti_Axa_logo.png" /> </div>
				<div class="client-img"><img src="assets/images/reliance.jpg"></div>
				<div class="client-img"><img src="assets/images/ICICI Prudential.jpg"></div>
				<div class="client-img"><img src="assets/images/tata1.jpg"></div>
				<div class="client-img"><img src="assets/images/Aegon.png"></div>
				<div class="client-img"><img src="assets/images/agon_religare.jpg" /></div> 
				<div class="client-img"><img src="assets/images/kotak.jpg"></div>
				<div class="client-img"><img src="assets/images/exide.png"></div>
				<div class="client-img"><img src="assets/images/idbi-federal-life.jpg"></div>							
				<div class="client-img"><img src="assets/images/birlasun.jpg"></div> 													 
		    </div>
		</div>
    </div>
    </div>
</section>
<!-- Welcome Section-->
<section id="term">
        <div class="layout">
        <div class="row text-center">
		<div class="col-sm-12 text-center">
				 <h3><strong style="color: #FF5F00;">We believe that every life should be insured</strong></h3> 
				 <p class="p">Getting yourself insured is the first step toward building your financial future. That’s why we offer detailed term plan comparison complete with latest IRDA data so that you can buy the best term plan at the lowest cost. </p>
     </div>
       <div class="col-md-4">
         <div class="box red">
	    	<img src="assets/images/newratios.png" style="width: 90px;"/>
		<span class="box-title">1. Compare Claim Ratios </span> 
	   <p> Compare claim ratio of various insurance companies based on latest IRDA data. </p>
		<span class="pr-description"> <img src="assets/images/treu.jpg" alt="treu" style="height: 267px;"/> </span> 
		<a class="buy_link" href="#"><span> COMPARE NOW</span></a>
		</div>
      </div>
      <div class="col-md-4">
        <div class="box orange">
		<img src="assets/images/newdata.png" style="width: 90px;"/>
		<span class="box-title">2. Historical Data </span>
        <p> Compare and buy online directly from the insurers with click of a button. Easy, fast and convenient! </p>		
		<span class="pr-description"> <img src="assets/images/claimratio.png" alt="claimratio" style="height: 267px;"/> </span>
		<a class="buy_link" href="#"><span> COMPARE NOW</span></a>
		</div>
      </div>
      <div class="col-md-4">
        <div class="box green">
	  <img src="assets/images/newpremium.png" style="width: 90px;"/> 
		<span class="box-title">3. Compare Premium </span> 
		<p> Compare premiums of various online term insurance policies. Find policies that offer real value for money. </p>
		<span class="pr-description"> <img src="assets/images/ab.jpg" alt="ab" style="height: 267px;"/> </span>
		<a class="buy_link" href="#"><span> COMPARE NOW</span></a>
		</div>
      </div>
    </div>

        </div>
</section><div class="band-footer">
	<footer id="footer">
		<div class="layout">
			<div class="row">
				<div class="col-md-12">        
					<p>Insurance is the subject matter of solicitation. </p>
					<div class="footerlink">
						<ul>
							<li><a href="#">Contact Us</a></li>
							<li class="limain"><a href="#">About Us</a></li>
							<li class="limain"><a href="#">Privacy Policy</a></li>
							<li class="limain"><a href="#">Terms &amp; Conditions</a></li>
						</ul>
						<div style="clear:both;"></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<script src="../assets/js/menu.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrapvalidator.js"></script>
  
 <script>
$('#Carousel').carousel({
   interval: 3000
});
</script>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->



</body>
</html>