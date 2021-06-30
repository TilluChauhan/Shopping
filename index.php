<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:login.php");
	}
?>

<html>
<head>
<title>welcome</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/all.min.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	if($_SESSION['user']){
		echo "hello ".$_SESSION['user'];
	}
?>

<section>
	
	<div class="two-btn for-login">
				<a href="logout.php">Logout</a>
			</div>
</section>
</body>
</html>