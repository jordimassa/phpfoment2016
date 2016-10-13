<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

/*$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
	die("Connection error");
}
echo "Connected successfully";*/


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);
	
if ($result->num_rows > 0) : ?>
	
	<div class="w3-container">
		<h2></h2>
		<table class="w3-table-all w3-hoverable"> 
		<thead>
			<tr>
				<th>Id</th>
		      	<th>First Name</th>
	    	  	<th>Last Name</th>
	      		<th>E-Mail</th>
	    	</tr>
	    </thead>
		<?php // output data of each row
		//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " " . $row["email"]. "<br>";
		while($row = $result->fetch_assoc()) :?>
			<tr><td><?=$row["id"]?></td>
			<td><?=$row["firstname"]?></td>
			<td><?=$row["lastname"]?></td>
			<td><?=$row["email"]?></td></tr>
		<?php endwhile;?>
		</table>
	</div>
<?php else :
	echo "0 results";
endif;

$conn->close();

die();




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

	/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('Mark', 'Spitz', 'john@example.com')";*/

	$conn->beginTransaction();

	$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
	VALUES (:firstname, :lastname, :email)");
	$stmt->bindParam(':firstname', $firstname);
	$stmt->bindParam(':lastname', $lastname);
	$stmt->bindParam(':email', $email);

	// insert a row
	$firstname = "Mark";
	$lastname = "Hamill";
	$email = "mhamill@example.com";
	$stmt->execute();

	// insert another row
	$firstname = "Carrie";
	$lastname = "Fisher";
	$email = "cfisher@example.com";
	$stmt->execute();

	// insert another row
	$firstname2 = "Harrison";
	$lastname2 = "Ford";
	$email2 = "hford@example.com";
	$stmt->execute();

	//$conn->exec($sql);
	//$last_id = $conn->lastInsertId();
	//echo "New record created successfully. Last inserted ID is: " . $last_id;

	$conn->commit();
	echo "New records created successfully";
	//echo "Exito<br>";
}
catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}
$conn = null; 
?>
</body>
</html>