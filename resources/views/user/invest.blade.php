<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Import bootstrap cdn -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <!-- Import jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Import popper.js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> 
    <!-- Import javascript cdn -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- CSS stylesheet -->

 
</head>
  <style>
    .container {
    color: white;
}
span.no {
    float: right;
}
    label {
    color: blue;
}
      nav.navbar.navbar-default {
    background: #e7e5e5;
}
.container4 {
    background: whitesmoke;
    width: 53%;
    margin-right: 41%;
    padding: 10px 37px 0px 60px;
}

.col1 {
    width: 42%;
}
.container1 {
    background: whitesmoke;
    width: 29%;
    margin-left: 67%;
    margin-top: -33%;
}
p.yearly {
    margin-left: 4%;
    font-size: 59%;
}
.container2 {
    background-color: whitesmoke;
    margin-top: 11%;
    width: 100%;
    padding: 92px;
}


.bg-warning {
    background-color: #011a41!important;
}
      </style>
<body>

<div class="bg-warning py-3">
	<div class="container">
	<span class="email"><i class="fa fa-envelope"></i>&nbsp; email@gmail.com</span> <span class="no">(+91) - 9876543210 &nbsp;&nbsp; <i class="fa fa-facebook" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-twitter" aria-hidden="true"></i></span>
    
       
	</div>
</div>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <img src="..\assets\images\logo-five.png" alt="Logo" class="images" width="130">
    </div>
  </div>
</nav><br><br>
<div class="container4"><br><Br>

<input type="hidden" name="id" value="{{ $Info->id}}">
<td><img src="{{ asset('uploads/images/'. $Info->image) }}"></td> &emsp; <td><strong>{{ $Info->name }}  </strong> </td> <br><Br>
<form>
    <strong>Investment Detail</strong>
  <div class="form-row">
    <div class="col1">
      <input type="text" class="form-control" placeholder="Amount Invested">
    </div>&emsp;&emsp;&emsp;
    <div class="col1">
      <input type="text" class="form-control" placeholder="Mode of Premium">
    </div>
  </div><br><br>
  <div class="form-row">
    <div class="col1">
      <input type="text" class="form-control" placeholder="Pay Term">
    </div>&emsp;&emsp;&emsp;
    <div class="col1">
      <input type="text" class="form-control" placeholder="Policy Term">
    </div>
  </div><br>
  <hr><br>
  <strong>Personal Detail</strong>
  <div class="form-row">
    <div class="col1">
      <input type="text" class="form-control" placeholder="Full Name">
    </div>&emsp;&emsp;&emsp;
    <div class="col1">
      <input type="text" class="form-control" placeholder="Age">
    </div>
  </div><br><br>
  <div class="form-row">
    <div class="col1">
      <input type="text" class="form-control" placeholder="Mobile Number">
    </div>
    <br><hr><br>
</form>
<br>
<hr>
<br>
</div></div><br>
<div class="container1"><br>
    <strong> <h5>&emsp; Amount invested</h5></strong>
    <p class="yearly"> change to <strong>yearly</strong></p>
   
    <hr>
&emsp;<label>Sum Assured:</label>&emsp;&emsp;&emsp;<span>₹1.34 L</span>
<br>
<hr>
&emsp;<label>Income Benefit:</label>&emsp;&emsp;<span>₹1.45 K monthly</span><br>
<hr>
&emsp;<label>Total Returns:</label>&emsp;&emsp;&emsp;<span>₹1.74 L</span><br>
<hr>
<button type="submit" class="btn btn-primary">PROCEED</button><br>
</div>
<div class="container2">
  <strong>Eligibility</strong><hr>
  <table>
    <tr>
      <th width="20%">PARAMETERS</th>
      <th width="20%">MINIMUM</th>
      <th width="20%">MAXIMUM</th>
    </tr>
    <tr>
      <td width="20%">Age at Entry(Years)<br></td>
      <td width="20%">18 Yrs<br></td>
      <td width="20%">50 Yrs<br></td>
    </tr>
    <tr>
      <td width="20%">Age at Maturity(Years)<br></td>
      <td width="20%">65 Yrs<br><Br></td>
    </tr><br>
    <tr>
      <td>Premiums<br></td>
      <td>Annual 20,000rs( for pay term 6 Yrs)<br>
    Rs15,000(for pay term 8Yrs)<br>
    Rs10,000(for pay term 8 Yrs)<br>
    Monthly Rs 2,000(for pay term 6Yrs)<br>
    Rs1,500(for pay term 8Yrs)<br>
    Rs1,000(for pay term 10Yrs)<br><br>
    </td>
    <td width="15%">Maximum Rs95,000</td>
    </tr>
    <tr>
      <td>
      Premium payment option<br><br>
      </td>
      <td>	Limited Pay<br><Br></td>
    </tr>
    <tr>
      <td>Policy Term & Premium Payment Term (PPT) Combination (Years)<br><Br></td>
<td>Policy Term : 12,15,16 and 20,Pay Term: 6,8 and 10<br><br>  </td>
    </tr>
    <tr>
      <td>
      Premium payment modes
      </td>
      <td>	Yearly, Half-yearly, Quarterly and Monthly</td>
    </tr><br>
  </table>
  </div>
</body>
</html>