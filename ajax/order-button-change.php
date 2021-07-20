<?php
	include "../config/config.php";

	
	$id = $_POST['u_id'];
	$status = $_POST['u_status'];
	

		$sql = "UPDATE product_order SET Status = '".$status."' WHERE order_id ='".$id."'";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo 1;
		}
		else{
			echo 2;
		}


?>