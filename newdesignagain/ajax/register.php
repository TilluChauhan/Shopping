<?php
	include "../config/config.php";

	$first_name = $_POST['f_first_name'];
	$last_name = $_POST['f_last_name'];
	$email = $_POST['f_email'];
	$pass = $_POST['f_pass'];
	$confirm_pass = $_POST['f_confirm_pass'];
	$date = date("yy-m-d");
	
	
	if($first_name != "" && $last_name !="" && $email != "" && $pass != "" && $confirm_pass != ""){
		$sql = "insert into register (register_id, first_name, last_name, email, password, confirm_password, status, created_date) values ('', '".$first_name."', '".$last_name."', '".$email."', '".MD5($pass)."', '".MD5($confirm_pass)."', 1, '".$date."')";
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