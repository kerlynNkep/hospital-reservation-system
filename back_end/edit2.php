<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
          //  $Num="";
          // $Num = $_GET[$id];
             

        //  $conn = mysql_connect('localhost','reservation','hospital');
  
         //  if(!$conn){
         //       echo "failure to connect";
         //       die('connection error');
            //  }
  
         // $db = mysql_select_db("ReservationSys");
 
          echo "meeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee";
                  $user_Ddate   = "";
                  $user_doctor  = "";
                  $user_service = "";
                  $user_status  = "";
                  $user_payment = "";


         $query   = "UPDATE appointment_form 
                          SET desired_date ='$user_Ddate' ,doctor = '$user_doctor' , service = '$user_service', 
                              status='$user_status', payment = '$user_payment' 
                          WHERE id LIKE '%global $id%' ";
                            
                  
                           

        $result4 = mysql_query($query);

          $counter = 1;
          
            if(mysql_num_rows($result4)> 0){
                       echo "<script type='text/javascript'>alert('update successful')</script>";
                while( $row = mysql_fetch_assoc($result4)){
                 ?>
                <tr class='centered'>
                      <td><?php echo $row['desired_date']; ?></td>
                      <td><?php echo $row['doctor']; ?></td>
                      <td><?php echo $row['fname']; ?></td>
                      <td><?php echo $row['service']; ?> </td>
                      <td><?php echo $row['status']; ?></td>
                      <td><?php echo $row['payment']; ?></td>
                      <td><?php ob_start(); ?>
                        <a href='#moda2' class='modal-trigger btn teal lighten-1' onclick="edit(<?php echo $row['id']; ?>)">Edit</a>
                        </td>
                      <td><?php ob_start(); ?>
                        <a href='delet.php?id=<?php echo $row['id']; ?>'  onclick="return confirm('Are you sure you wish to delete this Record?');" style='float:left;'><i class='material-icons right red-text'>close</i></a>
                      </td>
      
                </tr>
                <?php

                $counter++ ;
               
              }
          }
        
       else
         echo "<script type='text/javascript'>alert('update failed')</script>";



               
               mysql_close($conn);
             }

?>
