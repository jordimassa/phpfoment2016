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
	<form class="w3-container" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<input type="hidden" name="wMensaje" value="">

	<p>
	<label class="w3-label w3-text-brown"><b>Nom</b></label>
	<input class="w3-input w3-border w3-sand" name="nom" type="text"></p>
	<p>
	<label class="w3-label w3-text-brown"><b>Cognom</b></label>
	<input class="w3-input w3-border w3-sand" name="cognom" type="text"></p>
	<p>
	<label class="w3-label w3-text-brown"><b>Data Naix.</b><i> (format: 2016-07-17)</i></label>
	<input class="w3-input w3-border w3-sand" name="datanaix" type="text"></p>
	<p><button class="w3-btn w3-brown">Enregistrar</button></p>
	<?php if (trim($_REQUEST['wMensaje']!="")) : ?>
		<div class="w3-container w3-orange">
			<p><?=$_REQUEST['wMensaje']?></p>
		</div>
		<p>
	<?php endif ?>
	</form>
</div>

<div class="w3-container w3-responsive">
<table class="w3-table w3-bordered w3-striped w3-large">
	<tr>
	  <th>Id</th>
	  <th>Nom</th>
	  <th>Cognoms</th>
	  <th>Data Naix.</th>
	  <th></th>
	</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
	$conn = new PDO("mysql:host=$servername;dbname=db_empl", $username, $password,array (PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES utf8"));
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$nom = $cognom = $datanaix = "";
	$nomErr = $cognomErr = $datanaixErr = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST["nom"]!="") {

			$sqltxt="INSERT INTO empleats (nom,cognom,data_naixement) values (:nom, :cognom, :datanaix)";
			$stmt = $conn->prepare($sqltxt);

			$stmt->bindParam(':nom', $nom);
			$stmt->bindParam(':cognom', $cognom);
			$stmt->bindParam(':datanaix', $datanaix);

			if (empty($_POST["nom"])) { 
				$nom = "Nom es requerit";
			} 
			else 
			{
				$nom = test_input($_POST["nom"]);
			}
			if (empty($_POST["cognom"])) {
				$cognomErr = "Cognom es requerit";
			}
			else 
			{
				$cognom = test_input($_POST["cognom"]);
			}
			if (empty($_POST["datanaix"])) {
				$datanaixErr = "Data naixament es requerida";
			}
			else
			{
				$datanaix = test_input($_POST["datanaix"]);
			}

			if (trim($nomErr.$cognomErr.$datanaixErr)=="") {
				$stmt->execute();
				$mensaje="Registre Gravat";
				echo "<script>alert('Hola')</script>";
			}
			else
			{
				$mensaje="Datos requerides: ".$nomErr." ".$cognomErr." ".$datanaixErr;
			}
		}
		//POSSAT PER EVITAR F5, EN COMPLICA LA VIDA PER PASSAR VALORS DE RETORN
		header('location:'.$_SERVER['PHP_SELF']."?wMensaje=".$mensaje);
	}

	$stmt = $conn->prepare("SELECT * FROM empleats");
	$stmt->execute();

	//echo $sqltxt;
	

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
		<tr>
			<td><?=$row["ID"];?></td>				
			<td><?=$row["NOM"];?></td>
			<td><?=$row["COGNOM"];?></td>
			<td><?=$row["DATA_NAIXEMENT"];?></td>
			<td><a href='<?=$_SERVER["PHP_SELF"]."?id=".$row["USER_ID"];?>&waction=DELETE'>Borrar</a></td>			
		<tr>		
	<?php endwhile;

}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}
//FUNCIO SANITIZADORA
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?> 
</table>
</div>
</body>
</html>