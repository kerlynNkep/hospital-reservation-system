<!DOCTYPE html>
<html>
<head>
  <title>signup/Medcare</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection" />
   <link href="fonts/google-material/material-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/mean.css" />
</head>
<body>
  <!-- nav bar-->
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
         <li><a href="contact.php">contact us</a></li>
          <li><a class="indigo darken-1 modal-trigger " href="#modal1">Login</a></li>
         </ul>
       </div>
     </nav>
    </div>
      <br/><br/>
      <!--contact form -->
     <div class="row">
     <div class="col s2">.</div>
    <form id="signup_form"  class="col s8  z-depth-2" action="submit.php" method="POST">
      <h3>SignUp Form :</h3>
      <div class="row ">
        <div class="input-field col s4">
          <input  id="first_name" type="text" name="fname" class="validate">
          <label class=" active" for="first_name">First Name</label>
        </div>
        <div class="input-field col s4">
          <input id="last_name" type="text" name="lname" class="validate">
          <label class="active" for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input  id="age" type="number" name="age"  class="validate">
          <label class="active" for="age">Age</label>
        </div>
        <div class="input-field col s4">
           <input  id="test1" type="radio" name="sex"  class="validate">
              <label class="active" for="test1">Male</label>
           <input  id="test2" type="radio" name="sex"   class="validate">
              <label class="active" for="test2">Female</label>
        </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
            <input  id="date_of_birth" type="date" name="DOB" class="validate">
              <label class=" active" for="date_of_birth">Date Of Birth</label>
          </div>
          <div class="input-field col s4">
          <input id="country" type="text" name="country" class="validate">
            <label class="active" for="country">Country</label>
          </div>
        </div>
       <div class="row">
        <div class="input-field col s4">
          <input id="phone_number" type="tel" name="phoneNo" class="validate">
          <label class="active" for="phone_number">Phone Number</label>
        </div>
       <div class="input-field col s4">
          <input id="email" type="email" name="email" placeholder="someone@gmail.com" class="validate">
          <label class="active" for="email">Email</label>
        </div>
        </div>
      <div class="row">
          <div class="input-field col s4">
          <input id="password" type="password" name="password" class="validate">
          <label class="active" for="password">Password</label>
        </div>
        <div class="input-field col s4">
          <input id="password" type="password" name="password2" class="validate">
          <label class="active" for="password">Confirm Password</label>
        </div>
      </div>
      <button class="btn  grey waves-effect waves-grey col s3 offset-s4" type="submit" name="action">Submit
               <i class="material-icons right">send</i></button><br/><br/>
       
    </form>
    <div class="col s2">.</div>
   </div>
    
      <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <footer class="page-footer grey darken-3">
          <div class="footer-copyright #563c15">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
      </body>
      </html>