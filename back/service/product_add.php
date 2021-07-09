<?php
	
	include '../config/config.php';
	
	$photo = $_FILES['e_image'];		
	$random = rand(10, 487);
	$my = 'photo'.$random.'.png';		
	$com = move_uploaded_file($photo['tmp_name'], '../images/upload_a/'.$my);
	
	$pic = $_FILES['f_image'];		
	$rad = rand(10, 487);
	$genUrl = 'pic'.$rad.'.png';		
	$til = move_uploaded_file($pic['tmp_name'], '../images/upload_b/'.$genUrl);
	
	$garlley = $_FILES['g_image'];		
	$ran = rand(10, 487);
	$you = 'garlley'.$ran.'.png';	
	$defUrl = move_uploaded_file($garlley['tmp_name'], '../images/upload_c/'.$you);
	
	$name = $_POST['P_name'];
	$select =$_POST['P_category'];
	$price = $_POST['P_price'];
	$sqa= $_POST['P_sqa'];
	$quantity = $_POST['P_quantity'];
	$size = $_POST['p_size'];
	$color = $_POST['P_color'];
	$x_image = $my;
	$y_image = $genUrl;
	$z_image = $you;
	$dect = $_POST['p_description'];
	$cate = $_POST['p_ctery'];
	$status = 1;
	$date = date('yy-m-d');

	
	$sql = " insert into product_list (Product_ID, Ctery_Id, Name, Price, SQA_Number, Quantity, Size, Color, Front_image, Side_image, Back_image, Description, Status, CreatedDate) values ('', '".$select."', '".$name."',  '".$price."', '".$sqa."', '".$quantity."', '".$size."', '".$color."', '".$x_image."', '".$y_image."', '".$z_image."', '".$dect."', '".$status."', '".$date."' )";			
	$result = mysqli_query($conn, $sql);
		if($result){
			echo 1;
		}else{

			echo 0;
		}
?>