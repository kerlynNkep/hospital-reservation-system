<?php
		$conn = mysql_connect('localhost','reservation','hospital');
	
				if(!$conn){
						echo "failure to connect";
						die('connection error');
					}
	
				$db = mysql_select_db("ReservationSys");
		
					$user_name   = "";
					$user_name1  = "";
					$user_gender = "";
					$user_Ddate  = "";
					$user_Dtime  = "";
					$user_PhoneNo= "";
					$user_email  = "";
					$user_duration= "";
					$user_message = "";


					if(isset($_POST['user'])){
						$user_name = $_POST['user'];
						 }
					if(isset($_POST['user1'])){ 
						$user_name1 = $_POST['user1'];
						}
					if(isset($_POST['gender'])){
						$user_gender = $_POST['gender'];
						}
					if(isset($_POST['Ddate'])){
						$user_Ddate = $_POST['Ddate'];
						}	
					if(isset($_POST['time1'])){
						$user_Dtime = $_POST['time1'];
						}					
					if(isset($_POST['phoneNo'])){
						$user_PhoneNo = $_POST['phoneNo'];
						}
					if(isset($_POST['email'])){
						$user_email = $_POST['email'];
						}
					if(isset($_POST['duration'])){
						$user_duration = $_POST['duration'];
						}
					if(isset($_POST['message'])){
						$user_message = $_POST['message'];
						}
					
					



				$query = "INSERT into appointment_form(fname, gender, desired_date, phoneNo, email, timeR, duration, message) VALUES 
							('$user_name','$user_gender','$user_Ddate', '$user_PhoneNo', '$user_email', '$user_Dtime',
							'$user_duration', '$user_message')";

				
				if(mysql_query($query) === true)	{
					
						echo '<script type="text/javascript">alert("message sent!");</script>';
			
					}	
				mysql_close($conn);
				echo '<script type="text/javascript">
						window.history.go(-3);
						</script>';
				

?>