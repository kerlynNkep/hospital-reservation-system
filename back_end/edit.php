
<?php
  $id="localhost";     
    
  global $id;
    $id = $_GET['q'];


  $conn = mysql_connect('localhost','reservation','hospital');
  
           if(!$conn){
                echo "failure to connect";
                die('connection error');
              }
  
          $db = mysql_select_db("ReservationSys");

      //  if(isset($_GET['id'])!=""){ 
       //               $id=$_GET['id']; }

         $query = "SELECT desired_date,fname,doctor,service,status,payment FROM appointment_form 
                  WHERE id = $id";

        $result = mysql_query($query); 
        $row = mysql_fetch_assoc($result);

          
          echo "
          <form method='POST' action=''>
            <div class='modal-content'>
               <div class='row margin'>
                  <div class='input-field col s4'>
                        <i class='material-icons prefix'></i>
                        <input class='validate' id='Ddate' type='date' name='Ddate' 
                              value=". $row['desired_date']." >
                       
                  </div>
                  
                  <div class='input-field col s4'>
                        <i class='material-icons prefix'>person</i>
                        <input class='validate' id='dname' type='text' name='dname'  
                                                  value=".$row['doctor'].">
                        
                  </div>
<div class='input-field col s4'>
                        <i class='material-icons prefix'>person</i>
                        <input class='validate' id='cname' type='text' name='cname' 
                                                                      value=".$row['fname']." disabled>
                         
                  </div>
                </div>

                <div class='row margin'>
                  <div class='input-field col s4'>
                        <i class='material-icons prefix'>subtitles</i>
                        <input class='validate' id='service' type='text' name='service' 
                                                                          value=".$row['service'].">
                       
                  </div>

                  <div class='input-field col s4'>
                         <select class='icons' name='status'>
                          <option value='' disabled selected></option>
                          <option value='Pending' >Pending</option>
                          <option value='Approved'>Approved</option>
                          <option value='Rejected'>Rejected</option>
                        </select> 
                  </div>

                  <div class='input-field col s4'>
                        <select class='icons' name='payment'>
                          <option value='' disabled selected>Payment</option>
                          <option value='Non' >Non</option>
                          <option value='Completed'>Completed</option>
                          <option value='Incomplete'>Incomplete</option>
                        </select>  
                  </div>
              </div>
          
               <div class='modal-footer'>
                  <a href='#' class='modal-close waves-effect'><button class='btn red' type='submit'>
                    Cancel</button></a>
                  <button class='btn blue lighten-1' type='Submit'> Update</button>
            </div>  </div>
          </form>


          <script type='text/javascript' src='j-s/jquery-2.1.4.min.js'></script>
          <script type='text/javascript' src='j-s/materialize.min.js'></script>

          <script type='text/javascript'>
            setTimeout(function(){
              console.info('just testing');
            }, 120*1000);
            
            $(document).ready(function() {
              
              $('select').material_select();
            });
          </script>

          ";
         // return (echo "$id");

           echo "<script type='text/javascript>alert($id);</script>";

       //mysql_close($conn);
?>
<script type="text/javascript" src="j-s/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="j-s/materialize.min.js"></script>

<?php require 'edit2.php'; ?>

