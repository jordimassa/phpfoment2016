<?php

	require_once("interface_encendible.php");

	class Bombilla implements Encendible {
		public function encender() {
			echo "Estoy encendida...";
		}

		public function apagar() {
			echo "Estoy apagada...";			
		}
	}
?>