<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	require ("Entrenador.php");
	require ("Futbolista.php");
	require ("Masajista.php");
	//require ("main.php");

	$delBosque = new Entrenador(1, "Vicente", "Del Bosque", 60, 28489);
	$delBosque->imprimir();	
	$delBosque->partidoFutbol();

	$iniesta = new Futbolista(2, "Andrés", "Iniesta", 30, 8, "Centrocampista");
	$iniesta->imprimir();
	$iniesta->entrevista();
	$iniesta->partidoFutbol();

	$raulMartinez = new Masajista(3, "Raúl", "Martinez", 41, "Licenciado en Fisioterapia", 18);
	$raulMartinez->imprimir();	
	$raulMartinez->partidoFutbol();
?>
</body>
</html>
