<?php 
	include '../config/config.php';
	
	$prodId = $_POST['prodId'];
	$userId = $_POST['userId'];
	$qty = $_POST['quantity'];
	$price = $_POST['price'];
	$totalamount = (float)$price * (int)$qty;
	$date = date('yy-m-d');
	
	$sql = "insert into product_order (Order_Id, Product_Id, User_Id, Quantity, Price, Address, Total_Amount, Status, CreatedDate) values ('', '".$prodId."', '".$userId."', '".$qty."', '".$price."', '', '".$totalamount."', 1, '".$date."')";
	
	$result = mysqli_query($conn, $sql);
	
	if($result){
		echo 1;
	} else {
		echo 0;
	}
?>