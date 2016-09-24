<?php
require_once ("seleccionFutbol.php");

class Entrenador extends seleccionFutbol {
	private $idFederacion;

	public function __construct($id,$nom,$ape,$edad,$idFed) {
		parent::__construct($id,$nom,$ape,$edad);
		$this->idFederacion=$idFed;		
	}

	public function planificarEntrenamiento() {
		echo "Planifica entrenamiento<br>";
	}

	public function entrenamiento() {
		echo "Da un entrenamiento (entrenador)<br>";
	}

	public function partidoFutbol() {
      echo ("Dirige en un Partido (Entrenador)<br>");
    }

    public function imprimir() {
    	echo "Soy un entrenador<br>";
		echo parent::imprimir();
    	echo "Id federacion: ".$this->idFederacion."<br>";
    }
}
?>