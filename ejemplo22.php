<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
</html>
Nº de semana <?=date("W")?> del año <?=date("Y")?><hr>
Fecha rara <?=date("d-m-Y",mktime(0,0,0,13,55,1975));?><hr>
Fecha dentro de 20 días <?=date("l d-m-Y",strtotime("+20 Days"));?><hr>
<?php
	$d1=strtotime("July 04");
	$d2=ceil(($d1-time())/60/60/24/30);
	echo "There are " . $d2 ." days until 4th of July.";

// Barcelona:

echo("Barcelona, Catalonia: Date: " . date("D M d Y"));
echo("<br>Sunrise time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,41.3774,2.170421,90,2));
echo("<br>Sunset time: ");
echo(date_sunset(time(),SUNFUNCS_RET_STRING,41.3774,2.170421,90,2));
echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
?>
