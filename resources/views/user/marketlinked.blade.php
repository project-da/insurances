<!DOCTYPE html>
<html>
  
<head>
    <title>Investment</title>
  
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
    <style>
        html,body {
            height: 100%;
        }
        #green {
           
            background: whitesmoke;
            text-align: center;
            color: black;
            padding: 15px;
        }
        nav.navbar.navbar-expand-lg.navbar-light.bg-primary {background-color: whitesmoke !important;}
        .table {width: 79%; height: 27vh; margin-left: 4%;}
        input.rupee {border: hidden;}
        span.inserted { font-size: 78%; margin-left: -40%;}
        select#pays { border: hidden;     width: 91%;}
        label.pay {margin-left: -45%;     font-size: 85%;}
        select#plan {
    border: hidden;
    width: 63%;
}
        label.navbar-brand {
    font-size: 100%;
    padding: 1%;
}
select#past {
    border: hidden;
    width: 16%;
}
label.navbar {
    margin-left: 10%;
}
i.fa.fa-inr {
    text-align: justify;
}
.container {
    background-color: whitesmoke;
    width: 374%;
    height: 148%;
    margin-left: -276%;
    margin-top: -90%;
}
.Advantage {
    margin-left: 32%;
}
img.get {
    width: 13%;
    text-align: justify;

}
label.get {
    font-size: 96%;
    text-align: justify;

}

.irr_block {
    font-size: 84%;
    text-align: justify;
}
.compare {
    font-size: 92%;
    text-align: initial;
}
.\> {
    margin-left: 84%;
    margin-top: -12%;
    border: hidden;
}
span.name.mt-2 {
    font-size: 90%;
    text-align: justify;
}
.modal-content {
    width: 143%;
    margin-left: -16%;
}
h6.matlab {
    margin-left: 20%;
    font-size: 92%;
}
strong.sky {
    font-size: 118%;
    color: #0a9edb;
}
strong.red {
    font-size: 119%;
    color: #ef1e1e;
    margin-left: 15%;
}
img.bulb {
    width: 15%;
}
button.btn.btn-sm.btn-danger {
    margin-left: 15%;
}
button.modalfade {
    border: hidden;
}
button.plantype {
    border: hidden;
    text-align: -webkit-match-parent;
}
.modal-dialog1 {
    width: 19%;
    margin-left: 21%;
    margin-top: 5%;
}
.buy_link {
    display: inline-block;
    text-transform: uppercase;
    font-weight: 800;
    font-size: 16px;
    line-height: 2px;
    font-family: 'Open Sans', sans-serif;
    color: #272323;
    margin-right: 100px;
    margin-top: 5px;
    position: relative;
    padding: 20px 20px 20px 20px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    border: black;
}
ul.a {
  list-style-type: circle;
}
.models {
    max-width: 780px;
    height: 540px;
    margin: 0 auto;
    position: fixed;
    overflow-x: hidden;
    overflow-y: hidden;
    top: 50px;
    right: 0;
    background: #fff;
    bottom: 0;
    left: 0;
    z-index: 1050;
    outline: 0;
    transition: opacity .15s linear;
    border-radius: 6px;
}
.closebutton img {
    vertical-align: middle;
    position: absolute!important;
    top: 13px!important;
    right: 13px!important;
}
.compareUlip {
    width: 100%;
    float: left;
    margin-top: 50px;
}
.compareUlip .headingUlip ul {
    width: 100%;
    display: table;
    background: #efefef;
    margin: 0;
    border-top: 1px solid #e1e1e1;
    border-bottom: 1px solid #e1e1e1;
}
.compareUlip .headingUlip ul li :first-child {
    background: #fff;
    border: 0;
    text-align: left;
    padding-left: 16px;
}
.compareUlip .headingUlip ul li {
    width: 25%;
    font-size: 15px;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    height: 75px;
    color: #222;
    font-weight: 600;
    position: relative;
}
.compareUlip .headingUlip ul li {
    width: 25%;
    font-size: 15px;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    height: 75px;
    color: #222;
    font-weight: 600;
    position: relative;
}
.compareUlip ul li {
    list-style: none;
}
.compareUlip .headingUlip ul li .vs {
    position: absolute;
    right: -10px;
    top: 37%;
    background: #fff;
    border-radius: 100px;
    font-size: 11px;
    width: 22px;
    height: 22px;
    color: #666;
    line-height: 21px;
    z-index: 9;
}
.compareUlip .headingUlip ul li {
    width: 25%;
    font-size: 15px;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    height: 75px;
    color: #222;
    font-weight: 600;
    position: relative;
}
.ulipContnet {
    width: 100%;
    float: left;
    padding: 0;
}
.ulipContnet ul{
    display: table;
    width: 100%;
    border-bottom: 1px solid #e1e1e1;
    margin: 0;
}
.compareUlip ul {
    padding: 0;
}
.ulipContnet ul li:first-child {
    font-weight: 500;
    color: #777;
    text-align: left;
    padding-left: 2%;
}
.ulipContnet ul li {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    font-weight: 600;
    position: relative;
    width: 25%;
    color: #100d0c;
    height: 65px;
    font-size: 13px;
}
.compareUlip ul li {
    list-style: none;
}
.ulipContnet ul li .info {
    top: 2px;
    position: relative;
    left: 0;
    display: inline-block;
}
.compareUlip ul li {
    list-style: none;
}
.ulipContnet ul li .infoicon {
    width: 12px;
    cursor: pointer;
}
.ulipContnet ul li .info .hover-text {
    -webkit-transform: scale(0);
    -webkit-transform-origin: top left;
    border: 1px solid #004fff!important;
    background-color: #fff;
    border-radius: 3px;
    color: #004fff;
    cursor: default;
    font-size: 12px;
    min-height: 32px;
    line-height: 16px;
    left: 200%;
    opacity: 0;
    padding: 7px 2px 7px 5px;
    pointer-events: none;
    position: absolute;
    top: -5px;
    transform: scale(0);
    transform-origin: top left;
    transition: all .4s cubic-bezier(.25,.8,.25,1);
    z-index: 1;
    width: 121px;
    font-style: normal;
    font-weight: 600;
    text-align: left;
}
.ulipContnet ul li {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    font-weight: 600;
    position: relative;
    width: 25%;
    color: #100d0c;
    height: 65px;
    font-size: 13px;
}
.ulipContnet ul[_ngcontent-ssf-c89] li[_ngcontent-ssf-c89] img[_ngcontent-ssf-c89] {
    width: 25px;
}

