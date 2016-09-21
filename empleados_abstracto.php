<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
	abstract class Trabajador {
		protected $nombre;
		protected $sueldo;
		
		public function __construct($nom) {
			$this->nombre=$nom;
		}

		public function imprimir() {
			echo $this->nombre." Cobra:". $this->sueldo."<br>";
		}

  		public abstract function calcularSueldo();
	}

	class Empleado extends Trabajador {
		private $horasTrabajadas;
		private $valorHora;

		public function __construct($nom,$horas,$valH) {
			parent::__construct($nom);
			$this->horasTrabajadas=$horas;			
			$this->valorHora=$valH;			
		}		

		public function calcularSueldo() {
			$this->sueldo=$this->horasTrabajadas*$this->valorHora;
			parent::imprimir();			
		}		
	}

	class Gerente extends Trabajador {
		private $utilidades;

		public function __construct($nom,$util) {
			parent::__construct($nom);
			$this->utilidades=$util;						
		}		

		public function calcularSueldo() {
			$this->sueldo=$this->utilidades*0.10;
			parent::imprimir();
		}		
	}

	$emp1=new Empleado("Juan",160,4.5);
	$emp1->calcularSueldo();

	$ger1=new Gerente("Pedro",100000);
	$ger1->calcularSueldo();

?>
</body>
</html>