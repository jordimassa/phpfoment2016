<?php
	abstract class SeleccionFutbol {
		private $id;
		private $nombre;
		private $apellidos;
		private $edad;

	    public function __contruct($id,$nom,$ape,$edad) {
	    	$this->id=$id;
	    	$this->nom=$nom;	    	
	    	$this->$ape=$ape;	    		    	
	    	$this->$edad=$edad;	    		    		    	
	    }

		public function viajar() {
			 echo ("Viajar (Clase Padre)");
		}

		public function concentrarse() {
			echo ("Concentrarse (Clase Padre)");
		}

		public abstract function entrenamiento();

		public function partidoFutbol() {
			echo ("Asiste al Partido de Fútbol (Clase Padre)");
		}
	}
?>