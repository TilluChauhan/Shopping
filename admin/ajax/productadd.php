<?php
	include "../config/config.php";

	$file1 = $_FILES['file1'];
	$file2 = $_FILES['file2'];
	$file3 = $_FILES['file3'];
	$name = $_POST['u_name'];		
	$quantity = $_POST['u_quantity'];
	$size = $_POST['u_size'];
	$color = $_POST['u_color'];
	$squa = $_POST['u_squa'];
	$price = $_POST['u_price'];
	$category = $_POST['u_category'];
	$desc = $_POST['u_desc'];
	$date = date("yy-m-d");
	
	$round1 = rand(1000, 9999);
	$fileType1 = $file1['type'];
	$fileType1 = substr($fileType1, 6);
	$filename1 = 'pro front'.$round1.'.'.$fileType1;
	move_uploaded_file($file1['tmp_name'], '../asset/profront/'.$filename1);
	
	$round2 = rand(1000, 9999);
	$fileType2 = $file2['type'];
	$fileType2 = substr($fileType2, 6);
	$filename2 = 'pro side'.$round2.'.'.$fileType2;
	move_uploaded_file($file2['tmp_name'], '../asset/proside/'.$filename2);
	
	$round3 = rand(1000, 9999);
	$fileType3 = $file3['type'];
	$fileType3 = substr($fileType3, 6);
	$filename3 = 'pro back'.$round3.'.'.$fileType3;
	move_uploaded_file($file3['tmp_name'], '../asset/proback/'.$filename3);
	
	
	if($name != "" && $quantity != "" &&  $size !="" &&  $color !="" &&  $price !=""){
		$sql = "insert into proadd (proadd_id, proadd_name, pro_cate_id,  proadd_quantity, proadd_size, proadd_color, proadd_squa, proadd_price, proadd_desc, proadd_front_img, proadd_side_img, proadd_back_img, T_Flag,  status, created_date) values ('', '".$name."', '".$category."', '".$quantity."', '".$size."', '".$color."', '".$squa."', '".$price."', '".$desc."', '".$filename1."', '".$filename2."', '".$filename3."', 0, 1, '".$date."')";
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