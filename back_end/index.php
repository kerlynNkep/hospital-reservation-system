<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
   <link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection" />
  <link href="fonts/google-material/material-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <style>
       html {
            background:url('images/back.jpeg') no-repeat fixed center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height:100%;
           // z-index:0;
        }
        body {
            height:100%;
            color: white
        }   
        #logo img {
            opacity:0.8;
        }
        .bar {
            background: rgba(34,139,34,0.3);
        }

         /* label color */
       .input-field label {
         color: #FFF;
       }
       /* label focus color */
       .input-field input[type=password]:focus + label, .input-field input[type=email]:focus + label {
         color: #FFF;
       }

       /* label underline focus color */
       .input-field input[type=password], .input-field input[type=email] {
         border-bottom: 1px solid #FFF;
         box-shadow: 0 1px 0 0 #FFF;
       }
       /* label underline focus color */
       .input-field input[type=password]:focus,  .input-field input[type=email]:focus{
         border-bottom: 1px solid #FFF;
         box-shadow: 0 1px 0 0 #FFF;
       }
       /* valid color */
       .input-field input[type=text].valid {
         border-bottom: 1px solid #FFF;
         box-shadow: 0 1px 0 0 #FFF;
       }
       /* invalid color */
       .input-field input[type=text].invalid {
         border-bottom: 1px solid #FFF;
         box-shadow: 0 1px 0 0 #FFF;
       }
       /* icon prefix focus color */
       .input-field .prefix.active {
         color: #FFF;
       }
        </style>
    <title></title>
</head>
<body>
     <div id="logo" class="row">
        <div  class="col "><a href="http://localhost/hotel/"><img src="css/images/logo.png" class="responsive-img z-depth-2"/><a>
        </div>
    </div>
    <div style="height:20%"></div>
    <div class="row ">
        <form class="col s4 offset-s4 bar" method="POST" ng-app="myApp" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' ng-controller="validateCtrl" name="myForm" novalidate>
          <div class="row">
              <div class="input-field col s11" >
                <i class="material-icons prefix white-text">email</i>
                <input id="email" type="email" class="validate black-text" name="email" ng-model="email" required>
                <label for="email" class="active">Email<span class="red-text">*</span></label>
                <span style="color:red" ng-show="myForm.email.$touched && myForm.email.$invalid">
                      <span ng-show="myForm.email.$error.required">Email is required.</span>
                      <span ng-show="myForm.email.$error.email">Invalid email address.</span>
                </span>
              </div>
            </div>
            <div class="row">
                <div class="input-field col s11">
                <i class="material-icons prefix white-text">lock</i>
                <input id="password" type="password" class="validate black-text " name="password" 
                    ng-model="password" required>
                <label for="password" class="active">Password<span class="red-text">*</span></label>
                <span style="color:red" ng-show="myForm.password.$touched && myForm.password.$invalid">
                     <span ng-show="myForm.password.$error.required">password is required.</span>
                </span>
            </div>
          </div>
          <div class="row">
                <span class='col s7' id="invalid" style='color:red;'></span>
                <button class="btn waves-effect waves-light col s2 offset-s9  teal darken-4"
                  type="submit" name="action" ng-disabled="myForm.email.$touched && myForm.email.$invalid || 
                  myForm.password.$touched && myForm.password.$invalid ">login</button>
          </div>
          </form>
        </div>
         <div class="row">
            <p class="col s4 offset-s4 "><a href="#" class="teal-text text-darken-4">Remember password</a></p>
        </div>
    
    
    <script src="j-s/angular.min.js"></script>  
     <script>
      var app = angular.module('myApp', []);
      app.controller('validateCtrl', function($scope) {
      // $scope.user = 'John Doe';
      // $scope.email = 'john.doe@gmail.com';
    });
    </script>
</body>
</html>
<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Create connection
          $conn = mysql_connect('localhost','reservation','hospital');

          if(!$conn){
              echo "failure to connect";
              die('connection error');
            }
    
          $db = mysql_select_db("ReservationSys");

          $password2 = "";
          $email = $_POST['email'];
          $password1 = $_POST['password'];

          $query = "SELECT password from doctorLogin where  email = '$email'";
          $result = mysql_query($query);

    if (mysql_num_rows($result)> 0) {
          // fetch password from the database
          while($row = mysql_fetch_assoc( $result)) {
                $password2 = $row['password'];
                }
           if (password_verify($password1, $password2)) {
               echo "<script type='text/javascript'>window.location.href='admin.php';</script>";
               } 
          else {
              echo "<script type='text/javascript'>document.getElementById('invalid').innerHTML='invalid email or password'</script>";
               }
    }
    else{
      echo "<script type='text/javascript'>document.getElementById('invalid').innerHTML='invalid email or password'</script>";
    }
  }
?>