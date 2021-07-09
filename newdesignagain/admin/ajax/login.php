<?php
	session_start();
	include "../config/config.php";

	$email = $_POST['f_email'];
	$pass = $_POST['f_pass'];

	$sql = "select * from user where user_email = '".$email."' && user_password = '".MD5($pass)."' ";
	$result = mysqli_query($conn, $sql);
	
	if($result->num_rows == 1){
		$row = mysqli_fetch_array($result);
		$_SESSION['user'] = $row['user_id'];
		$_SESSION['name'] = $row['user_name'];
		echo 1;
		}
		else{
			echo 0;
		}
	
?>