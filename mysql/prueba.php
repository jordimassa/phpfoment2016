<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn) {
	die("Connection error");
}
echo "Connected successfully";	
?>