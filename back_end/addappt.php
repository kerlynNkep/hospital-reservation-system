 <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $conn = mysql_connect('localhost','reservation','hospital');
  
        if(!$conn){
            echo "failure to connect";
            die('connection error');
          }
  
        $db = mysql_select_db("ReservationSys");
    

        $user_date      = "";
        $user_dname     = "";
        $user_cname     = "";
        $user_service   = "";
        $user_status    = "";
        $user_payment   = "";

        if(isset($_POST['Ddate'])){
          $user_date = $_POST['Ddate'];
          }

        if(isset($_POST['dname'])){
          $user_dname = $_POST['dname'];
          }

        if(isset($_POST['cname'])){
          $user_cname = $_POST['cname'];
          }

         if(isset($_POST['service'])){
          $user_service = $_POST['service'];
          }

          if(isset($_POST['status'])){
          $user_status = $_POST['status'];
          }

          if(isset($_POST['payment'])){
          $user_payment = $_POST['payment'];
          }
     
          $query1 = "insert into appointment_form(desired_date,doctor,fname,service,status,payment)values('$user_date'
              ,'$user_dname', '$user_cname','$user_service', '$user_status','$user_payment')";

               
          $result2 = mysql_query($query1);
            

          if($result2 == true){
               echo "<script type='text/javascript'> 
                      alert('add successful');
                      window.location = 'admin.php?page=appointment';
                     </script>";
          }
          else{
                 echo "<script type='text/javascript'> alert('failed to add');
                        window.location = 'admin.php?page=appointment';
                      </script>";

            }
          
           mysql_close($conn);
   }
  ?>