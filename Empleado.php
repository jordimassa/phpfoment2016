<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
	protected $nombre;
	protected $edad;
	
	public function cargar($nom,$age) {
		$this->nombre=$nom;
		$this->edad=$age;		
	}		

	public function imprimir() {
		echo $this->nombre." ".$this->edad." ";		
	}		
}

class Empleado extends Persona {
	private $sueldo;

	public function cargar_empleado($nom,$age,$sue) {
		$this->nombre=$nom;
		$this->edad=$age;				
		$this->sueldo=$sue;
	}

	public function imprimir() {
		echo parent::imprimir()." ".$this->sueldo;
	}		

}
$pers1=new Persona();
$pers1->cargar("Jordi",51);
$pers1->imprimir();
echo "<br>";

$emp1=new Empleado();
$emp1->cargar_empleado("Juan",33,10000);
$emp1->imprimir();
?>
</body>
</html>