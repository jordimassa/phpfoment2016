<!DOCTYPE html>
<html>
<body>

<?php
	echo "Con readfile:".readfile("passwords.txt");
	$contenido_fichero=file_get_contents("passwords.txt");

	/*$myfile = fopen("passwords.txt", "r") or die("Unable to open file!");
	$contenido_fichero=fread($myfile,filesize("passwords.txt"));
	fclose($myfile);*/

	$ausuarios=explode(":",$contenido_fichero);

	if ($_GET["user"]==$ausuarios[0] && $_GET["pass"]==$ausuarios[1]) {
		echo "<br>Correcto";
	}
	else
	{
		echo "<br>Incorrecto";
	}
?>

</body>
</html>