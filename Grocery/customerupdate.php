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
          <h5 class="centered"> </h5>
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
	require('db.php');
	$a=$_GET['id'];
    // If form submitted, insert values into the database.
    $query="SELECT * from customer where id='".$_GET['id']."'";
	$result = mysqli_query($con,$query); // selecting data through mysql_query()
while($data = mysqli_fetch_array($result))
{
		?>
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-4 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">            
            </div>
            <div class="custom-bar-chart">
               <form action="customerupdate1.php" method="post">
                 <div class="login-wrap">
					<input type="text" name="p7" value="<?php echo $data['id']; ?>" class="form-control" placeholder="DEALER NAME"> 
					<br>
					<input type="text" name="p2" value="<?php echo $data['name']; ?>" class="form-control" placeholder="DEALER NAME"> 
					<br>
					<input type="text" name="p3" value="<?php echo $data['phone']; ?>" class="form-control" placeholder="DEALER PHONE"> 
					<br>
					<input type="TEXT" name="p4" value="<?php echo $data['amount']; ?>"  class="form-control" placeholder="DEALER ADDRESS"> 
					<br>
					<input type="TEXT" name="p5" value="<?php echo $data['item']; ?>" class="form-control" placeholder="NUMBER OF ITEMS"> 
					<br>
					<input type="TEXT" name="p6" value="<?php echo $data['address']; ?>" class="form-control" placeholder="NUMBER OF ITEMS"> 
					<br>
					<button class="btn btn-theme btn-block" href="#" type="submit"><i class="fa fa-lock"></i> UPDATE </button>
					<hr>
				</div>  
</form>			
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
