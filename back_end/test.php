<?php 
	
	$mode = 'cbc';
	$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
	$key_size = strlen($key);
	echo "key size:". $key_size . "\n";
	$plaintext = '123'


	string mcrypt_encrypt(string $cipher, string $key, string $data, string $mode[, string $iv])


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
            </div>
            <div class='modal-footer'>
                  <a href='#!' class='modal-close waves-effect'><button class='btn' type='submit'>Cancel</button></a>
                  <a  class='modal-close'  href=''><button class='btn red lighten-1' >Update</button></a>
            </div>
</body>
</html>