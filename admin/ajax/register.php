<?php
	include "../config/config.php";

	$file = $_FILES['file'];
	$name = $_POST['u_name'];		
	$mobile = $_POST['u_mobile'];
	$email = $_POST['u_email'];
	$pass = $_POST['u_pass'];
	$type = "admin";
	$date = date("yy-m-d");
	
	$round = rand(1000, 9999);
	$fileType = $file['type'];
	$fileType = substr($fileType, 6);
	$filename = 'pro'.$round.'.'.$fileType;
	move_uploaded_file($file['tmp_name'], '../asset/profilepic/'.$filename);
	
	if($name != "" && $email != "" &&  $pass !=""){
		$sql = "insert into user (user_id, user_name, type, user_email, user_password, user_mobile, user_pic, status, created_date) values ('', '".$name."', '".$type."', '".$email."', '".MD5($pass)."', '".$mobile."', '".$filename."', 1, '".$date."')";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo 1;
		}
		else{
			echo 2;
		}
	}
	else{
		echo 0;
	}

?>