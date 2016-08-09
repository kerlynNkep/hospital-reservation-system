<?php
	$conn = mysql_connect('localhost','root','');
	if(!$conn){
		echo "failure to connect";
		die('connection error');
	}
	$db = mysql_select_db("hospital2");

	$user_Email = $_POST['email'];
	$user_password = $_POST['password'];

	$query = "select * from login where email='$user_Email' & password='$user_password';";
		mysql_query($query);

		if(){
			header("Location:mypage.php");
		}
		else{
			echo "wrong password or email";
			header("Location:login.php");
		}

		mysql_close();

		?>
