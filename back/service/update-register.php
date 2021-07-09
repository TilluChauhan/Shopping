<?php
	//$photo = $_FILES['U_photo'];
	include '../config/config.php';
	
	
	
	$Id = $_POST['U_userId'];
	$name = $_POST['U_name'];
	$email = $_POST['U_email'];
	$mobile = $_POST['U_mobile'];
	$pass = $_POST['U_pass'];
	$status = 1;
	$date = date('yy-m-d');
	
	$sql ="UPDATE user SET Name = '".$name."', Email = '".$email."', Mobile = '".$mobile."', Password = '".MD5($pass)."', Status = '".$status."', CreatedDate = '".$date."' WHERE UserId = '".$Id."' ";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>	