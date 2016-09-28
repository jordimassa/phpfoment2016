<?php
	require_once("Bizcochuelo.php");
	require_once("BizcochueloVainilla.php");	
	echo "Bizcochuelo:<br>";
	$biz= new Bizcochuelo();
	$biz->set_ingredientes();
	$biz->get_ingredientes();
	echo "Bizcochuelo Vainilla:<br>";	
	$biz= new BizcochueloVainilla();
	//$biz->set_ingredientes();
	$biz->get_ingredientes();	
?>