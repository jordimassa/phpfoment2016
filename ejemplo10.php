<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$t = 22;
$mensaje="Tienes ".$t." años y eres ";
if ($t < 18) {
    echo $mensaje." menor de edad";
}
else
{
	echo $mensaje." mayor de edad";
}
echo "<br>Se ve siempre";
?> 
</body>
</html>
