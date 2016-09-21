<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
	abstract class Persona {
		protected $nombre;
		protected $edad;
		
		public function __construct($nom,$age) {
			$this->nombre=$nom;
			$this->edad=$age;		
		}

		public function imprimir() {
			echo $this->nombre." ".$this->edad." ";		
		}		
	}

	class Empleado extends Persona {
		private $sueldo;

		public function __construct($nom,$age,$sue) {
			parent::__construct($nom,$age);
			$this->sueldo=$sue;
		}		


		public function imprimir() {
			echo parent::imprimir()." ".$this->sueldo;
		}		
	}
	/*$pers1=new Persona();
	$pers1->cargar("Jordi",51);
	$pers1->imprimir();
	echo "<br>";*/
	$emp1=new Empleado("Juan",33,10000);
	$emp1->imprimir();

	
	$pers1=new Persona("Juan",33);
	$pers1->imprimir();

?>
</body>
</html>