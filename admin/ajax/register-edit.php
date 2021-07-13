<?php
	include "../config/config.php";
	
	$name = $_POST['u_name'];	
	$id = $_POST['id'];
	$mobile = $_POST['u_mobile'];
	$email = $_POST['u_email'];
	$pass = $_POST['u_pass'];
	$date = date("yy-m-d");
	
	
		$sql = "UPDATE user SET  user_name = '".$name."' ,   user_email = '".$email."' , user_password = '".$pass."' , user_mobile = '".$mobile."'  WHERE user_id ='".$id."'";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo 1;
		}
		else{
			echo 2;
		}

?>