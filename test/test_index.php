<!DOCTYPE html>
<html>
<head>
	<title>medcare Hospital</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection" />
	 <link href="fonts/google-material/material-icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mean.css" />
  <link rel="stylesheet" type="text/css" href="css/style3.css" />
</head>
<body>
	<div class="navbar-fixed">
	  <nav>
       <div class="nav-wrapper    grey darken-2">
        <a href="" class="brand-logo">Logo</a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><i class="material-icons">home</i></li>
           <li><a href="#">home</a></li>
           <li><i class="material-icons">teller</i></li>
          <li><a href="about.php">about us</a></li>
          <li><i class="material-icons">contact</i></li>
         <li><a href="contact.php">contact us</a></li>
          <li><a class=" grey darken-2 modal-trigger " href="#modal1">Login</a></li>
         </ul>
       </div>
     </nav>
    </div>
    <!-- for secomd nav bar-->
    
    <nav class="nav-wrapper white" style="width:100%; ">
         <ul id="nav-mobile" class="left hide-on-med-and-down" >
              <li><i class="material-icons">history</i></li>
              <li class="working">We are today working: 8:30 am - 5:30 pm</li>
              <li><i class="material-icons">phone</i></li>
              <li class="phone">Call us +237 671514344</li>
         </ul>
    </nav>
	 <!-- slide show-->
   <div class="row" >
		<div class="col s12" >
    		<div class="slider" >
        	 <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>re·lax·a·tion</h3></div></li>
            <li><span>Image 02</span><div><h3>qui·e·tude</h3></div></li>
            <li><span>Image 03</span><div><h3>bal·ance</h3></div></li>
            <li><span>Image 04</span><div><h3>e·qua·nim·i·ty</h3></div></li>
            <li><span>Image 05</span><div><h3>com·po·sure</h3></div></li>
            <li><span>Image 06</span><div><h3>se·ren·i·ty</h3></div></li>
        </ul>
    		</div>
		</div>
	</div>
	
		    <!-- Modal Trigger 
  <a class="waves-effect waves-light btn modal-trigger " href="#modal1">Modal</a>-->
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
   		 <h4>Fill Form</h4>
         <form method="POST" action="submit2.php">
           <div class="input-field ">
              <input id="email" type="email" name="email" placeholder="someone@gmail.com" class="validate ">
              <label class="active" for="email">Email</label>
           </div>
            <div class="input-field">
              <input id="password" type="password" name="password" class="validate">
              <label class="active" for="password">Password</label>
            </div>
         </form>
         <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat ">
          	<button class="btn  indigo darken-1" type="submit">login</button></a>
         <a href="#" class="modal-close"><button class="btn  indigo darken-1">Cancel</button></a><br/>
          <p id="p_tag">create account?<a href="signup.php" class="">signup>></a></p>
         <!--<div class="modal-footer"></div>-->
    </div>
  </div>
  		<!-- home content-->
		<div class="row">
        <div class="col s2 m1">	.</div>
        <div class="col s3 m3">
          <div class="card" id="home_img">
            <div class="card-image"><img id="a_pic" src="images/topfittnes.jpg" style="height:267px" ></div>
            <div class="card-content">
                 <p>I am a very simple card. I am good at containing small bits.</p>
            </div>
          </div>
        </div>
         <div class="col s3 m3">
          <div class="card" id="home_img">
            <div class="card-image"><img id="a_pic" src="images/appt.jpg" style="height:287px">
            </div> 
            <div class="card-content">
              <p>Click<a href="appointment.php"> HERE </a>to book for an appointment</p>
            </div>
          </div>
        </div>
        <div class="col s3 m3">
          <div class="card" id="home_img">
            <div class="card-image"> <img id="a_pic" src="images/ante.jpg" style="height:262px"></div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits.</p>
            </div>
          </div>
        </div>
        <div class="col s1 m1 "> .</div>
      </div>
      <div class="row">
        <div class="col s2 m1"> .</div>
        <div class="col s3 m3">
          <div class="card" id="home_img">
            <div class="card-image"><img id="a_pic" src="images/mass.jpg" style="height:295px"></div>
              <div class="card-content">
                  <p>Click<a href="http://www.slideshare.net/randhawans/role-of-mass-media-in-health-education"> HERE </a> to read more</p>            
                </div>
          </div>
        </div>
         <div class="col s3 m3">
          <div class="card" id="home_img">
            <div class="card-image"><img id="a_pic" src="images/imag.jpeg" style="height:292px"></div> 
            <div class="card-content">
              <p>The best surgoens in Cameroon </p>
            </div>
          </div>
        </div>
        <div class="col s3 m3">
          <div class="card" id="home_img">
            <div class="card-image"><img id="a_pic" src="images/sur.jpg" style="height:287px"></div>
              <div class="card-content">
                <p>I am a very simple card.</p>
              </div>
            </div>
         </div>
        <div class="col s1 m1 ">.</div>
      </div>
   
        <footer class="page-footer grey darken-3">
          
          <div class="footer-copyright #563c15">
            <div class="container">
            © 2016 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            <p align="right"><b>share with us on</b></p>
        <img id="img" src="images/share.png" align="right" width="60px" height="50px" />
        <a href="www.facebook.com" target="_blank"><img id="img" src="images/facebook.jpg" align="right" width="60px" height="50px" /></a>
        <a href="www.google+.com" target="_blank"><img id="img" src="images/Google-plus.jpg" align="right" width="60px" height="50px" /></a>
        <a href="www.linkedin.com" target="_blank"><img id="img" src="images/linkedin.jpg" align="right" width="60px" height="50px" /></a>
        <a href="www.twitter.com" target="_blank"><img id="img" src="images/twitter-logo.jpg" align="right" width="60px" height="50px" /></a>
        <a href="www.youtube.com" target="_blank"><img id="img" src="images/YouTubeLogo.jpg" align="right" width="60px" height="50px" /></a>
            
            </div>
          </div>
        </footer>

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/slider.js"></script>	

	  <!-- Modal jquery initialiser-->
           <script type="text/javascript">
              $(document).ready(function (){
           // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
               }); 
           </script>
</body>
</html>