<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>

<div class="w3-card-4">

<header class="w3-container w3-blue">
  <h1>Persona</h1>
</header>


<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $vnombre = test_input($_POST["nombre"]);
  $vapellido = test_input($_POST["apellido"]);
  $vgenero = test_input($_POST["genero"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}?>

<div class="w3-container">
  <p>Nombre: <?=$vnombre?></p>
  <p>Apellido: <?=$vapellido?></p>
  <p>Género: <?=$vgenero?></p>
</div>

<footer class="w3-container w3-blue">
  <h5>Persona</h5>
</footer>

</div>


</body>
</html>