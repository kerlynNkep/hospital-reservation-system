<?php
	echo "<script type='text/javascript'>alert('hey u');</script>";
	$valid_extensions = array('jpeg','jpg','png', 'gif','bmp');//valid extensions

	$path = 'uploads/';//upload directory

	if(isset($_FILES['image'])){

			 $img = $_FILES['image']['name'];
			 $temp= $_FILES['image']['tmp_name'];
		//get upload file's extension
			 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
		//can upload same image using rand function
			 $final_image= rand(1000, 1000000).$img;
		
		//check valid format
			 if(in_array($ext, $valid_extensions)){
			 	$path = $path.strtolower($final_image);
			 		  if(move_uploaded_file($tmp, $path)){
			 		  	 echo "<img src='$path'/>";
			 		  }
			 }
			 else
			 	echo "invalid file";

	}
?>