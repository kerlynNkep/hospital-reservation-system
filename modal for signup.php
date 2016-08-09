<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection" />
   <link href="fonts/google-material/material-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/mean.css" />

</head>
<body>

<button><a class=" grey darken-2 modal-trigger " href="#modal1">modal</button>

	<div id="modal1" class="row">

    <div class="col s12 z-depth-6 card-panel">

      <form class="login-form">

        <div class="row" action="submit2.php" method="POST">

          <div class="input-field col s12 center">
              <p class="center">Register</p>
          </div>

        </div>

        <div class="row margin">

          <div class="input-field col s12">

            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="username" type="text">

            <label for="username" data-error="wrong" data-success="right" class="active">Username</label>

          </div>

           <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input id="phone_number" type="tel" name="phoneNo" class="validate">
          <label class="active" for="phone_number" data-error="wrong" data-success="right">Phone Number</label>
          </div>
        </div>

        <div class="row margin">
                       <div class="input-field col s12">
                      <i class="material-icons prefix">email</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix" data-error="wrong" data-success="right" class="center-align active">Email</label>
                  </div>
          </div>

        <div class="row margin">

          <div class="input-field col s12">

            <i class="mdi-action-lock-outline prefix"></i>

            <input id="password" type="password">

            <label for="password" class="active">Password</label>

          </div>

           <div class="row margin">

          <div class="input-field col s12">

            <i class="mdi-action-lock-outline prefix"></i>

            <input id="password" type="password">

            <label for="password" class="active">Re-type Password</label>

          </div>

        </div>
      
        <div class="row">

          <div class="input-field col s12">

            <a href="" class="btn waves-effect waves-light col s12">Register</a><br/>
            <p class="center">Already have an account?<a href="">login</a></p>

          </div>
        </div>

         

 

      </form>

    </div>

  </div>
</body>
</html>