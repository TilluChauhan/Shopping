<?php
	include "../config/config.php";
	session_start();
	$email = $_POST['f_email'];
	$pass = $_POST['f_pass'];
	
	if($email != "" && $pass != ""){
		$sql = "select * from register where email = '".$email."' AND password = '".MD5($pass)."'";
		$query = mysqli_query($conn, $sql);
		//$result = mysqli_num_rows($query);
		$row = mysqli_fetch_array($query);
		//print_r($row);
		$length = count($row);
		if($length > 0){
			//print_r($row);
			$_SESSION["user"] = $row['first_name']." ".$row['last_name'];
			echo 1;
		}else{
			echo 2;
		}
	}
	else{
		echo 0;
	}
?>