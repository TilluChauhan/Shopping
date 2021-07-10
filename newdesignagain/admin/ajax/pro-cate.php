<?php
	include "../config/config.php";
	
	$name = $_POST['u_name'];		
	$date = date("yy-m-d");
	

	if($name != "" ){
		$sql = "insert into pro_category (pro_cate_id, pro_cate_name, status, created_date) values ('', '".$name."', 1, '".$date."')";
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