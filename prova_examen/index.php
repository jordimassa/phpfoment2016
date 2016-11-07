<!DOCTYPE html>
<html>
<title>Examen Final Prova Practica Modul 2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>
	<div class="w3-card-4">

	<div class="w3-container w3-brown">
	  <h2>Registre d'empleats</h2>
	</div>
	<form class="w3-container" method="POST" action="<?=$_SERVER["PHP_SELF"]?>">

	<p>
	<label class="w3-label w3-text-brown"><b>Nom</b></label>
	<input class="w3-input w3-border w3-sand" name="nom" type="text"></p>

	<p>
	<label class="w3-label w3-text-brown"><b>Cognom</b></label>
	<input class="w3-input w3-border w3-sand" name="cognom" type="text"></p>
	<p>

	<p>
	<label class="w3-label w3-text-brown"><b>Data Naix.</b><i> (format: 2016-07-17)</i></label>
	<input class="w3-input w3-border w3-sand" name="datanaix" type="text"></p>
	
	<p><button class="w3-btn w3-brown">Enregistrar</button></p>

	</form>
</div>
	
<div class="w3-container w3-responsive">
<table class="w3-table w3-bordered w3-striped w3-large">
	<tr>
	  <th>Id</th>
	  <th>Nom</th>
	  <th>Cognoms</th>
	  <th>Data Naix.</th>
	</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
	$conn = new PDO("mysql:host=$servername;dbname=db_usuarios", $username, $password,array (PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES utf8"));
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST["nom"]!="") {
			echo "Se ha creado un nuevo registro";
			$sqltxt="INSERT INTO T_USUARIOS (user_nom,user_apellidos,user_born_city,user_born_date) values ('".$_POST["nom"]."','".$_POST["cognom"]."','BCN','".$_POST["datanaix"]."')";
			
			$stmt = $conn->prepare($sqltxt);
			$stmt->execute();
		}
		header('location:'.$_SERVER['PHP_SELF']);
	}

	$stmt = $conn->prepare("SELECT * FROM T_USUARIOS");
	$stmt->execute();

	//echo $sqltxt;
	

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
			echo "<td>".$row["USER_ID"]."</td>";				
			echo "<td>".$row["USER_NOM"]."</td>";
			echo "<td>".$row["USER_APELLIDOS"]."</td>";
			echo "<td>".$row["USER_BORN_DATE"]."</td>";
		echo "<tr>";		
	}

}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}
$_POST = array();
?> 
</table>
</div>
</body>
</html>