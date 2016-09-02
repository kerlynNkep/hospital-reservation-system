<?php
  
      $conn = mysql_connect('localhost','reservation','hospital');
  
        if(!$conn){
            echo "failure to connect";
            die('connection error');
          }
  
        $db = mysql_select_db("ReservationSys");
    
        
        //execute the SQL query and return records
        $query = "select id, fname, Email, phoneNo,speciality from doctorTable";

        $result = mysql_query($query);  

        $counter = 1;
        
        if(mysql_num_rows($result)> 0){
          while( $row = mysql_fetch_assoc( $result ) ){
              ?>
                <tr class='centered' style="font-family: arial;font-size:14;">
                      <td><?php echo $counter; ?></td>
                      <td><?php echo $row['fname']; ?></td>
                      <td><?php echo $row['Email']; ?></td>
                      <td><?php echo $row['phoneNo']; ?></td>
                      <td><?php echo $row['speciality']; ?> </td>
                      <td><?php echo "<a href='http://localhost/mine1/back_end/admin.php?page=dashboard#performance' class='btn teal lighten-1'>view</a>"; ?></td>
                     <td class='left'><?php ob_start(); ?>  
                        <a href='deleteDr.php?id=<?php echo $row['id']; ?>'  onclick="return confirm('Are you sure you wish to delete this Record?');" ><i class='material-icons right red-text'>close</i></a>
                        <a href='#modal1' class='modal-trigger' onclick="display(<?php echo $row['id']; ?>)">
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
        



        
