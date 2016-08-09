<!DOCTYPE html>
<html>
<head>
  <title>medcare Hospital</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection" />
   <link href="fonts/google-material/material-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/mean.css" />
</head>
<body>
<!--nav bar-->
  <div class="navbar-fixed">
    <nav>
       <div class="nav-wrapper   indigo darken-1">
        <a href="" class="brand-logo">Logo</a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><i class="material-icons">home</i></li>
           <li><a href="index.php">home</a></li>
           <li><i class="material-icons">teller</i></li>
          <li><a href="about.php">about us</a></li>
          <li><i class="material-icons">contact</i></li>
         <li><a href="#">contact us</a></li>
          <li><a class="indigo darken-1 modal-trigger " href="#modal1">Login</a></li>
         </ul>
       </div>
     </nav>
    </div>
    <!-- placing parrallax -->
    <div class="parallax-container">
      <div class="parallax">
      <div id="map" style="height: 500px">
          <script type="text/javascript">
            function initMap() {
                var mapDiv = document.getElementById('map');
                var map = new google.maps.Map(mapDiv, {
                  center: {lat: 44.540, lng: -78.546},
                  zoom: 8;
                });
            }
           </script>
           <script async defer
               src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUaHIlVMT3DDEoLaXygAYNopkAW8flY&callback=initMap">
            </script>
      </div></div>
    </div>
    <!--contact form-->
   <!-- <div class="section white">-->
       <div class="row">
          <div class="col s3">.</div>
             <form class="col s8 " id="form1">
                <div class="row">
                <h3>Fill The Form Below To Contact Us</h3>
                  <div class="input-field col s5">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Full Names</label>
                  </div>
                <div class="input-field col s3">
                      <i class="material-icons prefix">phone</i>
                      <input id="icon_telephone" type="tel" class="validate">
                      <label for="icon_telephone">Telephone</label>
                </div>
               </div>
               <div class="row">
                  <div class="input-field col s8">
                      <i class="material-icons prefix">email</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Email</label>
                  </div>
               </div>
               <div class="row">
                  <div class="input-field col s8">
                      <i class="material-icons prefix">subtitles</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Subject</label>
                  </div>
                 
              </div>
               <div class="row">
                  <div class="input-field col s8">
                      <i class="material-icons prefix">mode_edit</i>
                      <textarea id="textarea1" type="text" class="materialize-textarea" length="1000"></textarea> 
                      <label for="textarea1">Your Message</label>
                  </div>
               </div>
               <button class="btn blue darken-4 waves-effect waves-grey col s3 offset-s5" type="submit" name="action">Submit<i class="material-icons right">send</i></button>
            </form>
         </div>
     <!--   </div>-->

     <footer class="page-footer grey darken-3">
          
          <div class="footer-copyright #563c15">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>  
  <script type="text/javascript" src="js/gmap.js"></script>
 <!-- <script type="text/javascript" src="js/map.js"></script>-->
  <!--<script type="text/javascript" src="js/parralax.js"></script>-->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.parallax').parallax();
    });
   </script>     
</body>
</html>