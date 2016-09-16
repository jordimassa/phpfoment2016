<?php 
 die("Hola");
	if(!file_exists("welcome.txt")) {
		die("File not found");
	} 
	else {
		$file=fopen("welcome.txt","r");
	};
?> 