<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
	class Cuadrado {
		protected $lado;

		/*public function __construct($lad)
		{
			$this->lado=$lad;			
		}*/

		public function setLado($lad) {
			$this->lado=$lad;			
		}
		public function perimetro() {

			return $this->lado*4;
		}

		public function superficie() {
			return pow($this->lado,2);
		}
	}

	$cuad1=new Cuadrado();
	$cuad1->setLado(5);
	echo "Objeto inicial:<br>";
	echo "Perimetro (cuad1) : ".$cuad1->perimetro()."<br>";
	echo "Superficie (cuad1) : ".$cuad1->superficie()."<br>";	
	$cuadIgualado=$cuad1;
	echo "Objeto referenciado:<br>";	
	echo "Perimetro (cuadIgualado) : ".$cuadIgualado->perimetro()."<br>";
	echo "Superficie (cuadIgualado) : ".$cuadIgualado->superficie()."<br>";		
	$cuad1->setLado(8);
	echo "<hr>";
	echo "Modificamos el valor del lado en cuad1 y se modifica también en cuadIgualado:<br>";	
	echo "Perimetro (cuad1) : ".$cuad1->perimetro()."<br>";
	echo "Superficie (cuad1) : ".$cuad1->superficie()."<br>";	
	echo "Perimetro (cuadIgualado) : ".$cuadIgualado->perimetro()."<br>";
	echo "Superficie (cuadIgualado) : ".$cuadIgualado->superficie()."<br>";		
	echo "<hr>";
	$cuad2=clone($cuad1);
	$cuad2->setLado(10);
	echo "Clonamos y modificamos cuad2, eso no afecta a cuad1:<br>";
	echo "Perimetro (cuad1) : ".$cuad1->perimetro()."<br>";
	echo "Superficie (cuad1) : ".$cuad1->superficie()."<br>";	
	echo "Perimetro (cuad2) : ".$cuad2->perimetro()."<br>";
	echo "Superficie (cuad2) : ".$cuad2->superficie()."<br>";			
?>
</body>
</html>