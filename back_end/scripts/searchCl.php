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
           // if (($user_search !== "") && ($user_search !== " ")){
                  $query = "SELECT fname,phoneNo, email from contact_form 
                            WHERE fname LIKE '%$user_search%'";


                 
        	        $results = mysql_query($query); 
                      
                  
                      if(mysql_num_rows($results)> 0){

                           while( $row = mysql_fetch_assoc($results)){
                                $counter = 1;
                                  ?>
                                     <tr class='centered'>
                                          <td><?php echo $counter; ?></td>
                                          <td><?php echo $row['fname']; ?></td>
                                          <td><?php echo $row['email']; ?></td>
                                          <td><?php echo $row['phoneNo']; ?></td>
                                          <td class='left'><?php echo
                                              "<a href='#moda1' class='modal-trigger'><i class='material-icons right red-text'>close</i></a>
                                                <i class='material-icons right blue-text'>visibility</i>";
                                              ?></td>
                                      </tr>
                                        <?php
                                      $counter++; //increment counter by 1 on every pass 
                              }  
                         } 

                      //else{
                      //    echo "0 results";
                      //    }           
                
                 
              }
                  
                  
            

            mysql_close($conn);
 

?>
