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

	$integrantes=array();

	$delBosque = new Entrenador(1, "Vicente", "Del Bosque", 60, 28489);
	$iniesta = new Futbolista(2, "Andrés", "Iniesta", 30, 8, "Centrocampista");
	$raulMartinez = new Masajista(3, "Raúl", "Martinez", 41, "Licenciado en Fisioterapia", 18);

	$integrantes[]=$delBosque;
	$integrantes[]=$iniesta;
	$integrantes[]=$raulMartinez;

	echo ("Todos los integrantes comienzan una concentracion. (Todos ejecutan el mismo método)<br>");

	for ($x=0;$x<count($integrantes);$x++) {
		$integrantes[$x]->imprimir()." ".$integrantes[$x]->concentrarse();
		$integrantes[$x]->viajar();
		echo "<hr>";
	}
?>
</body>
</html>