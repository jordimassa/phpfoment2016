<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
$countlinea=0;
while(!feof($myfile)) {
	$countlinea++;
	$linea=fgets($myfile);
	echo $countlinea." ".$linea." ".str_word_count(trim($linea,"\r\n"))." ".strlen(trim($linea,"\r\n"))."<br>";
	echo strrev($linea)."<br>"; 
	//buscar contenido con inclusión de la variable dentro!! 
	//if (strpos($linea=fgets($myfile), "Vector")) {
		//echo "Linea con la palabra Vector:<br> $countlinea ".$linea;
	//}		
}
fclose($myfile);
?> 
