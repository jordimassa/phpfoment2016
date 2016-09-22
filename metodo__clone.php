</head>
<body>
<?php
class Persona {
  private $nombre;
  private $edad;
  static $edadambito;

  public function fijarNombreEdad($nom,$ed)
  {
    $this->nombre=$nom;
    $this->edad=$ed;
    $this->edadambito=$ed;
  }
  public function retornarNombre()
  {
    return $this->nombre;
  }
  public function retornarEdad()
  {
    return $this->edad;
  }
  public function __clone()
  { 
    $this->edad=$this->edadambito;
    $this->edad++;
    $this->edadambito=$this->edad;
  }
}

$persona1=new Persona();
$persona1->fijarNombreEdad('Juan',10);
echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
$objeto_clonado=$persona1;
for ($x=0;$x<9;$x++) {  
    $persona=clone($objeto_clonado);
    echo $persona->retornarNombre().' - '.$persona->retornarEdad().'<br>';
    $objeto_clonado=$persona;
}
?>
</body>
</html>