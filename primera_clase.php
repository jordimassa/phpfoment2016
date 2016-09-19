<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  private $edad;  
  public function inicializar($nom,$edad)
  {
    $this->nombre=$nom;
    $this->edad=$edad;    
  }
  public function imprimir()
  {
    echo $this->nombre." ".$this->edad."<br>";
  }

  public function cumpleanys()
  {
      $this->edad++;
      echo "Feliz cumpleaños<br>";
      $this->imprimir();
  }
}

$per1=new Persona();
$per1->inicializar('Juan',23);
//$per1->imprimir();
$per1->cumpleanys();

$per2=new Persona();
$per2->inicializar('Ana',45);
//$per2->imprimir();
$per2->cumpleanys();
//$per2->imprimir();
$per3=new Persona();
$per3->inicializar('Ricardo',55);
//$per3->imprimir();
$per3->cumpleanys();
//$per2->imprimir();
?>
</body>
</html>