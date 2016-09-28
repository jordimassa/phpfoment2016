<?php

	$template = file_get_contents('template.tpl');

	$diccionario = array(
 		'Título de la Página'=>'POO y MVC en Symfony',
 		'keywords'=>'poo, mvc, php, arquitectura de software',
 		'description'=>'El paradigma de la programación orientada a objetos con el patrón arquitectónico MVC en PHP' 		
	);

	foreach ($diccionario as $clave=>$valor) {
		$template = str_replace('{'.$clave.'}', $valor, $template);
	}

	print $template;
?>