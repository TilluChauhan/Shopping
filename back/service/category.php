<?php
	include '../config/config.php';
	
	$name = $_POST['C_name'];
	$status = 1;
	$date	= date('yy-m-d');	
	
	$sql = "Insert into product_category (P_CatId, Name, Status, CreatedDate) values ('', '".$name."', '".$status."', '".$date."' )"; 	
	$result = mysqli_query($conn, $sql);
		
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	
?>
