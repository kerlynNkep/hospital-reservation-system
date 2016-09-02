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

                  $query = "SELECT * from doctorTable 
                            WHERE id LIKE '%$user_search%'";


        	        $results = mysql_query($query); 
                      
                      if(mysql_num_rows($results)> 0){
                          ?>
                            <h5 class="center">DOCTOR INFO:</h5>
                            <hr style="border-color: red;width:5%;"/><br/>
                            <?php
                             while( $row = mysql_fetch_assoc($results)){
                               
                                  ?>
                                  <tr class='centered' style="font-family: arial;font-size:14;border-radius: 10px 10px 10px 10px;">
                                      <td><b>FIRSTNAME: </b><?php echo $row['fname']; ?><br/></td>
                                      <td><br/><b>LASTNAME: </b><?php echo $row['lname']; ?><br/></td>
                                      <td><br/><b>EMAIL: </b><?php echo $row['Email']; ?><br/></td>
                                      <td><br/><b>PHONE NO: </b><?php echo $row['phoneNo'];?><br/></td>
                                      <td><br/><b>SPECIALITY: </b><?php echo $row['speciality'];?><br/></td>
                                      <td><br/><b>DESCRIPTION: </b><?php echo $row['description'];?></td>
                                  </tr>
                                  <?php
                              }  
                         } 
                
              }
                  
                  
            

            mysql_close($conn);
 

?>
