<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title></title>
  <!-- Favicons -->
  <link href="\\" rel="icon">
  <link href="admin/img/apple-touch-nnjhnn.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="admin/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="admin/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="admin/css/style.css" rel="stylesheet">
  <link href="admin/css/style-responsive.css" rel="stylesheet">
  <script src="admin/lib/chart-master/Chart.js"></script>
</head>
<style>
    h3 {
    text-align: center;
    padding: inherit;
}
.card1 {
    background: #d7d7d7;
    box-shadow: 0 2px 1px rgb(0 0 0 / 20%);
    margin-bottom: 1em;
    height: 250px;
}
.card2 {
    background: #d7d7d7;
    box-shadow: 0 2px 1px rgb(0 0 0 / 20%);
    margin-bottom: 1em;
    height: 250px;
}
.card3 {
    background-color: #d7d7d7;
    box-shadow: 0 2px 1px rgb(0 0 0 / 20%);
    margin-bottom: 1em;
    height: 250px;
}
.col-lg-3.col-md-6 {
    margin-left: 4%;
}
.stat-heading {
    color: black;
    font-size: 216%;
    text-align: center;
}
.stat-text {
    text-align: center;
    font-size: 185%;
    color: black;
}
.stat-icon.dib.flat-color-4 {
    text-align: center;
    font-size: 442%;
    color: #344a4a;
}
.stat-icon.dib.flat-color-2 {
    text-align: center;
    font-size: 442%;
    color: #344a4a;
}
.stat-icon.dib.flat-color-1 {
    text-align: center;
    font-size: 442%;
    color: #344a4a;
}
  </style>
<body>
    
<?php echo View::make('admin/sidebar'); ?>
   <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <div class="border-head">
            </div>
            <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
             <br>   <h2> Welcome Admin!!</h2><br>
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                      <a href="tabledit" > <div class="card1">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib"><br>
                                        <div class="stat-heading">Policies</div>
                                            <div class="stat-text"><span class="count">{{ $policy }}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                      <a href="leads">  <div class="card2">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                    <i class="fa fa-server" aria-hidden="true"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib"><br>
                                        <div class="stat-heading">Leads</div>
                                            <div class="stat-text"><span class="count">{{ $leads }}</span></div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <a href="adminuser"> <div class="card3">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib"><br>
                                            <div class="stat-text"><span class="count"></span></div>
                                            <div class="stat-heading">Users</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                    </div>
          </div>
        </div>
    </section>
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="admin/lib/jquery/jquery.min.js"></script>
  <script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="admin/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="admin/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="admin/lib/common-scripts.js"></script>
  
</body>
</html>
