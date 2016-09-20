<?php 
class Celda
{
	private $texto;
	private $colorFuente;
	private $colorFondo;

	public function __construct($txt,$tcol,$bcol) {
		$this->texto=$txt;
		$this->colorFuente=$tcol;
		$this->colorFondo=$bcol;		
	}

	public function graficar() {
		echo '<td style="color:'.$this->colorFuente.'; background-color:'.$this->colorFondo.'">'.$this->texto.'</td>';
	}
}