.ulipContnet[_ngcontent-ssf-c89] ul[_ngcontent-ssf-c89] {
    display: table;
    width: 100%;
    border-bottom: 1px solid #e1e1e1;
    margin: 0;
}
.ulipContnet[_ngcontent-ssf-c89] ul[_ngcontent-ssf-c89] li[_ngcontent-ssf-c89]:first-child {
    font-weight: 500;
    color: #777;
    text-align: left;
    padding-left: 2%;
}
.ulipContnet[_ngcontent-ssf-c89] ul[_ngcontent-ssf-c89] li[_ngcontent-ssf-c89] .info[_ngcontent-ssf-c89] {
    top: 2px;
    position: relative;
    left: 0;
    display: inline-block;
}
.ulipContnet[_ngcontent-ssf-c89] ul[_ngcontent-ssf-c89] li[_ngcontent-ssf-c89] .infoicon[_ngcontent-ssf-c89] {
    width: 12px;
    cursor: pointer;
}

</style>
</head>
  
<body>
    <!-- h-100 takes the full height of the body-->
    <div class="container-fluid h-100">
  
        <!-- h-100 takes the full height 
                 of the container-->
        <div class="row h-100">
            <div class="col-2" id="green">
            <img src="assets\images\Client-2.jpg" alt="Logo" class="images" width="53%"><br><br>
                
                  <span class="name mt-3"> </span><hr>

                  <span class="name mt-2"> <strong> Invested Amount </strong> </span><br><br>
                <!-- Navigation links in sidebar-->
                <i class="fa fa-inr"><input type="text" name="t1" class="rupee" style="width:70%"><a href="#">yearly</a></i>
               <hr>
               <span class="name mt-2"> <strong> Invest for </strong> </span><br><br>
                <!-- Navigation links in sidebar-->
                <i class="fa fa-inr"><input type="text" name="t1" class="rupee" style="width:70%"><a href="#">Edit</a></i>
               <hr>
               <span class="name mt-2"> <strong> Withdraw after </strong> </span><br><br>
                <!-- Navigation links in sidebar-->
                <i class="fa fa-inr"><input type="text" name="t1" class="rupee" style="width:70%"><a href="#">Edit</a></i>
               <hr>
                <div class="irr_block"></div>
    <div class="compare"> Compare ULIPs/MFs
                                    </div> 
                               <div class=">" >    <button type="button"  data-toggle="modal" data-target="#exampleModal">
    {{ __('>') }}
