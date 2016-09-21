<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

abstract class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;

  public function __construct($val1,$val2)
  {
    /*$this->valor1=$_GET["operando1"]; 
    $this->valor2=$_GET["operando2"];*/
    $this->valor1=$val1;
    $this->valor2=$val2;
    ECHO "SOY EL PADRE<br>";
  }

  public function imprimirResultado()
  {
    echo $this->valor1." + ".$this->valor2."=".$this->resultado.'<br>';
  }
}

class Suma extends Operacion{
  private $titulo;

  public function __construct($tit,$val1,$val2)
  {
    $this->titulo=$tit; 
    parent::__construct($val1,$val2);     
  }

  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2; 
  }

  public function imprimirResultado()
  {
      echo $this->titulo."<br>";
      echo parent::imprimirResultado();
  }

}
//$operacion=new Operacion();

$suma=new Suma(10,20);
$suma->operar();
$suma->imprimirResultado();


?>
</body>
</html> 