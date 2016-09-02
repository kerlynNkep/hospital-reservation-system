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
    
<!-- start of nav bar-->
   <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper light green">
           <a href="test_index.php"><img src="images/Caduceus-52.png" style="width: 7%; height:62px"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="test_index.php"><i class="material-icons left">home</i>home</a>
                    </li>
                    <li>
                        <a href="about.php"><i class="material-icons left">group</i>about us</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons left">phone</i><b>contact us</b></a>
                    </li>
                    <li>
                        <a class=" lightgreen darken-2 modal-trigger" href="#modal3">
                                <i class="material-icons left">library_books</i>appointment</a>
                    </li>
                </ul>
      </div>
   </nav>
   </div><!--close of nav bar-->

    <!-- placing parrallax -->
    <div class="parallax-container" style="background-image: url('images/Gmap.png'); height:400px;">
        <div class="parallax">
            <div id="map" style="height: 500px">
               <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfaxmJ7Z_HSPFHMxGHG5wA3E6af57Wch8&callback=initMap" type="text/javascript"></script>
            </div>
        </div>
    </div>

     <!-- including the modal-->
     <?php require 'appt_modal.php';?>
     
    <!--contact form-->

   <!-- <div class="section white">-->
       <div class="row">
          <div class="col s3">.</div>
             <form class="col s8 " id="form1" method="POST" action="submit.php" ng-app="myApp" ng-controller="validateCtrl" 
                name="myForm" novalidate>
                <div class="row">
                    <h3>Fill The Form Below To Contact Us</h3>

                        <div class="input-field col s5">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate" name="user" ng-model="user" 
                                  required>
                            <label for="icon_prefix" class="active">Full Names<span class="red-text">*</span></label>
                            <span style="color:red" ng-show="myForm.user.$touched && myForm.user.$invalid">
                                 <span ng-show="myForm.user.$error.required">Full names is required.</span>
                            </span>
                            
                        </div>

                        <div class="input-field col s3">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="number" class="validate" name="phoneNo" 
                                  ng-model="phoneNo" class="validate" required>
                            <label for="icon_telephone" class="active">Telephone<span class="red-text">*</span></label>
                            <span style="color:red" ng-show="myForm.phoneNo.$touched && myForm.phoneNo.$invalid">
                                <span ng-show="myForm.phoneNo.$error.required">phone number required.</span>
                            </span>
                        </div>
               </div>

               <div class="row">
                    <div class="input-field col s8">
                        <i class="material-icons prefix">email</i>
                        <input id="icon_prefix" type="email" name="email" ng-model="email" class="validate" required>
                        <label for="icon_prefix" class="active">Email<span class="red-text">*</span></label>
                        <span style="color:red" ng-show="myForm.email.$touched && myForm.email.$invalid">
                            <span ng-show="myForm.email.$error.required">Email is required.</span>
                            <span ng-show="myForm.email.$error.email">Invalid email address.</span>
                        </span>
                        
                    </div>
               </div>
               <div class="row">
                    <div class="input-field col s8" >
                        <select class="icons" name="subject">
                          <option value="" disabled selected>Subject<span class="red-text">*</span></option>
                          <option value="Complain" >Complain</option>
                          <option value="Request">Request</option>
                          <option value="Appreciation">Appreciation</option>
                          <option value="Recommendation">Recommendation</option>
                          <option value="Others">Others</option>
                        </select>
                    </div>
              </div>
               <div class="row">
                    <div class="input-field col s8">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="textarea1" type="text" name="message" class="materialize-textarea" length="1000"       ng-model="message" class="validate" required></textarea> 
                        <label for="textarea1" class="active">Your Message<span class="red-text">*</span></label>
                        <span style="color:red" ng-show="myForm.message.$touched && myForm.message.$invalid">
                            <span ng-show="myForm.message.$error.required">Message required.</span>
                        </span>
                    </div>
               </div>
               <button class="btn light green darken-4 waves-effect waves-grey col s3 offset-s5" type="submit"
                       ng-disabled="myForm.user.$touched && myForm.user.$invalid ||  myForm.email.$touched &&myForm.  email.$invalid || myForm.message.$touched && myForm.message.$invalid ">Submit<i class="material-icons right">send</i></button>
          </form>
      </div>
     <!--   </div>-->
      
       <!-- <?php //require 'submit.php';?>-->

        <!--Sending data to gmail-->
        


     <footer class="page-footer grey darken-3">
          
          <div class="footer-copyright #563c15">
              <div class="container">
                   © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">by kerlyn</a>
              </div>
          </div>
    </footer>
        


  <script type="text/javascript" src="j-s/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="j-s/materialize.min.js"></script> 
  <script src="j-s/angular.min.js"></script> 

  <script type="text/javascript">
      $(document).ready(function(){
          $('.parallax').parallax();
          $('.modal-trigger').leanModal();
          $('select').material_select();

          /*function initMap(){
                var mapDiv = document.getElementById('map');
                var map = new google.maps.Map(mapDiv, {
                  center: {lat: 44.540, lng: -78.546};
                  zoom: 8;
              });
            }*/
       });       
   </script>
    <script>
              var app = angular.module('myApp', []);
              app.controller('validateCtrl', function($scope) {
              // $scope.user = 'John Doe';
              // $scope.email = 'john.doe@gmail.com';
             });
            </script>
 </body>
</html>