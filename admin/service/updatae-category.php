<?php
	include '../config/config.php';

	$name = $_POST['UP_name'];
	$Id = $_POST['UP_ID'];
	
	
	$sql ="UPDATE Product_Category SET Name = '".$name."' WHERE P_CatId = '".$Id."' ";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>