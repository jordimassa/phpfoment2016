<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $conn->prepare("UPDATE MyGuests SET firstname=:firstname, lastname=:lastname, email=:email WHERE ID=:id");
	$stmt->bindParam(':id', $id);

	$stmt->bindParam(':firstname', $firstname);
	$stmt->bindParam(':lastname', $lastname);
	$stmt->bindParam(':email', $email);

	$id = $_GET["id"];

	$firstname = $_GET["firstname"];
	$lastname = $_GET["lastname"];
	$email = $_GET["email"];

	$stmt->execute();

	echo $stmt->rowCount()." Record updated successfully";
}
catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn=null;

?> 
