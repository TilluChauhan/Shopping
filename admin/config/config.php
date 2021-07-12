<?php	
$database = 'first_admin';
$pass = '';
$user = 'root';
$servername = 'localhost';

$conn =  mysqli_connect($servername, $user, $pass,  $database);

if (!$conn){
	echo 'connection error!';
}

?>