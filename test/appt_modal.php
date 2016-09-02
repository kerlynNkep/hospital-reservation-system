
  <div class="row">
	<div id="modal3" class="col s8 offset-s2 modal" style="height:88%; border-rdius: 20px 20px 20px 20px;">

    <!--<div class="card-panel">-->

      <form class="appt-form" action="submit2.php" method="POST" 
            ng-app="myApp" ng-controller="validateCtrl" name="myForm" novalidate>

            <div class="row margin">
                <div class="input-field col s12 center">
                    <h5 class="center" style="font-family: arial;">APPOINTMENT FORM:</h5>
                    <hr style="width:8%; border-color: red;" />
                </div>
            </div>
        
            <div class="row margin">

                  <div class="input-field col s4">
                        <i class="material-icons prefix">person</i>
                        <input class="validate" id="username" type="text" name="user" ng-model="user" required>
                        <label for="username" data-error="wrong" data-success="right" class="active">First Name
                            <span class="red-text">*</span></label>
                        <span style="color:red" ng-show="myForm.user.$touched && myForm.user.$invalid">
                            <span ng-show="myForm.user.$error.required">First names is required.</span>
                        </span>
                  </div>

                   <div class="input-field col s4">
                        <i class="material-icons prefix">person</i>
                        <input class="validate" id="username" type="text" name="user1" ng-model="user1" required>
                        <label for="username" data-error="wrong" data-success="right" class="active">Last Name
                            <span class="red-text">*</span></label>
                        <span style="color:red" ng-show="myForm.user1.$touched && myForm.user1.$invalid">
                            <span ng-show="myForm.user1.$error.required">last names is required.</span>
                        </span>
                  </div>

                   <div class="input-field col s4">
                        <i class="material-icons prefix">query_builder</i>
                        <input class="validate" id="time1" type="time" name="time1" ng-model="time1" required>
                        <label for="time1" data-error="wrong" data-success="right" class="active">Desired time
                            <span class="red-text">*</span></label>
                        <span style="color:red" ng-show="myForm.time1.$touched && myForm.time1.$invalid">
                            <span ng-show="myForm.time1.$error.required">Time is required.</span>
                        </span>
                  </div>

             </div>

        <div class="row margin">

            <div class="input-field col s4" >
              <i class="material-icons prefix"></i>
                <select name="gender">
                    <option value="" disabled selected style="font-family: arial;">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        
            <div class="input-field col s4">
                <i class="material-icons prefix">today</i>
                <input id="date" type="date" name="Ddate" class="datepicker" ng-model="Ddate" required>
                <label class="active" for="date" data-error="wrong" data-success="right">Desired Date
                      <span class="red-text">*</span></label>
                <span style="color:red" ng-show="myForm.Ddate.$touched && myForm.Ddate.$invalid">
                      <span ng-show="myForm.Ddate.$error.required">date required.</span>
                </span>
            </div>

            <div class="input-field col s4">
               <i class="material-icons prefix"></i>
                <select name="duration" >
                    <option value="" disabled selected style="font-family: arial;">Duration in hours</option>
                    <option value="2">2 hours</option>
                    <option value="3">3 hours</option>
                    <option value="4">4 hours</option>
                    <option value="5">5 hours</option>
                </select>
            </div>

        </div>

        <div class="row margin">

          <div class="input-field col s4">
              <i class="material-icons prefix">email</i>
              <input class="validate" id="email" name="email" type="text" ng-model="email" required>
              <label for="email" data-error="wrong" data-success="right" class="active">email
                    <span class="red-text">*</span></label>
               <span style="color:red" ng-show="myForm.email.$touched && myForm.email.$invalid">
                    <span ng-show="myForm.email.$error.required">Email is required.</span>
                    <span ng-show="myForm.email.$error.email">Invalid email address.</span>
              </span>
          </div>

          <div class="input-field col s4">
              <i class="material-icons prefix">phone</i>
              <input  id="age" type="number" name="phoneNo" class="validate" ng-model="phoneNo" required>
              <label class="active" for="phoneNo" data-error="wrong" data-success="right">phone number
                    <span class="red-text">*</span></label>
              <span style="color:red" ng-show="myForm.phoneNo.$touched && myForm.phoneNo.$invalid">
                      <span ng-show="myForm.phoneNo.$error.required">phone Number required.</span>
              </span>
          </div>


          <div class="input-field col s4">
                <i class="material-icons prefix black-text">mode_edit</i>
                <textarea id="textarea1" type="text" class="materialize-textarea" name="message" length="1000" 
                          required>
                          </textarea> 
                <label for="textarea1">reason for appointment<span class="red-text">*</span></label>
          </div>
      </div>

      <div class="row">
              <div class="input-field col s3 offset-s1">
                  <button class="btn waves-effect red waves-light col s6" type="submit" >Clear</button>
              </div>
              <div class="input-field col s3 offset-s5">
                  <button type="submit" class="btn waves-effect blue waves-light col s6">Checkin</button>
              </div>
        </div>

      </form>

  </div>
</div>
 
  <!--<?php //require 'submit2.php';?>-->