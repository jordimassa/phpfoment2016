<?php
	require ("seleccionFutbol.php");
	require ("Futbolista.php");
	require ("Entrenador.php");
	require ("Masajista.php");
	//require ("main.php");

	$delBosque = new Entrenador(1, "Vicente", "Del Bosque", 60, 28489);
	$delBosque->printar();	
	$delBosque->partidoFutbol();

	$iniesta = new Futbolista(2, "Andrés", "Iniesta", 8, "Centrocampista");
	$iniesta->printar();
	$iniesta->partidoFutbol();

	$raulMartinez = new Masajista(3, "Raúl", "Martinez", 41, "Licenciado en Fisioterapia", 18);
		$delBosque->printar();	
	$raulMartinez->partidoFutbol();

?>