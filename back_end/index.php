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
        <form class="col s4 offset-s4 bar">
          <div class="row">
              <div class="input-field col s11" >
                <i class="material-icons prefix white-text">email</i>
                <input id="email" type="email" class="validate black-text">
                <label for="email" class="active">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s11">
              <i class="material-icons prefix white-text">lock</i>
              <input id="password" type="password" class="validate black-text ">
              <label for="password" class="active">Password</label>
            </div>
          </div>
          <div class="row">
                <a class="btn waves-effect waves-light col s2 offset-s9  teal darken-4"
                 href="admin.php" type="submit" name="action">login</a>
          </div>
        </form>
        <div class="row">
            <p class="col s4 offset-s4 "><a href="#" class="teal-text text-darken-5">Remember password</a></p>
        </div>
    </div>
    
</body>
</html>