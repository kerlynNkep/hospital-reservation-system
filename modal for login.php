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

        <div class="row">

          <div class="input-field col s12 center">
              <p>Login</p>
          </div>

        </div>

        <div class="row margin">

          <div class="input-field col s12">

            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="email" type="email">

            <label for="email" data-error="wrong" data-success="right" class="center-align active">Email</label>

          </div>

        </div>

        <div class="row margin">

          <div class="input-field col s12">

            <i class="mdi-action-lock-outline prefix"></i>

            <input id="password" type="password">

            <label for="password" class="active">Password</label>

          </div>

        </div>
        <div class="row">         

          <div class="input-field col s12 m12 l12  login-text">

              <input type="checkbox" id="remember-me" />

              <label for="remember-me" class="active">Remember me</label>

          </div>

        </div>

        <div class="row">

          <div class="input-field col s12">

            <a href="login.html" class="btn waves-effect waves-light col s12">Login</a>

          </div>
        </div>

        <div class="row">

          <div class="input-field col s6 m6 l6">

            <p class="margin medium-small"><a href="">Register Now!</a></p>

          </div>
          <div class="input-field col s6 m6 l6">

              <p class="margin right-align medium-small"><a href="forgot-password.html">Forgot password?</a></p>
          </div>         

        </div>

 

      </form>

    </div>

  </div>
</body>
</html>