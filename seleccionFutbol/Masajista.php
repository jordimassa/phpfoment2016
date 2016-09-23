<?php
class Masajista extends seleccionFutbol {
	private $titulacion;
	private $aniosExperiencia;


	public function __contruct($id,$nom,$ape,$edad,$tit,$ani) {
		parent::__contruct($id,$nom,$ape,$edad);
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

    public function printar() {
    	echo $this->id." ".$this->nombre." ".$this->apellido;
    }

}
?>