<?php
	include "../config/config.php";

	
	$id = $_POST['f_id'];
	$status = $_POST['f_status'];
	

		$sql = "UPDATE proadd SET T_Flag = '".$status."' WHERE proadd_id ='".$id."'";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo 1;
		}
		else{
			echo 2;
		}


?>