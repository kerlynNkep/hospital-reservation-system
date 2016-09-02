<!DOCTYPE html>
<html>
<head>
		<title>dashboard</title>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection" />
	<link href="fonts/google-material/material-icons.css" rel="stylesheet">
  <link href="j-s/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <link href='j-s/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
  <style rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css"></style>

</head>

<!--body-->
	<body>

	<!--nav bar-->	
	 <div class="navbar-fixed">
	     <nav id="navbar">
            <div class="nav-wrapper light green">
    
              <h5 class="brand-logo center ">Hospital Management System</h5>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                   </ul>
            </div>
      </nav>
  </div><!--close of nav bar-->

  <!--side nav-->
  
    <ul id="slide-out" class="side-nav fixed light green darken-2">
        <a href="#" class="center ">username</a>
        <a href="#" class="center "><img src="images/you.jpg" class="circle responsive-img " width="50%" 
           height="150px">  </a><br/><br/>
      
      <li class="no-padding">
            <a href="admin.php?page=dashboard" class="collapsible-header " id="fix" style="color: white;">
                  <i class="material-icons prefix" id="fix">dashboard</i><b>Dashboard</b>
            </a>
      </li>

       <li class="no-padding">
            <a class="collapsible-header " id="fix" style="color: white;" href="admin.php?page=appointment">
      		        <i class="material-icons prefix" id="fix">schedule</i><b>Appointment</b>
            </a>
      </li>

       <li class="no-padding">
            <a href="admin.php?page=calender" id="fix" class="collapsible-header" style="color: white;">
                  <i class="material-icons prefix" id="fix">today</i><b>Calender</b>
            </a>
        </li>
     
      <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
              <li>
                  <a class="collapsible-header " id="fix" style="color: white;"><b>User</b>
                        <i class="material-icons prefix" id="fix">person</i></a>
                      <div class="collapsible-body">
                           <ul class="light green">
                              <li><a href="admin.php?page=client" class="" id="fix" style="color: white;">
                                  <i class="material-icons prefix" id="fix">play_arrow</i>Clients</a>
                              </li>
                              <li><a href="admin.php?page=doctor" id="fix" class="" style="color: white;">
                              <i class="material-icons prefix" id="fix">play_arrow</i>Doctors</a>
                              </li>
                          </ul>
                      </div>
            </li>
        </ul>
      </li>
     
      <li class="no-padding">
            <a href="https://mail.google.com" target="_blank" id="fix" class="collapsible-header " style="color: white;">
                  <i class="material-icons prefix" id="fix">email</i><b>Mailbox</b>
            </a>
      </li>

      <li class="no-padding">
            <a  href="admin.php?page=appt" id="fix" class="collapsible-header " style="color: white;">
                <i class="material-icons prefix" id="fix">library_books</i><b>Report</b>
            </a>
      <li>
      	<li class="no-padding">
            <a href="admin.php?page=profile" id="fix" class="collapsible-header" style="color: white;">
                <i class="material-icons prefix" id="fix">person</i><b>Profile</b>
            </a>
        </li>
      	<li class="no-padding">
            <a href="index.php" class="collapsible-header" id="fix" style="color: white;">
                    <i class="material-icons prefix" id="fix">lock_on</i><b>Logout</b>
            </a>
        </li>
  		
    		</ul>
    	</li>

  	</ul>
         
          
<main style="margin: 20px">

<!--to get pages-->
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
  <script type="text/javascript" src="j-s/canvasjs-1.8.5/jquery.canvasjs.min.js"></script>
  <script type="text/javascript" src="j-s/fullcalendar/fullcalendar.min.js"></script>
  <script type="text/javascript" src='j-s/fullcalendar/jquery-ui.custom.min.js'></script>
  <script src='j-s/fullcalendar/moment.min.js'></script>
  <script src='j-s/fullcalendar/fullcalendar.js'></script>
  <script type="text/javascript" src="j-s/main.js"></script>
  <script src="j-s/angular.min.js"></script>
  <script type="text/javascript" src="j-s/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
       
       $(document).ready(function() {
         $('.modal-trigger').leanModal();
         $('select').material_select();
        });
          /*  $('#example').DataTable({
              "pagingType": "simple_numbers",
              "searching": false,
              "pageLength": 10,
              renderer: {
                "header": "jqueryui",
                "pageButton": "bootstrap"
                 }

            });*/
    
      var app = angular.module('myApp', []);
      app.controller('validateCtrl', function($scope) {
      // $scope.user = 'John Doe';
      // $scope.email = 'john.doe@gmail.com';
    });
      //search function for doctor page
     function search(str) {
         if (window.XMLHttpRequest) {
             // code for IE7+, Firefox, Chrome, Opera, Safari
             xmlhttp=new XMLHttpRequest();
           } 
        else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
            xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          document.getElementById("doctorsearch").innerHTML=xmlhttp.responseText;
         // alert("hey u miss");
        }
        xmlhttp.open("GET","scripts/search.php?q="+str,true);
        xmlhttp.send();
        }

      //search function for client page
     function search2(str) {
           if (window.XMLHttpRequest) {
               // code for IE7+, Firefox, Chrome, Opera, Safari
               xmlhttp=new XMLHttpRequest();
             } 
          else {  // code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
           if (str.length == 0) {
              document.getElementById("clientsearch").innerHTML = "";
              return;
            }
          else{
               xmlhttp.onreadystatechange=function() {
                  if (xmlhttp.readyState==4 && xmlhttp.status==200)
                  document.getElementById("clientsearch").innerHTML=xmlhttp.responseText;
                }
               xmlhttp.open("GET","scripts/searchCl.php?q="+str,true);
              xmlhttp.send();
            }
       }

    function search3(str) {
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            document.getElementById("viewScreen").innerHTML=xmlhttp.responseText;
        }
        xmlhttp.open("GET","scripts/displayview.php?q="+str,true);
        xmlhttp.send();
      }

</script>
<script>
  function display(str) {
       if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            document.getElementById("viewScreen2").innerHTML=xmlhttp.responseText;
        }
        xmlhttp.open("GET","scripts/displayViewd.php?q="+str,true);
        xmlhttp.send();
      }
   function edit(str) {
       if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            document.getElementById("viewScreen2").innerHTML=xmlhttp.responseText;
        }

        xmlhttp.open("GET","edit.php?q="+str,true);
        xmlhttp.send();
      }
      
 /* function edit1(str) {
       if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            document.getElementById("tbod").innerHTML=xmlhttp.responseText;
        }
        xmlhttp.open("GET","edit2.php?q="+str,true);
        xmlhttp.send();

      }*/
  
    
</script>

 
</body>
</html>