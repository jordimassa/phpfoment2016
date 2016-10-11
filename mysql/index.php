<?php
$servername = "localhost";
$username = "root";
$password = "";

/*$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
	die("Connection error");
}
echo "Connected successfully";*/

try {
	$conn = new PDO("mysql:host=$servername;dbname=myDBPDO", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
	//$sql = "CREATE DATABASE myDBPDO";
	// use exec() because no results are returned
	/*$sql = "CREATE TABLE MyGuests (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50),
			reg_date TIMESTAMP
			)";*/

	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('Mark', 'Spitz', 'john@example.com')";

	$conn->exec($sql);
	$last_id = $conn->lastInsertId();
	echo "New record created successfully. Last inserted ID is: " . $last_id;

	//echo "Exito<br>";
}
catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}
$conn = null; 
?>