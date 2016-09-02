 <?php
      $conn = mysql_connect('localhost','reservation','hospital');
        
        if(!$conn){
            echo "failure to connect";
            die('connection error');
          }
  
        $db = mysql_select_db("ReservationSys");
    
        
        //execute the SQL query and return records
        $query = "select id,desired_date,fname,doctor,service,status,payment from appointment_form";

        $result = mysql_query($query); 

        $counter = 1;
         if(mysql_num_rows($result)> 0){
            while( $row = mysql_fetch_assoc($result) ){
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
            
       

      mysql_close($conn);   
           
  ?>
