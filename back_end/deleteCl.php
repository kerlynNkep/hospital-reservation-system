 <?php

      $conn = mysql_connect('localhost','reservation','hospital');
  
        if(!$conn){
            echo "failure to connect";
            die('connection error');
          }
  
        $db = mysql_select_db("ReservationSys");


        if(isset($_GET['id'])!="")
              {
                $delete=$_GET['id'];
                $delet=mysql_query("DELETE FROM contact_form WHERE id LIKE '%$delete%'");
                if($delet== true)
                    {
                    echo "<script type='text/javascript'> 
                          alert('record deleted');
                          var delay = 300; //Your delay in milliseconds
                       setTimeout(function(){ window.location = 'admin.php?page=client'; }, delay);
                       </script>";
                    }
                else
                   {
                  echo mysql_error();
                  }
            }
        else
           {
           echo "<script type='text/javascript'> 
                 alert('delete unsuccessful');
                 var delay = 300; //Your delay in milliseconds
                 setTimeout(function(){ window.location = 'admin.php?page=client'; }, delay);
                 </script>";
            }


  ?>