</button><br    ></div>
<div class="compare"> Power of Compounding Calculator
                                    </div> 
                                    <div class=">" >
<button type="button"  data-toggle="modal" data-target="#exampleModal">
    {{ __('>') }}
</button></div><br>
<div class="compare"> Market Info </div> <div class=">" >
<button type="button"  data-toggle="modal" data-target="#exampleModal">
    {{ __('>') }}
</button></div>

                            </div>
       
            <div class="col-10" style="padding: 0;">
  
                <!-- Top navbar -->
                <nav class="navbar navbar-expand-lg 
                                navbar-light bg-primary">
                  
                                <button type="button" class="plantype" data-toggle="modal" data-target="#exampleModal1"> 
                 Plan type
                <select name="plan" id="plan">
               <option value="Market Linked"  >Market Linked</a></option>
              
                </select></button>
                     
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog1" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Plan Type:</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  
            <ul class="a">   
            <li> <a href="{{ route('compare') }}"  class="buy_link"> 100% Guaranteed</a></li>
           <li> <a href="{{ route('marketlinked') }}" class="buy_link" > Market Linked</a></li>
        </ul>
    </div>
</div>
</div>
                     
                <label class="navbar">Returns:</label>
                <select name="past" id="past">
                <option value="">no selected</option>
               @foreach($list as $item)
               <option value=" {{ $item->id }}">{{ $item-> years }}</option>
               @endforeach
                </select>
                
                </nav><br><br>
  <div>
      <div class="row">
          <div class="col-md-11">
<table class="table table-stripped table-bordered">

<tbody>
    @foreach($list as $item)
   <tr>
       <td width="2%">{{$item->id}}</td>
       <td width="15%"><br><img src="{{ asset('assets/images/'. $item->image) }}" alt="images"><br><br><strong> {{ $item->name }} </strong></td>
       <td width="5%"><br>{{$item->years }} Returns<br>  {{ $item->returns }}</td>
       <td width="5%"><br>Lumpsum Payout<br>{{ $item->LumpsumPayout }}</td>
       <td width="5%"><br><button type="button" class="btn btn-sm btn-success" data-toggle="modal" >
    {{ __('Details') }}
</button></td>
    </tr>
    @endforeach
</tbody>
</table>
</div>

<div class="col-md-1">
    <div class="container">
        <hr>
<div class="Advantage"><strong>Advantage</strong></div><hr><br>
<img class="get" src="assets\images\get_extra.jpg" >
<label class="get">	Zero Commission</label>
<h6 class="matlab">No Commission Matlab zyada fayda</h6><br>
<img class="get" src="assets\images\download.jpg" >
<label class="get">	No Hidden Charges</label>
<h6 class="matlab">Full Transparency</h6><br>
<img class="get" src="assets\images\download2.jpg" >
<label class="get">	Expert Advice</label>
<h6 class="matlab">	Certified advisors already happy to help</h6><br>
<img class="get" src="assets\images\certified3.jpg" >
<label class="get">	100% Calls Recorded</label>
<h6 class="matlab">Honest Selling</h6>

