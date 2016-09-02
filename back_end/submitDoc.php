 <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $conn = mysql_connect('localhost','reservation','hospital');
  
        if(!$conn){
            echo "failure to connect";
            die('connection error');
          }
  
        $db = mysql_select_db("ReservationSys");
    
        
        //execute the SQL query and return records
        $query = "select fname, Email, phoneNo,speciality from doctorTable";

        $result = mysql_query($query);  

            $user_fname      = "";
            $user_email      = "";
            $user_phoneNo    = "";
            $user_speciality = "";
            $user_password   = "";
            $pass            = ""; 

        if(isset($_POST['fname'])){
          $user_fname = $_POST['fname'];
          }
        if(isset($_POST['email'])){
          $user_email = $_POST['email'];
          }
        if(isset($_POST['phoneNo'])){
          $user_phoneNo = $_POST['phoneNo'];
          }
         if(isset($_POST['speciality'])){
          $user_speciality = $_POST['speciality'];
          }
         if(isset($_POST['password'])){
          $user_password = $_POST['password'];
          $pass = password_hash($user_password,PASSWORD_DEFAULT);
          }
     
         
          $query1 = "insert into doctorTable(Uname,fname,phoneNo,Email,speciality)values('$user_fname','$user_fname',
                   '$user_phoneNo','$user_email', '$user_speciality')";

          $query2 = "insert into doctorLogin(email,password)values('$user_email','$pass')";

          $result2 = mysql_query($query1);
          $result3 = mysql_query($query2);

            //mysql_error($db);
            //exit;
          if(($result2 == true) && ($result3 == true)){
                 echo "<script type='text/javascript'> alert('add successful');</script>";
                }
          else{
              echo "<script type='text/javascript'> alert('add unsuccessful');</script>";
            }
        
        mysql_close($conn); 
      }  


  ?>          
