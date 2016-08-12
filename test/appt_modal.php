
  <div class="row">
	<div id="modal3" class="col s6 offset-s3 modal">

    <!--<div class="card-panel">-->

      <form class="appt-form" action="" method="POST">

        <div class="row margin">

          <div class="input-field col s12 center">
              <h5 class="center">Appointment Form:</h5>
          </div>

        </div>

        <div class="row margin">

          <div class="input-field col s12">

            <i class="material-icons prefix">person</i>
            <input class="validate" id="username" type="text">

            <label for="username" data-error="wrong" data-success="right" class="active">Full Name</label>
              </div>
          </div>

        <div class="row margin">
            <div class="input-field col s6">
                <img src="images/Gender-50.png" class="prefix"></i>
                <input class="validate" id="gender" type="text">
                <label for="gender" data-error="wrong" data-success="right" class="active">Gender</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">today</i>
                <input id="date" type="date" name="Ddate" class="datepicker">
                <label class="active" for="date" data-error="wrong" data-success="right">Desired Date</label>
          </div>
          
        </div>

        <div class="row margin">
          <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input  id="age" type="number" name="phoneNo" class="validate">
              <label class="active" for="phoneNo" data-error="wrong" data-success="right">phone number</label>
            </div>
            <div class="input-field col s6">
                  <i class="material-icons prefix">email</i>
                  <input class="validate" id="email" type="text">
                  <label for="email" data-error="wrong" data-success="right" class="active">email</label>
              </div>
        </div>
          <div class="row margin">
                  <div class="input-field col s12">
                      <i class="material-icons prefix">mode_edit</i>
                      <textarea id="textarea1" type="text" class="materialize-textarea" length="1000"></textarea> 
                      <label for="textarea1">reason for appointment</label>
                  </div>
          </div>
           <div class="row">
              <div class="input-field col s4 offset-s3">
                <a href="" class="btn waves-effect waves-light col s6">Checkin</a>
              </div>
              <div class="input-field col s3 ">
                <a href="" class="btn waves-effect waves-light col s6">Clear</a>
              </div>
        </div>

      </form>

    </div>

  </div>
 
