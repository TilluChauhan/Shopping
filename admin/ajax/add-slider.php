<?php
	
	include '../config/config.php';
	
	$pic = $_FILES['W_image'];		
	$random = rand(10, 487);
	$mypic = 'pic'.$random.'.jpg';	
	
	$com = move_uploaded_file($pic['tmp_name'], '../images/slider/'.$mypic);
	$title=$_POST['W_title'];
	$impic= $mypic;
	$description=$_POST['W_description'];
	$status=$_POST['W_status'];;
	$url=$_POST['W_url'];
	$date= date('yy-m-d');
	
	//echo $title;
	//echo $description;
		//echo $status;
			//echo $url;
				//echo $date;
	
	$msql =" Insert into sldie (id, title, image, description, status, url, date) values ('', '".$title."', '".$impic."', '".$description."', '".$status."', '".$url."', '".$date."')";
	
	$result=mysqli_query($conn, $msql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	
	
	
?> 