<?php
	abstract class SeleccionFutbol {
		private $id;
		private $nombre;
		private $apellidos;
		private $edad;

	    public function __construct($id,$nom,$ape,$edad) {
	    	$this->id=$id;
	    	$this->nombre=$nom;	    	
	    	$this->apellido=$ape;	    		    	
	    	$this->edad=$edad;	    		    		    	
	    }

		public function viajar() {
			 echo ("Viajar (Clase Padre)<br>");
		}

		public function concentrarse() {
			echo ("Concentrarse (Clase Padre)<br>");
		}

		public abstract function entrenamiento();

		public function partidoFutbol() {
			echo ("Asiste al Partido de Fútbol (Clase Padre)<br>");
		}

		public function imprimir() {
			echo " : ".$this->id." ".$this->nombre." ".$this->apellido." ".$this->edad."<br>";
		}	
	}
?>