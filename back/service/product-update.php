<?php
	include '../config/config.php';

	$name = $_POST['UP_name'];
	$price = $_POST['UP_price'];
	$sqa = $_POST['UP_sqa'];
	$quantity = $_POST['UP_quant'];
	$size = $_POST['UP_size'];
	$color = $_POST['UP_color'];
	$description = $_POST['UP_des'];
	$ID = $_POST['UP_Id'];	
	$status = 1;
	$date = date('yy-m-d');

	$sql = "UPDATE product_list SET Name = '".$name."', Price = '".$price."', SQA_Number = '".$sqa."', Quantity = '".$quantity."', Size = '".$size."', Color = '".$color."', Description = '".$description."', Status = '".$status."', CreatedDate = '".$date."' WHERE Product_ID = '".$ID."' ";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		echo 1;		
	}else{
		echo 'connection error';
	}

?>