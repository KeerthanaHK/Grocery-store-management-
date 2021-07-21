<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>grocery</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

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
      <a href="#" class="logo"><b>grocery<span></span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          
          <!-- settings end -->
          <!-- inbox dropdown start-->
         
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
       
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.php">Logout</a></li>
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
          <h5 class="centered">  </h5>
          <li class="mt">
            <li>
            <a href="insertdealer.php">
              <span> INSERT DEALER </span>
              </a>
          </li>
           <li>
            <a href="viewdealer.php">
              <span> VIEW DEALER </span>
              </a>
          </li>
		  <li>
            <a href="insertworker.php">
              <span> INSERT WORKER </span>
              </a>
          </li>
           <li>
            <a href="viewworker.php">
              <span> VIEW WORKER </span>
              </a>
          </li>
		   <li>
            <a href="insertcustomer.php">
              <span> INSERT CUSTOMER </span>
              </a>
          </li>
		  <li>
            <a href="viewcustomer.php">
              <span> VIEW CUSTOMER </span>
              </a>
          </li>
           <li>
            <a href="index.php">
              <span> INSERT GROCERY </span>
              </a>
          </li>
           <li>
            <a href="update.php">
              <span> UPDATE GROCERY </span>
              </a>
          </li>
           <li>
            <a href="delete.php">
              <span> DELETE GROCERY </span>
              </a>
          </li>
          <li>
            <a href="view.php"> 
              <span> VIEW GROCERY </span>
              </a>
          </li>
		  <li>
            <a href="trigger.php"> 
              <span> TRIGGER</span>
              </a>
          </li>
		  <li>
            <a href="order.php"> 
              <span> ADD ORDERS</span>
              </a>
          </li>
		    <li>
            <a href="orderview.php"> 
              <span> VIEW ORDERS</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
	<?php
	 error_reporting(0);
	 
	 $query="SELECT * from dealer";
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "grocery";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query); // selecting data through mysql_query()

?>

    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-8 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">            
            </div>
            <div class="custom-bar-chart">
               <table class="table">
                                        <thead>
                                            <tr>
                                                <th>DEALER ID</th>
                                                <th>DEALER NAME</th>
                                                <th>DEALER PHONE</th>
												<th>DEALER ADDRESS</th>
                                                <th>NO OF ITEMS</th>
                                                  <th>ACTIONS</th>
												  <th>ACTIONS</th>
                                            </tr>
                                        </thead>
										<?php 
										while($data = mysqli_fetch_array($result))
{ ?>
                                        <tbody>
                                            <tr>
                                                
							<form action="send.php" method="post">
                        
                        <td><?php echo $data['id']; ?></td>						
                        <td><?php echo $data['name']; ?></td>
						<td><?php echo $data['phone']; ?></td>
						<td><?php echo $data['address']; ?></td>
						<td><?php echo $data['no_items']; ?></td>
						<td> <a href="dealerupdate.php?id=<?php echo $data['id'];?>" onclick="return confirm('Are You Sure')">UPDATE    
				</a> 
				</td>
						<td> <a href="dealerdelete.php?id=<?php echo $data['id'];?>" onclick="return confirm('Are You Sure')">DELETE    
				</a> 
				</td>  
						
						
                     
                                            </tr>
                                            
                                        </tbody>
	<?php } ?>	
            </div>
          </div>     
        </div>
      </section>
    </section>
  </section>
  
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
 
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
