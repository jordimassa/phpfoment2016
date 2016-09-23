<?php
	class Bombilla implements Encendible {
		public function encender() {
			echo "Estoy encendida...";
		}

		public function apagar() {
			echo "Estoy apagada...";			
		}
	}
?>