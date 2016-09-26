<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	require ("Entrenador.php");
	require ("Futbolista.php");
	require ("Masajista.php");

	class Main {

		private $integrantes=array();

		public function addIntegrante($integrante) {
			$this->integrantes[]=$integrante;
		}

		public function concentracion() {
			echo ("Todos los integrantes comienzan una concentracion. (Todos ejecutan el mismo método)<br>");

			for ($x=0;$x<count($this->integrantes);$x++) {
				$this->integrantes[$x]->imprimir()." ".$this->integrantes[$x]->concentrarse();
				$this->integrantes[$x]->viajar();
				echo "<hr>";
			}
		}
	}
?>
</body>
</html>