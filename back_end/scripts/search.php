<?php 
//for search client
      $user_search = $_GET['q'];

	   $conn = mysql_connect('localhost','reservation','hospital');
  
           if(!$conn){
                echo "failure to connect";
                die('connection error');
              }
  
        	$db = mysql_select_db("ReservationSys");
        
         // echo "<script type='text/javascript'> alert('hey');</script>";
          if (strlen($user_search)>0) {

                  $query = "SELECT fname,Email,phoneNo,speciality from doctorTable 
                            WHERE fname LIKE '%$user_search%'";


                 
        	        $result1 = mysql_query($query); 

                  
                      if(mysql_num_rows($result1)> 0){

                           while( $row = mysql_fetch_assoc( $result1 ) ){
                                $counter = 1;
                                  ?>
                                     <tr class='centered'>
                                          <td><?php echo $counter; ?></td>
                                          <td><?php echo $row['fname']; ?></td>
                                          <td><?php echo $row['Email']; ?></td>
                                          <td><?php echo $row['phoneNo']; ?></td>
                                          <td><?php echo $row['speciality']; ?></td>
                                          <td><?php echo "<a href='#performance' class='btn teal lighten-1'>view</a>";
                                              ?></td>
                                          <td class='left'><?php echo
                                              "<a href='#moda1' class='modal-trigger'>
                                              <i class='material-icons right red-text'>close</i></a>
                                              <i class='material-icons right blue-text'>visibility</i>";
                                              ?></td>
                                      </tr>
                                        <?php
                                      $counter++; //increment counter by 1 on every pass 
                              }  
                       } 
                
                 
              }
                  
                  
            

            mysql_close($conn);
 

?>
