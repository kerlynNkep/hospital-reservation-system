<!DOCTYPE html>
<html>
<head>
	<title>about/medcare Hospital</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection" />
	 <link href="fonts/google-material/material-icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mean.css" />
</head>
<body>
<!-- start of nav bar-->
   <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper light green">
           <a href="test_index.php"><img src="images/Caduceus-52.png" style="width: 7%; height:62px"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a href="test_index.php"> <i class="material-icons left">home</i>home</a></li>
           <li><a href="#"> <i class="material-icons left">group</i><b>about us</b></a></li>
          <li><a href="contact.php"> <i class="material-icons left">phone</i>contact us</a></li>
          <li><a class=" lightgreen darken-2 modal-trigger " href="#modal3"><i class="material-icons left">library_books</i>appointment</a></li>
        </ul>
      </div>
   </nav>
   </div><!--close of nav bar-->

    <!--an image-->
    <div>
    <img src="images/about1.jpg" alt="abt_img" style="width: 100%; height: 500px;">
    </div>

    <!--including the appointment modal-->
    <?php require 'appt_modal.php';?>

  		<!-- home content-->
      <br/>
      <h4 class="center"> A BRIEF STORY ABOUT US</h4>
      <div class="row">
      <div class="col s1">..</div>
        <div class="col s10">
          lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div class="col s1">..</div>
      </div>

		<div class="row">
        <div class="col s1 m1">	.</div>
        <div class="col s3 m3 ">
          <div class="card " id="pic">
    		<div class="card-image waves-effect waves-block waves-light">
      			<img class="activator" src="images/gr.PNG" id="a_pic" style="height: 300px" >
   		 	</div>
    		<div class="card-content">
     		 	<span class="card-title activator grey-text text-darken-4">Designer<i class="material-icons right">more_vert</i></span>
    		</div>
   			 <div class="card-reveal">
      			<span class="card-title grey-text text-darken-4">GRACE SCINTCHE<i class="material-icons right">close</i></span>
      			<p>Here is some more information about this product that is only revealed once clicked on.</p>
    		</div>
  		  </div>
        </div>
         <div class="col s3 m3">
         <div class="card" id="pic">
    		<div class="card-image waves-effect waves-block waves-light">
      			<img class="activator" src="images/k.jpg" id="a_pic" style="height: 300px">
   		 	</div>
    		<div class="card-content">
     		 	<span class="card-title activator grey-text text-darken-4">Designer<i class="material-icons right">more_vert</i></span>
    		</div>
   			 <div class="card-reveal">
      			<span class="card-title grey-text text-darken-4">NKEP KERLYN<i class="material-icons right">close</i></span>
      			<p>Here is some more information about this product that is only revealed once clicked on.</p>
    		</div>
  		</div>
        </div>
        <div class="col s3 m3">
         <div class="card" id="pic">
    		<div class="card-image waves-effect waves-block waves-light">
      			<img class="activator" src="images/cou4.jpg" id="a_pic" style="height: 300px">
   		 	</div>
    		<div class="card-content">
     		 	<span class="card-title activator grey-text text-darken-4">Designer<i class="material-icons right">more_vert</i></span>
    		</div>
   			 <div class="card-reveal">
      			<span class="card-title grey-text text-darken-4">COURAGE ANGEH<i class="material-icons right">close</i></span>
      			<p>Here is some more information about this product that is only revealed once clicked on.</p>
    		</div>
  		</div>
        </div>
        <div class="col s1 m1 "> .</div>
      </div>
      <div class="row">
        <div class="col s2 m1"> .</div>
        <div class="col s3 m3">
          <div class="card" id="pic">
    		<div class="card-image waves-effect waves-block waves-light">
      			<img class="activator" src="images/1.jpg" id="a_pic" style="height: 300px">
   		 	</div>
    		<div class="card-content">
     		 	<span class="card-title activator grey-text text-darken-4">Doctor 1<i class="material-icons right">more_vert</i></span>
    		</div>
   			 <div class="card-reveal">
      			<span class="card-title light green-text text-darken-4">Dr DIVINA B<i class="material-icons right">close</i>
            </span>
      			<p>She is one of the best surgeons we have in the Country.<br/>You can contact her through the following email ::<b><i>divinapercy@gmail.com.</i></b></p>
    		</div>
  		</div>
        </div>
         <div class="col s3 m3">
           <div class="card" id="pic">
    		<div class="card-image waves-effect waves-block waves-light">
      			<img class="activator" src="images/new.jpg" id="a_pic" style="height: 300px">
   		 	</div>
    		<div class="card-content">
     		 	<span class="card-title activator grey-text text-darken-4">Doctor 2<i class="material-icons right">more_vert</i></span>
    		</div>
   			 <div class="card-reveal">
      			<span class="card-title grey-text text-darken-4">Dr NELSON<i class="material-icons right">close</i></span>
      			<p>Here is some more information about this product that is only revealed once clicked on.</p>
    		</div>
  		</div>
        </div>
        <div class="col s3 m3">
           <div class="card" id="pic">
    		<div class="card-image waves-effect waves-block waves-light">
      			<img class="activator" src="images/2.jpg" id="a_pic" style="height: 300px">
   		 	</div>
    		<div class="card-content">
     		 	<span class="card-title activator grey-text text-darken-4">Doctor 3<i class="material-icons right">more_vert</i></span>
    		</div>
   			 <div class="card-reveal">
      			<span class="card-title grey-text text-darken-4">Dr RUTH<i class="material-icons right">close</i></span>
      			<p>She is one of the best Gyneacologist in the world.</p>
    		</div>
  		</div>
         </div>
        <div class="col s2 m2 ">.</div>
      </div>
   
        <footer class="page-footer grey darken-3">
          
          <div class="footer-copyright #563c15">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">by kerlyn</a>
            </div>
          </div>
        </footer>

       <!--  <?php //require 'login_modal.php';?>
        <?php//require 'signup_modal.php';?>-->

	<script type="text/javascript" src="j-s/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="j-s/materialize.min.js"></script>
  <script type="text/javascript" src="j-s/slider.js"></script>
   <!-- Modal jquery initialiser-->
           <script type="text/javascript">
              $(document).ready(function (){
           // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
               }); 
           </script>
</body>
</html>
