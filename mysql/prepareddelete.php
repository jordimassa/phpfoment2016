<?php
include "/vendor/autoload.php"
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $conn->prepare("DELETE FROM MyGuests WHERE ID=:id");
	$stmt->bindParam(':id', $id);

	$id = $_GET["id"];

	$stmt->execute();

	echo "Record deleted successfully";
}
catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn=null;

?>