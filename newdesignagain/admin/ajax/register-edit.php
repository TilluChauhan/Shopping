<?php
	include '../config/config.php';

	$name = $_POST['u_name'];
	$mobile = $_POST['u_mobile'];
	$email = $_POST['u_email'];
	$pass = $_POST['u_pass'];

	$sql = "UPDATE user SET user_name = '".$name."', user_mobile = '".$mobile."', user_email = '".$email."', user_password = '".$pass."' ,WHERE userId = '".$id."' ";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		echo 1;		
	}else{
		echo 'connection error';
	}

?>