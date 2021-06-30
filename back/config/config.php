<?php	
$database = 'project';
$pass = '';
$user = 'root';
$servername = 'localhost';

$conn =  mysqli_connect($servername, $user, $pass,  $database);

if (!$conn){
	echo 'connection error!';
}

?>