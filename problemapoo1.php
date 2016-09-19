<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
class empleado {
  private $nombre;
  private $sueldo;  
  public function inicializar($nom,$sueldo)
  {
    $this->nombre=$nom;
    $this->sueldo=$sueldo;    
  }
  public function imprimir()
  {
    echo $this->nombre."<br>";
    if ($this->sueldo>25000) : 
      echo "Debes pagar impuestos!!<br>";
    else :
      echo "Eres pobre!!<br>";
    endif;
  }
}

$per1=new empleado();
$per1->inicializar('Juan',23000);
$per1->imprimir();

$per2=new empleado();
$per2->inicializar('Ana',45000);
$per2->imprimir();

$per3=new empleado();
$per3->inicializar('Ricardo',55000);
$per3->imprimir();
?>
</body>
</html>