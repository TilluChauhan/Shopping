<?php
	include "../config/config.php";
	
	$name = $_POST['u_name'];	
	$id = $_POST['id'];
	$quantity = $_POST['u_quantity'];
	$size = $_POST['u_size'];
	$color = $_POST['u_color'];
	$squa = $_POST['u_squa'];
	$price = $_POST['u_price'];
	$desc = $_POST['u_desc'];
	$date = date("yy-m-d");
	
	
		$sql = "UPDATE proadd SET  proadd_name = '".$name."' ,   proadd_quantity = '".$quantity."' , proadd_size = '".$size."' , proadd_color = '".$color."', proadd_squa = '".$squa."', proadd_price = '".$price."', proadd_desc = '".$desc."'  WHERE proadd_id ='".$id."'";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo 1;
		}
		else{
			echo 2;
		}

?>