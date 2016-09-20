<html>
<head>
<meta http-equiv="refresh" content="1">
<title>Pruebas</title>
</head>
<body>
<?php  
require ("Celda.php");

class Tabla {
	private $mat=array();
	private $cantFilas;
	
	private $cantColumnas;

   	public function getCantFilas() {
	    return $this->cantFilas;   
	}

	public function getCantColumnas() {
		return $this->cantColumnas;   
	}

	public function __construct($fi,$co)
	{
	    $this->cantFilas=$fi;
	    $this->cantColumnas=$co;
	}

	public function cargar($fila,$columna,$valor,$tcol,$bcol)
  	{
  		$this->mat[$fila][$columna]=new Celda($valor,$tcol,$bcol);
  	}

	public function insertar($fila,$columna,$celda)
  	{
  		$this->mat[$fila][$columna]=$celda;
  	}


	private function inicioTabla()
	{
	    echo '<table border="1" style="border-collapse: collapse;"';
	}
	    
	private function inicioFila()
	{
	    echo '<tr>';
	}

	private function mostrar($fi,$co)
	{
		//echo $this->mat[$fi][$co].
	    echo $this->mat[$fi][$co]->graficar();
	}

	private function finFila()
	{
	    echo '</tr>';
	}

	private function finTabla()
	{
	    echo '</table>';
	}

	public function graficar()
	{
		$this->inicioTabla();
	    for($f=1;$f<=$this->cantFilas;$f++)
	    {
	      $this->inicioFila();
	      for($c=1;$c<=$this->cantColumnas;$c++)
	      {
	        $this->mostrar($f,$c);
	      }
	      $this->finFila();
	    }
	    $this->finTabla();
	}
}

$tabla1=new Tabla(22,33);
$valor_celda=0;
$arrColores=array("blue","yellow","green","orange","red","black","white");
for($f=1;$f<=$tabla1->getCantFilas();$f++) {
    for($c=1;$c<=$tabla1->getCantColumnas();$c++) {
        $valor_celda++;
        $colorTexto=$arrColores[rand(0, count($arrColores)-1)];
        do {
        	$colorFondo=$arrColores[rand(0, count($arrColores)-1)];        
        } while ($colorFondo==$colorTexto); 
        //$tabla1->cargar($f,$c,$valor_celda,$colorTexto,$colorFondo);      

        $tabla1->insertar($f,$c,new Celda($valor_celda,$colorTexto,$colorFondo));      
    }
}
$tabla1->graficar();

?>
</body>
</html>