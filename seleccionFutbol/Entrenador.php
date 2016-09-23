<?php
class Entrenador extends seleccionFutbol {
	private $idFederacion;

	public function __contruct($id,$nom,$ape,$edad,$dor,$dem) {
		parent::__contruct($id,$nom,$ape,$edad);
		$this->dorsal=$dor;
		$this->demarcacion=$dem;
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

    public function printar() {
    	echo $this->id." ".$this->nombre." ".$this->apellido;
    }
}
?>