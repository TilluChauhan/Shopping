<?php 
	include '../config/config.php';
	
	$prodId = $_POST['prodId'];
	$userId = $_POST['userId'];
	$price = $_POST['price'];
	$address = $_POST['address'];
	$totalamount = (float)$price * (int)$qty;
	$date = date('yy-m-d');
	
	$sql = "insert into product_order (Order_Id, Product_Id, User_Id, Quantity, Price, Address, Total_Amount, Status, CreatedDate) values ('', '".$prodId."', '".$userId."', '', '".$price."', '".$address."', '".$totalamount."', 1, '".$date."')";
	
	$result = mysqli_query($conn, $sql);
	
?>