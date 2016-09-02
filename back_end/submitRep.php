 <?php
      $conn = mysql_connect('localhost','reservation','hospital');
  
        if(!$conn){
            echo "failure to connect";
            die('connection error');
          }
  
        $db = mysql_select_db("ReservationSys");
    
//update database of appointment to include timeR which is the time and and duration and also date
		$query = "SELECT desired_date, timeR, doctor, fname,  duration, desired_date FROM appointment_form
             WHERE status = 'Approved'";

        
        $result1 = mysql_query($query);

         if(mysql_num_rows($result1)> 0){
            while( $row = mysql_fetch_assoc($result1)){
              ?>
                <tr class='centered'>
                      <td><?php echo $row['desired_date']; ?></td>
                      <td><?php echo $row['timeR']; ?></td>
                      <td><?php echo $row['doctor']; ?></td>
                      <td><?php echo $row['fname']; ?> </td>
                      <td><?php echo $row['duration']; ?></td>
                      <td><?php echo $row['desired_date']; ?></td>
                       <td><?php echo $row['desired_date']; ?></td>
                </tr>
                 <?php
             }
          }
         

      mysql_close($conn);   
           

       
        


  ?>