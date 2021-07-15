<?php
	include '../config/config.php';
	$id=$_POST['T_id'];
	$title=$_POST['T_title'];
	$description=$_POST['T_description'];
	$status=$_POST['T_status'];
	$url=$_POST['T_url'];
	$date=date('yy-m-d');
	 
	 
	
	$sql="UPDATE sldie SET title='".$title."', description='".$description."', status='".$status."', url='".$url."' WHERE id='".$id."' ";
	
	$upresult=mysqli_query($conn, $sql);
	if($upresult){
		echo 1;
	}else{
		echo 0;
	}


?>