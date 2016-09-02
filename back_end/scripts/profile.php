

<?php require 'submitprof.php';?>
<h5 class="blu-text ">PERSONAL INFORMATION</h5><br/>
<!--<hr style="width: 6%; border-color: red;"><br/><br/>-->

<h5 class="blue-text center"><em>NAME</em></h5><br/>

<div class="row">
<form method="POST"  action="" id="present">
	<div class="row">
		<div class="input-field col s5 offset-s3">
			<i class="material-icons prefix">person</i>
			<input  type="text" id="uname" class="validate" name="uname" ><br/>
			<label for="uname" class="active">username</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s5 offset-s3">
			<i class="material-icons prefix">person</i>
			<input  type="text" id="fname" class="validate" name="fname" ><br/>
			<label for="fname" class="active">First name</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s5 offset-s3">
			<i class="material-icons prefix">person</i>
			<input  type="text" id="lname" class="validate" name="lname" ><br/>
			<label for="lname" class="active">Last name</label>
		</div>
	</div>

<br/><br/>
<h5 class="blue-text center"><em>CONTACT INFORMATION</em></h5><br/>
<div class="row">

	<div class="row">
		<div class="input-field col s5 offset-s3">
			<i class="material-icons prefix">email</i>
			<input  type="email" id="email" class="validate" name="email" ><br/>
			<label for="email" class="active">enter your previous email</label>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s5 offset-s3">
			<i class="material-icons prefix">email</i>
			<input  type="email" id="email1" class="validate" name="email1" ><br/>
			<label for="email1" class="active">enter new email</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s5 offset-s3">
			<i class="material-icons prefix">phone</i>
			<input  type="number" id="phoneNo" class="validate" name="PhoneNo" ><br/>
			<label for="phoneNo" class="active">Phone Number</label>
		</div>
	</div>
</div>
<br/><br/>
<h5 class="blue-text center"><em>About Yourself</em></h5><br/>

	<div class="row">
		<div class="input-field col s5 offset-s3">
			<i class="material-icons prefix">edit</i>
			<textarea id="textarea1" type="text" name="bio" class="materialize-textarea" length="1000"></textarea> 
                      <label for="textarea1">Describe yourself</label>
		</div>
	</div>

	<!--for image upload-->
	 <div class="row">
	 <div class="col s5 offset-s4">
	 	  <div id="preview"><img src="images/you.jpg"  style="width: 40%;height: 120px;"/>
	 	  </div><br/>
	 	 <!-- <form id="form" action="ajaxupload.php" method="GET" enctype="multipart/form-data">
	 	  		<input id="uploadImage" type="file" accept="image/*" name="image" /><br/>
	 	  		<input id="button" type="submit" value="Upload" >	
	 	  </form>
	 	  <div id="err"></div>-->

	 </div></div><!--end of image upload-->

	 <div class="row">
	 <div class="col s4 offset-s2"><a class="btn teal darken-1">Clear</a></div>
	<div class="col s4 offset-s1"><button type="submit" class="btn waves-effect waves-light col s4">Update</button></div>
	</div>
</form>
</div>

 <script type="text/javascript" src="j-s/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
//script for uploading image
/*$(document).ready(function(e){
	// function load() {
	 	alert("miss");

		$("#form").on('submit',(function(e){
				 e.preventDefault();
				 alert("hey");
				 $.ajax({
				 		url:"ajaxupload.php",
				 		type:"POST",
				 		data:new FormData(this),
				 		contentType:false,
				 		cache:false,
				 		processData:false,
				 		beforeSend:function(){
				 			//$("#preview".fadeOut();
				 			$("err").fadeOut();
				 		},
				 		success:function(data){
				 			if(data=='invalid file'){
				 				//invalid file format
				 				$("#err").html("Invalid File !").fadeIn();
				 			}
				 			else{
				 				//view uploaded file
				 				$("#preview").html(data).fadeIn();
				 				$("#form")[0].reset();
				 			}
				 		},
				 		error:function(e){
				 			$("err".html(e).fadeIn);
				 		}
				  });
		}));
	
//}
});*/
</script>




