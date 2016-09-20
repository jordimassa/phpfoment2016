<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;

  public function __construct()
  {
    $this->valor1=$_GET["operando1"]; 
    $this->valor2=$_GET["operando2"];     
  }

  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}

class Suma extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2; 
  }
   public function imprimirResultado()
  {
      echo parent::imprimirResultado();
      echo "Es una suma:<br>";
  }

}


class Resta extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1-$this->valor2;
  }
  public function imprimirResultado()
  {
      echo parent::imprimirResultado();
      echo "Es una resta:<br>";      
  }

}

class Modulo extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1 % $this->valor2; 
  }
  public function imprimirResultado()
  {
      echo parent::imprimirResultado();
      echo "Es un módulo:<br>";      
  }

}


$suma=new Suma();
$suma->operar();
echo 'El resultado de la suma de'. $_GET["operando1"].' + '.$_GET["operando2"].' es:';
$suma->imprimirResultado();

$resta=new Resta();
$resta->operar();
echo 'El resultado de la diferencia de'. $_GET["operando1"].' - '.$_GET["operando2"].' es:';
$resta->imprimirResultado();

$modulo=new Modulo();
$modulo->operar();
echo 'El módulo de '. $_GET["operando1"].' % '.$_GET["operando2"].' es:';
$modulo->imprimirResultado();


?>
</body>
</html> 