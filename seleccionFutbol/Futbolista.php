<?php
class Futbolista extends seleccionFutbol {
	private $dorsal;
	private $demarcacion;

	public function __contruct($id,$nom,$ape,$edad,$dor,$dem) {
		parent::__contruct($id,$nom,$ape,$edad);
		$this->dorsal=$dor;
		$this->demarcacion=$dem;
	}

	public function entrevista() {
		echo "Da una entrevista<br>";
	}

	public function entrenamiento() {
		echo "Entrena (futbolista)<br>";
	}

	public function partidoFutbol() {
      	echo ("Juega un Partido (Futbolista)<br>");
    }

    public function printar() {
    	echo $this->id." ".$this->nombre." ".$this->apellido." ".$this->dorsal."<br>";
    }
}
?>