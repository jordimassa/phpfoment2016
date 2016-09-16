<?php
	$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
	$contenido=fread($myfile,filesize("webdictionary.txt"));
	echo substr($contenido,0, 4); 
	//equivalentes las dos lineas anteriores
	$contenido=fread($myfile,4);
	echo "<br>".$contenido;
	fclose($myfile);
?>