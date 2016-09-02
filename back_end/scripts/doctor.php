
<h4 class="blue-tet center">Doctor Management</h4>
<hr style="width: 4%; border-color: red;"><br/><br/>
<br/>
<div class="z-depth-1 " style="width: 80%; border:1px solid black;margin-left: 10%; padding: 0px; ">
    <h5 class="center">Add New Doctor</h5> 
    <br/> 
 
    <div class="row">

             <form  id="form1" method="POST" action="" ng-app="myApp" ng-controller="validateCtrl" 
             		    novalidate>

                <div class="row">

                    <div class="input-field col s5 offset-s1">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" name="fname" ng-model="fname" required>
                        <label for="icon_prefix">Name<span class="red-text">*</span></label>
                        <span style="color:red" ng-show="myForm.fname.$dirty && myForm.fname.$invalid">
                      		  <span ng-show="myForm.fname.$error.required">name is required.</span>
                	      </span>
                    </div>

                    <div class="input-field col s5">
                        <i class="material-icons prefix"></i>
                        <input id="icon_prefix" type="text" class="validate" name="speciality" ng-model="speciality"      required>
                        <label for="icon_prefix">Speciality<span class="red-text">*</span></label>
                        <span style="color:red" ng-show="myForm.speciality.$dirty && myForm.speciality.$invalid">
                            <span ng-show="myForm.speciality.$error.required">Speciality is required.</span>
                        </span>
                    </div>

                </div>



                <div class="row">

                    <div class="input-field col s3 offset-s1">
                      <i class="material-icons prefix">email</i>
                      <input id="icon_prefix" type="text" class="validate" name="email" ng-model="email" required>
                      <label for="icon_prefix">Email<span class="red-text">*</span></label>
                       <span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
                      		<span ng-show="myForm.email.$error.required">Email is required.</span>
                      		<span ng-show="myForm.email.$error.email">Invalid email address.</span>
                		    </span>
                    </div>

                    <div class="input-field col s4 ">
                      <i class="material-icons prefix">phone</i>
                      <input id="icon_telephone" type="tel" class="validate" name="phoneNo" ng-model="phoneNo" 
                          required>
                      <label for="icon_telephone">Telephone<span class="red-text">*</span></label>
                      <span style="color:red" ng-show="myForm.phoneNo.$dirty && myForm.phoneNo.$invalid">
                          <span ng-show="myForm.phoneNo.$error.required">phone number is required.</span>
                      </span>
                    </div>

                    <div class="input-field col s3">
                      <i class="material-icons prefix">lock</i>
                      <input id="icon_prefix" type="password" class="validate" name="password" ng-model="password"      required>
                      <label for="icon_prefix">Password<span class="red-text">*</span></label>
                       <span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid">
                          <span ng-show="myForm.password.$error.required">password of user required.</span>
                      </span>
                  </div>

               </div>


               <button class="btn teal lighten-1 waves-effect waves-grey col s2 offset-s9" type="submit" name="action" 	       ng-disabled="myForm.email.$dirty && myForm.email.$invalid ||  myForm.phoneNo.$dirty &&        				myForm.phoneNo.$invalid || myForm.fname.$dirty &&  myForm.fname.$invalid">ADD
               </button>

            </form>
       </div> 
    </div>

    <br/><br/>

        <!--modal for view-->   
        <div id="modal1" style="width:40%" class="col s5 modal">
              <div class="modal-content" id="viewScreen2">
              </div>
              <div class="modal-footer">
                 <a href="#!" class="modal-close waves-effect" style="float: right;">
                    <button class="btn" type="submit">OK</button></a>
              </div>
        </div>

         <!--search doctor-->
       <div class="row ">
           <div class="input-field col s12 offset-s2">
                      <em style="font-size: 20px;">Doctor Name:</em>
                      <input  type="text" id="search" class="validate" name="search" style="width: 30%" 
                              onkeyup="search(this.value)" placeholder="search by doctor name">
                        <br/>
           </div>
       </div>

<br/>

 <?php require 'submitDoc.php';?>

<div class="col s10 offset-s2">
	<table class="bordered center-align" style="font-family: sans-serif;font-size:14;">
	     <thead>
	           <tr>
            		<th>No</th>
            		<th>Name</th>
            		<th>Email</th>
            		<th>Phone</th>
            		<th>Speciality</th>
            		<th>Performance</th>
            		<th>Action</th>
		
	           </tr>
	     </thead>

	     <tbody id="doctorsearch">
			
               <?php require 'displayDocList.php' ?>

	     </tbody>
	</table>

      	<br/><br/>
      	 <ul class="pagination center">
          <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
          <li class="active"><a href="#!">1</a></li>
          <li class="waves-effect"><a href="#!">2</a></li>
          <li class="waves-effect"><a href="#!">3</a></li>
          <li class="waves-effect"><a href="#!">4</a></li>
          <li class="waves-effect"><a href="#!">5</a></li>
          <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
            
 </div>   


 


  