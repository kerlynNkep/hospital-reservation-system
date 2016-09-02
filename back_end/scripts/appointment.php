
<div class="row ">
			<div  class="input-field col s3 robotoLight" >
                <select class="browser-default" >
    				<option value="" disabled selected>Choose your option</option>
    				<option value="1">Today</option>
    				<option value="2">Yesterday</option>
    				<option value="3">Last 7 Days</option>
    				<option value="3">Last 30 Days</option>
    				<option value="3">Next Month</option>
  				</select>
  			</div> 
  			 <div class="input-field col s2" >
                <select class="browser-default" >
    				<option value="" disabled selected>filter appointement</option>
    				<option value="1">All Appointments</option>
    				<option value="2">Pending</option>
    				<option value="3">Confirmed</option>
    				<option value="3"></option>
  				</select>
  			 </div> 
  			<div class="col s6">...</div>
  			<div class="col s2" style="float: right;">
  				<a href="#moda3" class="modal-trigger teal lighten-1 waves-effect waves-light btn">New Appointment</a>
  			</div>           
</div>
<br/><br/>
  
<div>
<br/><br/>
<form method="POST" action="" >
    <table class="bordered center-align">
    <thead>
      <tr>
        <th class="blue-text">Date</th>
        <th class="blue-text">Doctor</th>
        <th class="blue-text">Client</th>
        <th class="blue-text">Service</th>
        <!--<th class="blue-text">Duration</th>-->
        <th class="blue-text">Status</th>
        <th class="blue-text">Payment</th>
        <th class="blue-text">Action</th>
        <th style="float:left;"><a class="material-icon  tooltipped" data-position="left" data-delay="50" data-tooltip="tick to delete"><i class="material-icons right">delete</i></a></th>
        
      </tr>
    </thead>
    <tbody id="tbod">
          <?php require"submitAppt.php" ?>  
    </tbody>

     
    </table>
  </form>
  </div>
  
 
<style type="text/css">
	 .input-field input[type=text]:focus + label {
     color: black;
</style>


 <!--modal for edit-->

  <div class="row centered"  style="align-self: center;width:10%;">

          <div id="moda2" class="modal">

                <h5 class="center">FILL INFORMATION:</h5>
                <hr style="width:10%;"/>
                <div id="viewScreen2">
          
                </div>
                
          </div>
  </div>
      <!--modal for new appt-->
      <?php require 'newAptModal.php';?>
     