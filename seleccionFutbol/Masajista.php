<?php
require_once ("seleccionFutbol.php");

class Masajista extends seleccionFutbol {
	private $titulacion;
	private $aniosExperiencia;


	public function __construct($id,$nom,$ape,$edad,$tit,$ani) {
		parent::__construct($id,$nom,$ape,$edad);
		$this->titulacion=$tit;
		$this->aniosExperiencia=$ani;
	}

	public function darMasaje() {
		echo "Da un masaje<br>";
	}

	public function entrenamiento() {
		echo "Asiste en un entrenamiento (masajista)<br>";
	}

	public function partidoFutbol() {
      echo ("Asiste en un Partido (Masajista)<br>");
   }

    public function imprimir() {
    	parent::imprimir();
    	echo $this->titulacion." ".$this->aniosExperiencia."<br>";
    }

}
?>