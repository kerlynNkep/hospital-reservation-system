<!DOCTYPE html>
<html>
<head>
		<title>dashboard</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection" />
	<link href="fonts/google-material/material-icons.css" rel="stylesheet">
  <link href="j-s/fullcalendar/fullcalendar.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<style type="text/css">
			 header, main, footer {
      				padding-left: 240px;
   						 }

   			 @media only screen and (max-width : 992px) {
      				header, main, footer {
        			padding-left: 0;
      				}
    				}
    		.test{
    			display: inline-block;
    		}
	</style>
</head>
	<body>
	<!--nav bar-->	
	 <div class="navbar-fixed">
	<nav id="navbar">
    <div class="nav-wrapper light green">
    
    <h5 class="brand-logo center ">Hospital Management System</h5>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        </ul>
    </div>
  </nav></div><!--close of nav bar-->

  <!--side nav-->
  
    <ul id="slide-out" class="side-nav fixed light green darken-2">
      <a href="#" class="center ">username</a>
      <a href="#" class="center "><img src="images/you.jpg" class="circle responsive-img " width="50%" height="150px"></a><br/><br/>
      
      <li class="no-padding"><a href="admin.php?page=dashboard" class="collapsible-header white-text"><i class="material-icons prefix">dashboard</i><b>Dashboard</b></a></li>
       <li class="no-padding"><a class="collapsible-header white-text" href="admin.php?page=appointment">
      		<i class="material-icons prefix">schedule</i><b>Appointment</b></a></li>
      </li>
       <li class="no-padding"><a href="admin.php?page=calender" class="collapsible-header white-text"><i class="material-icons prefix">today</i><b>Calender</b></a></li>
       <!--
     <li><a class=" collapsible-header white-text" href="admin.php?page=client" >
      		<i class="material-icons prefix">group</i><b>Users</b></a></li>  			
     </li>-->
     
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header white-text"><b>User</b><i class="material-icons prefix">person</i></a>
            <div class="collapsible-body">
              <ul class="light green">
                <li><a href="admin.php?page=client" class="white-text"><i class="material-icons prefix">play_arrow</i>Clients</a></li>
                 <li><a href="admin.php?page=doctor" class="white-text"><i class="material-icons prefix">play_arrow</i>Doctors</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
     
      <li class="no-padding"><a href="https://mail.google.com" target="_blank" class="collapsible-header white-text"><i class="material-icons prefix">email</i><b>Mailbox</b></a></li>

      <li class="no-padding"><a  href="admin.php?page=appt" class="collapsible-header white-text"><i class="material-icons prefix">library_books</i>
      		<b>Report</b></a><li>
      	<li class="no-padding"><a href="admin.php?page=profile" class="collapsible-header white-text"><i class="material-icons prefix">person</i>
      		<b>Profile</b></a></li>
      	<li class="no-padding"><a href="index.php" class="collapsible-header white-text"><i class="material-icons prefix">lock_on</i>
      		<b>Logout</b></a></li>
  		
    		</ul>
    	</li>

  	</ul>
         
          
<main style="margin: 20px">
		<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
					require ('scripts/'.$page.'.php');
			}
			else
				require('scripts/dashboard.php');
		?>

        
       
</main>
  <script type="text/javascript" src="j-s/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="j-s/materialize.min.js"></script>
   <script type="text/javascript" src="j-s/fullcalendar/fullcalendar.min.js"></script>
  <script type="text/javascript" src="j-s/canvasjs-1.8.5/jquery.canvasjs.min.js"></script>
 
	<script type="text/javascript">
		 // Initialize collapse button
  $(".button-collapse").sideNav();
    $('.collapsible').collapsible({
      accordion : false
    });
  	 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
        
        
	</script>
</body>
</html>