<hr><br>
<img class="bulb" src="assets\images\bulb.svg">
<strong class="sky">India’s Growth Story</strong>  <strong > is just getting started!</strong> &nbsp;&nbsp;
<br><br>
<img class="graph" src="assets\images\growth_retirement_banner.webp"><br><Br><br>
<button type="button" class="btn btn-sm btn-danger" data-toggle="modal"  style="width:70%">  Know More</button>
</div>
</div>
</div>
  </div>
               
            </div>
        </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
           <div _ngcontent-uvb-c89="" class="models">
               
                <div _ngcontent-uvb-c89="" class="compareUlip">
                    <div _ngcontent-uvb-c89="" class="headingUlip">
                        <ul _ngcontent-uvb-c89="">
                            <li _ngcontent-uvb-c89="">Features</li>
                            <li _ngcontent-uvb-c89="">ULIP's 
                                <span _ngcontent-uvb-c89="" class="vs">vs</span>
                            </li>
                            <li _ngcontent-uvb-c89="">Tax Saving MF 
                                <span _ngcontent-uvb-c89="" class="vs">vs</span>
                            </li>
                            <li _ngcontent-uvb-c89="">Tax Saving FD</li>
                        </ul>
                    </div>
                    <div _ngcontent-uvb-c89="" class="ulipContnet">
                        <ul _ngcontent-uvb-c89="">
                            <li _ngcontent-uvb-c89="">Tax Saving on Premium 
                                <span _ngcontent-uvb-c89="" class="info">
                                    <img _ngcontent-uvb-c89="" src="../../../assets/Images/tiles_images/info1.svg" class="infoicon">
                                    <div _ngcontent-uvb-c89="" class="hover-text"> Under Sec 80C                                         
                                    </div>
                                </span>
                            </li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="right">
                                    <img _ngcontent-uvb-c89="" src="../../../assets/Images/RightTick.png">
                                </span>
                            </li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="right">
                                    <img _ngcontent-uvb-c89="" src="../../../assets/Images/RightTick.png">
                                </span>
                            </li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="right">
                                    <img _ngcontent-uvb-c89="" src="../../../assets/Images/RightTick.png">
                                </span>
                            </li>
                        </ul>
                        <ul _ngcontent-uvb-c89="">
                            <li _ngcontent-uvb-c89="">Tax Saving on Returns 
                                <span _ngcontent-uvb-c89="" class="info">
                                    <img _ngcontent-uvb-c89="" src="../../../assets/Images/tiles_images/info1.svg" class="infoicon">
                                    <div _ngcontent-uvb-c89="" class="hover-text"> Under Sec 10(10D) 
                                            </div>
                                </span>
                            </li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="right">
                                    <img _ngcontent-uvb-c89="" src="../../../assets/Images/RightTick.png">
                                </span>
                            </li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="right">
                                    <img _ngcontent-uvb-c89="" src="../../../assets/Images/WrongTick.png">
                                </span>
                            </li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="right">
                                    <img _ngcontent-uvb-c89="" src="../../../assets/Images/WrongTick.png">
                                </span>
                            </li>
                        </ul>
                        <ul _ngcontent-uvb-c89="">
                            <li _ngcontent-uvb-c89="">Long Term Capital Gains</li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="green">No Tax</span>
                            </li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="red">10% Tax</span>
                            </li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="red">Fully Taxable</span>
                            </li>
                        </ul>
                        <ul _ngcontent-uvb-c89="">
                            <li _ngcontent-uvb-c89="">Life Cover </li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="right">
                                    <img _ngcontent-uvb-c89="" src="../../../assets/Images/RightTick.png">
                                </span>
                            </li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="right">
                                    <img _ngcontent-uvb-c89="" src="../../../assets/Images/WrongTick.png">
                                </span>
                            </li>
                            <li _ngcontent-uvb-c89="">
                                <span _ngcontent-uvb-c89="" class="right">
                                    <img _ngcontent-uvb-c89="" src="../../../assets/Images/WrongTick.png">
                                </span>
                            </li>
                        </ul>
                        <ul _ngcontent-uvb-c89="">
                            <li _ngcontent-uvb-c89="">Historical Returns</li>
                            <li _ngcontent-uvb-c89=""> 12% - 18% </li>
                            <li _ngcontent-uvb-c89=""> 12% - 18% </li>
                            <li _ngcontent-uvb-c89=""> 5% - 6% </li>
                        </ul>
                        <div _ngcontent-uvb-c89="" class="buttondiv">
                            <button _ngcontent-uvb-c89="" type="button">Okay, got it!</button>
                        </div>
                    </div>
                </div>
        </div>
            
            
            </div>
<!--- //Modelbox---->


    </div>
    
</body>
  
</html>