<?php
	include '../config/config.php';
	
	$photo = $_FILES['l_pic'];
	$random = rand(15, 487);
	$creatUrl = 'photo'.$random.'.png';	
	$com = move_uploaded_file($photo['tmp_name'], '../images/get/'.$creatUrl);
	
	
	$name = $_POST['l_name'];
	$email = $_POST['l_email'];
	$pswrd = $_POST['l_pass'];
	$mobile = $_POST['l_mobile'];
	$photo = $creatUrl;
	$status = 1;
	$date = date('yy-m-d');
	
	$sql = "insert into user (UserID, Name, Email, Password, Mobile, Photo, Status, CreatedDate) values ('', '".$name."', '".$email."', MD5('".$pswrd."'), '".$mobile."', '".$photo."', '".$status."', '".$date."' )";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	
?>
