<?php
class ModeloUno {
	var $propiedad;
	function a($parametro) {
		$this->propiedad=$parametro;
	}
}

class ModeloDos {
	var $propiedad_1;
	var $propiedad_2;
	var $resta;	
	function b ($param1,$param2) {
		$this->propiedad_1 =$param1;
		$this->propiedad_2=$param2;
		$this->resta=$param1-$param2;
	}
}
?>