 <?php
      $conn = mysql_connect('localhost','reservation','hospital');
  
        if(!$conn){
            echo "failure to connect";
            die('connection error');
          }
  
        $db = mysql_select_db("ReservationSys");
    
        
        //execute the SQL query and return records
        $query = "select id,fname,phoneNo,email from contact_form";

        $result = mysql_query($query);  
     
        $counter = 1;
        
        if(mysql_num_rows($result)>0){
          while( $row = mysql_fetch_assoc( $result) ){
             ?>
              <tr class='centered'>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phoneNo']; ?></td>
                    <td class='left'><?php ob_start(); ?>  
                        <a href='deleteCl.php?id=<?php echo $row['id']; ?>'  onclick="return confirm('Are you sure you wish to delete this Record?');"><i class='material-icons right red-text'>close</i></a>
                        <a href='#modal1' class='modal-trigger' onclick="search3(<?php echo $row['id']; ?>)">
                          <i class='material-icons right blue-text'>visibility</i></a>
                    
                    </td>
                </tr>
                  <?php

                    $counter++; //increment counter by 1 on every pass 
                 }
              }
          
        else{
            echo "0 results";
            }   
        
      mysql_close($conn);
  ?>