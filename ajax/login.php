<?php
	session_start();
	include "../config/config.php";

	$email = $_POST['f_email'];
	$pass = $_POST['f_pass'];
	$type = "user";

	$sql = "select * from user where user_email = '".$email."' && user_password = '".MD5($pass)."' && type = '".$type."' ";
	$result = mysqli_query($conn, $sql);
	
	if($result->num_rows == 1){
		$row = mysqli_fetch_array($result);
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['type'] = $row['type'];
		$_SESSION['name'] = $row['user_name'];
		echo 1;
		}
		else{
			echo 0;
		}
	
?>