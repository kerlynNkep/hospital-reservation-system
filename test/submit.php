<?php 
//connecting to server
	$conn = mysql_connect('localhost','reservation','hospital');
	//checking connections
	if(!$conn){
		echo "failure to connect";
		die('connection error');
	}
	$db = mysql_select_db("ReservationSys");

	$user_name = $_POST['fname'];
	$user_phoneNum = $_POST['phoneNo'];
	$user_Email = $_POST['email'];
	$user_subject = $_POST['subject'];
	$user_message = $_POST['message'];
	
	
	

?>