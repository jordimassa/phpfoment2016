<?php

	require_once("../bahit/75-usuarios_model-2.php");

	$template = file_get_contents('template.tpl');

	$usuario = new Usuario();
	$usuario->get($_GET["usuario"]);
	$diccionario=$usuario->getRows();

	//print_r($diccionario);

	/*$diccionario = array(
 		'Título de la Página'=>'POO y MVC en Symfony',
 		'keywords'=>'poo, mvc, php, arquitectura de software',
 		'description'=>'El paradigma de la programación orientada a objetos con el patrón arquitectónico MVC en PHP' 		
	);*/

	foreach ($diccionario[0] as $clave=>$valor) {
		$template = str_replace('{'.$clave.'}', $valor, $template);
	}

	print $template;
?>