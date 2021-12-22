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

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="adminindex" class="logo"><b>LO<span>GO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
   
      </div>
      <div class="top-menu">
      <ul class="nav pull-right top-menu">
          <li><a class="logout" href="index" target="_blank">Home</a></li>
        </ul>&nbsp;&nbsp;
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="adminlogin">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
       <br>
          <li class="mt">
            <a class="active" href="adminindex">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Policies</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="adminpolicy"><i class="fa fa-desktop"></i>Add Policies</a></li>
                            <li><a href="tabledit"><i class="fa fa-users"></i>All Policies</a></li>
                        </ul>
                    </li>
          
         
          <li class="sub-menu">
            <a href="adminuser">
              <i class="fa fa-users"></i>
              <span>Users</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="leads">
              <i class="fa fa-users"></i>
              <span>Leads</span>
              </a>
          </li>
          
         </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="admin/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="admin/lib/jquery.sparkline.js"></script>
  <script src="admin/lib/common-scripts.js"></script>
    </body>

</html>
