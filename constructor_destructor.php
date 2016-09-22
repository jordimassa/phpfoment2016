<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	class Prueba {
		public function __construct() {
			echo "Me creo<br>";
		}

		public function __destruct() {
			echo "Me destruyo<br>";	
		}

	}
	$p1=new Prueba();
	$p2=new Prueba();
	$p3=new Prueba();
	$p4=new Prueba();
	$p5=new Prueba();
	$p6=new Prueba();
?>
</body>
</html>