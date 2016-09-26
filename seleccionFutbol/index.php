<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	require ("main.php");

	$main = new	Main();

	$delBosque = new Entrenador(1, "Vicente", "Del Bosque", 60, 28489);
	$main->addIntegrante($delBosque);

	$iniesta = new Futbolista(2, "Andrés", "Iniesta", 30, 8, "Centrocampista");
	$main->addIntegrante($iniesta);	

	$raulMartinez = new Masajista(3, "Raúl", "Martinez", 41, "Licenciado en Fisioterapia", 18);
	$main->addIntegrante($raulMartinez);

	$main->concentracion();
?>
</body>
</html>