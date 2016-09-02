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

                  $query = "SELECT * from contact_form 
                            WHERE id LIKE '%$user_search%'";

                  $query2 = "SELECT gender,doctor,service,payment FROM appointment_form, contact_form 
                            WHERE  appointment_form.fname = contact_form.fname ";


                 //still have to fix query
        	        $results = mysql_query($query); 
                  $result1 = mysql_query($query2);
                      
                  
                      if(mysql_num_rows($results)> 0){
                          ?>
                          <h5 class="blu-text center">CLIENT INFO:</h5>
                          <hr style="border-color: red;width:5%;"/><br/>
                          <?php
                           while( $row = mysql_fetch_assoc($results)){
                               
                                  ?>
                                     <tr class='centered' style="font-family: arial;font-size:12;">
                                         <td><b>NAME: </b><?php echo $row['fname']; ?><br/></td>
                                          <td><br/><b>EMAIL: </b><?php echo $row['email']; ?><br/></td>
                                          <td><br/><b>PHONE NO: </b><?php echo $row['phoneNo'];?><br/></td>
                                          <td><br/><b>SUBJECT: </b><?php echo $row['subject'];?><br/></td>
                                          <td><br/><b>MESSAGE: </b><?php echo $row['message'];?></td>
                                         
                                      </tr>
                                        <?php
                             }  
                         } 
                         //to display appointment information about the client
                       if(mysql_num_rows($result1)> 0){

                           if( $row = mysql_fetch_assoc($result1)){
                               
                                  ?>
                                     <tr class='centered' style="font-family: arial;font-size:12;">
                                          <br/>
                                          <td><br/><b>GENDER: </b><?php echo $row['gender']; ?><br/></td>
                                          <td><br/><b>DOCTOR IN CHARGE: </b><?php echo $row['doctor']; ?><br/></td>
                                          <td><br/><b>SERVICE: </b><?php echo $row['service']; ?></td>
                                         
                                      </tr>
                                        <?php
                             }  
                         } 

                 
              }
                  
                  
            

            mysql_close($conn);
 

?>
