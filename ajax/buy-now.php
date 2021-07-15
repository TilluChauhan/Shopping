<?php
	include '../config/config.php';
		
	$productid = $_POST['O_Pid'];
	$userid = $_POST['O_Uid'];
	$quantity = $_POST['O_quantity'];
	$price = $_POST['O_price'];
	$phone = $_POST['O_phone'];
	$address = $_POST['O_address'];
	$amount = $_POST['O_amount'];
	$status = 1;
	$date = date('yy-m-d');


	$sql = "Insert into product_order (Order_Id, Product_Id, User_Id, Quantity, Price, Phone, Address, Total_Amount, Status, CreatedDate) values('', '".$productid."', '".$userid."', '".$quantity."', '".$price."', '".$phone."', '".$address."', '".$amount."', '".$status."', '".$date."')";  
	$result = mysqli_query($conn, $sql);
	
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	
?>