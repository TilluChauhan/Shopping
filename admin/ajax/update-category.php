
<?php
	include '../config/config.php';

	$name = $_POST['UP_name'];
	$Id = $_POST['UP_ID'];
	
	
	$sql ="UPDATE pro_category SET pro_cate_name = '".$name."' WHERE pro_cate_id = '".$Id."' ";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>