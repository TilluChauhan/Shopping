<?php
	session_start();	
	
	include '../config/config.php';	
	
	$email = $_POST['m_email'];
	$pass = $_POST['m_pass'];
		
	$sql = "select * from User where Email = '".$email."' && Password = '".MD5($pass)."' ";
	$result = mysqli_query($conn, $sql);
		
	if($result->num_rows == 1){
		$catch = mysqli_fetch_array($result);
		$_SESSION['user'] = $catch['UserId'];
		$_SESSION['name'] = $catch['Name'];	
		echo 1;	
	}else{
		echo 0;
	}
?>