<!DOCTYPE html>
<html>
<head>
	<title>signUp confirmation</title>
</head>
<body>
<?php
	$conn = mysql_connect('localhost','root','');
	if(!$conn){
		echo "failure to connect";
		die('connection error');
	}
	$db = mysql_select_db("hospital2");
	
	$user_name1 = $_POST['fname'];
	$user_name2 = $_POST['lname'];
	$user_age = $_POST['age'];
	$user_gender = $_POST['sex'];
	$user_based = $_POST['result'];
	$user_weight = $_POST['weight'];
	$user_height = $_POST['height'];
	$user_DOB = $_POST['DOB'];
	$user_country = $_POST['country'];
	$user_PhoneNum = $_POST['phoneNo'];
	$user_Email = $_POST['email'];
	$user_password = $_POST['password'];
	$user_password2 = $_POST['password2'];

	if($user_password != $user_password2){
		die('your password has not been confirmed.try again');
		//header("Location:login.php");
	}
	$query = "insert into SIGNUP(firstname, lastname, age, gender, DOB, email, phoneNum, country, password) values ('$user_name1','$user_name2', '$user_age', '$user_gender', '$user_DOB', '$user_Email', '$user_PhoneNum','$user_country', '$user_password');";

	mysql_query($query);
	echo "<h2>You have successfully signed up</h2>";
	echo '<a href="index2.php">click me to continue </a>'; 

	$query2 = "insert into login(email, password) values ('$user_Email', '$user_password');";
	mysql_query($query2);

	mysql_close($conn);
	
?>
</body>
</html>
