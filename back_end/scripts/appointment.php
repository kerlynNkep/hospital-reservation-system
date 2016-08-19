
<div class="row ">
			<div class="input-field col s3" >
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
  				<a class="teal lighten-1 waves-effect waves-light btn">New Appointment</a>
  			</div>           
</div>
<br/><br/>
<form method="POST" action="" >
    <table class="bordered center-align">
<tr>
        <th class="blue-text">Date</th>
        <th class="blue-text">Doctor</th>
        <th class="blue-text">Client</th>
        <th class="blue-text">Service</th>
        <th class="blue-text">Duration</th>
        <th class="blue-text">Status</th>
        <th class="blue-text">Payment</th>
        <th class="blue-text">Action</th>
        <th style="float:left;"><a class="material-icon red-text tooltipped" data-position="left" data-delay="50" data-tooltip="tick to delete"><i class="material-icons right">delete</i></a></th>
        
    </tr>
        <tr class="centered">
            <td>12-12-14</td>
            <td>Jane</td>
            <td>jamia</td>
            <td>2h</td>
            <td>approved</td>
            <td>123</td>
            <td>432</td>
            <td><a href="" class="btn teal lighten-1">Edit</a></td>
            <td><input type="checkbox" id="del1" class="delete"/><label for="del1"></label></td>
        </tr>
        <tr>
             <td>12-12-14</td>
            <td>Jane</td>
            <td>jane@gmail</td>
            <td>67777777</td>
            <td>approved</td>
            <td>123</td>
            <td>432</td>
            <td><a href="" class="btn teal lighten-1">Edit</a></td>
            <td><input type="checkbox" id="del2" class="delete"/><label for="del2"></label></td>
        </tr>
        <tr>
            <td>12-12-14</td>
            <td>Jane</td>
            <td>jane@gmail</td>
            <td>67777777</td>
            <td>approved</td>
            <td>123</td>
            <td>432</td>
            <td><a href="" class="btn teal lighten-1">Edit</a></td>
            <td><input type="checkbox" id="del3" class="delete"/><label for="del3"></label></td>
        </tr>
        <tr>
             <td>12-12-14</td>
            <td>Jane</td>
            <td>jane@gmail</td>
            <td>67777777</td>
            <td>approved</td>
            <td>123</td>
            <td>432</td>
            <td><a href="" class="btn teal lighten-1">Edit</a></td>
            <td><input type="checkbox" id="del4" class="delete"/><label for="del4"></label></td>
            
        </tr>
        <tr>
            <td>12-12-14</td>
            <td>Jane</td>
            <td>jane@gmail</td>
            <td>67777777</td>
            <td>pending</td>
            <td>123</td>
            <td>432</td>
            <td><a href="" class="btn teal lighten-1">Edit</a></td>
            <td><input type="checkbox" id="del5" class="delete"/><label for="del5"></label></td>
        </tr>
        <tr>
            <td>12-12-14</td>
            <td>Jane</td>
            <td>jane@gmail</td>
            <td>67777777</td>
            <td>pending</td>
            <td>123</td>
            <td>432</td>
            <td><a href="" class="btn teal lighten-1">Edit</a></td>
            <td><input type="checkbox" id="del6" class="delete"/><label for="del6"></label></td>
        </tr>
        <tr>
           <td>12-12-14</td>
            <td>Jane</td>
            <td>jane@gmail</td>
            <td>67777777</td>
            <td>pending</td>
            <td>123</td>
            <td>432</td>
            <td><a href="" class="btn teal lighten-1">Edit</a></td>
            <td><input type="checkbox" id="del7" class="delete"/><label for="del7"></label></td>
        </tr>
    </table>
  </form>
  
 
<style type="text/css">
	 .input-field input[type=text]:focus + label {
     color: black;
</style>
<script type="text/javascript">
 $(document).ready(function() {
    $('select').material_select();
  });
</script>