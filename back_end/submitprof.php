 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $conn = mysql_connect('localhost','reservation','hospital');
  
        if(!$conn){
            echo "failure to connect";
            die('connection error');
          }
  
        $db = mysql_select_db("ReservationSys");
    
        
        $user_uname = "";
        $user_fname = "";
        $user_lname = "";
        $user_email = "";
        $user_email1  = "";
        $user_phoneNo = "";
        $user_description = "";

        //if(isset($_POST['uname'])){ 
		//		$user_uname = $_POST['uname'];
		//	 }
    if(isset($_POST['uname'])){ 
        $user_uname = $_POST['uname'];
       }
		if(isset($_POST['fname'])){ 
				$user_fname = $_POST['fname'];
			 }
		if(isset($_POST['lname'])){ 
				$user_lname = $_POST['lname'];
			 }
		if(isset($_POST['email'])){ 
				$user_email = $_POST['email'];
			 }
    if(isset($_POST['email1'])){ 
        $user_email1 = $_POST['email1'];
       }
		if(isset($_POST['PhoneNo'])){ 
				$user_phoneNo = $_POST['PhoneNo'];
			 }
		if(isset($_POST['bio'])){ 
				$user_description = $_POST['bio'];
			 }


		$query = "UPDATE doctorTable 
                        SET Uname ='$user_uname' ,fname = '$user_fname' ,lname = '$user_lname', 
                             Email = '$user_email1', phoneNo = '$user_phoneNo', description = '$user_description' 
                        WHERE  doctorTable.Email = '$user_email'";

    $query1 = "UPDATE doctorLogin
                        SET email = '$user_email1' WHERE doctorLogin.email = '$user_email'";

                    

        
        $result1 = mysql_query($query);
        $result2 = mysql_query($query1);
        

        if(($result1 == true) && ($result2==true)){
        	echo "<script type='text/javascript'> 
                        alert('update successful');
                        window.location = 'admin.php?page=profile';
                        </script>";
        	
           }
        else{

             echo "<script type='text/javascript'> 
                      alert('update Unsuccessful');
                      window.location = 'admin.php?page=profile';
                      </script>";

         }

       mysql_close($conn);

    }

    ?>
