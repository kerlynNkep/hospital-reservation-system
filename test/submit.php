	 

	<?php
			require_once('PHPMailer/PHPMailerAutoload.php');

				$conn = mysql_connect('localhost','reservation','hospital');
	
				if(!$conn){
						echo "failure to connect";
						die('connection error');
					}
	
				$db = mysql_select_db("ReservationSys");
		
					$user_name    = "";
					$user_PhoneNo = "";
					$user_Email   = "";
					$user_subject = "";
					$user_message = "";
							$from = "";
							$name = "";

					if(isset($_POST['user'])){ 
						$user_name = $_POST['user'];
						 }
					if(isset($_POST['phoneNo'])){
						$user_PhoneNo = $_POST['phoneNo'];
						}
					if(isset($_POST['email'])){
						$user_Email = $_POST['email'];
						}
					if(isset($_POST['subject'])){
						$user_subject = $_POST['subject'];
						}
					if(isset($_POST['message'])){
						$user_message = $_POST['message'];
						}
					
					
			

	

	
	//assign form value to variables
		$from=test_input($_POST["email"]);
		$to = "kerlynmanyi@gmail.com";
		
			//sending email to admin

         //Create a new PHPMailer instance
		$mail = new PHPMailer;
		
		//Enable SMTP debugging.
		//$mail->SMTPDebug = 3;
		//Set PHPMailer to use SMTP
		$mail->isSMTP();

		//Ask for HTML-friendly debug output
		//$mail->Debugoutput = 'html';

		//Set SMTP host name
		$mail->Host = "smtp.gmail.com";

		//Set this to true if SMTP host requires authentication to send email
		$mail->SMTPAuth = true;

		//Set TCP port to connect to 
		$mail->Port = 587;

		//Provide username and password     
		$mail->Username = "kerlynmanyi@gmail.com";
		$mail->Password = "FE14A172"; 

		//If SMTP requires TLS encryption then set it
		$mail->SMTPSecure = "tls"; 
		$mail->setFrom ($from,$name);
		$mail->addAddress($to, "Kerlyn");
		$mail->addReplyTo($from, "Reply");	
		$mail->isHTML(true);
		$mail->Subject = $user_subject;
		$mail->Body = "Name".$name."<br ><i>".$user_message."</i><br>Phone:".$user_PhoneNo;
		$mail->AltBody = $user_message;
		//if(!$mail->send())
		//    echo "//Mailer Error: " . $mail->ErrorInfo;
		//else 
		 //   echo "<script type='text/javascript'>alert('Thanks for contacting us, we will get back to you shortly')</script>";
	

	//function to strip clean the client's input
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}



			//query to insert into database from contact page 
		$query = "insert into contact_form(fname, phoneNo, email, subject, message) values ('$user_name',
				'$user_PhoneNo', '$user_Email', '$user_subject', '$user_message')";

		//mysql_query($query);
		
		if((mysql_query($query) == true) && ($mail->send()))	{
				echo '<script type="text/javascript">
						window.location.href="contact.php";
						alert("Thanks for contacting us, we will get back to you shortly!");
						</script>';
				
			}	
		else
			echo "//Mailer Error: " . $mail->ErrorInfo;
		

	mysql_close($conn);

   
?>

