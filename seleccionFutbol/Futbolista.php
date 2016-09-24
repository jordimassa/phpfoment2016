<?php
require_once ("seleccionFutbol.php");

class Futbolista extends seleccionFutbol {
	private $dorsal;
	private $demarcacion;


	public function __construct($id,$nom,$ape,$edad,$dem,$dor) {
		parent::__construct($id,$nom,$ape,$edad);
		$this->dorsal=$dor;
		$this->demarcacion=$dem;
	}

	public function entrevista() {
		echo "Da una entrevista<br>";
	}

	public function entrenamiento() {
		echo "Entrena (jugador)<br>";
	}

	public function partidoFutbol() {
      echo ("Juega un Partido (Jugador)<br>");
   }

    public function imprimir() {
    	parent::imprimir();
    	echo $this->dorsal." ".$this->demarcacion."<br>";
    }

}
?>