</head>
<body>
<?php  
class Persona {
  private $nombre;
  static $edad;
  
  public function fijarNombreEdad($nom,$ed)
  {
    $this->nombre=$nom;
    self::$edad=$ed;
    //echo  self::$edadambito;
  }
  public function retornarNombre()
  {
    return $this->nombre;
  }
  public function retornarEdad()
  {
    return self::$edad;
  }
  public function __clone()
  { 
    self::$edad++;
  }
}

$persona1=new Persona();
$persona1->fijarNombreEdad('Juan',10);
echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
/*$objeto_clonado=$persona1;
for ($x=0;$x<9;$x++) {  
    $persona=clone($objeto_clonado);
    echo $persona->retornarNombre().' - '.$persona->retornarEdad().'<br>';
    $objeto_clonado=$persona;
}*/
echo "<hr>";

$persona=clone($persona1);
echo $persona->retornarNombre().' - '.$persona->retornarEdad().'<br>';
$persona=clone($persona1);
echo $persona->retornarNombre().' - '.$persona->retornarEdad().'<br>';
$persona=clone($persona1);
echo $persona->retornarNombre().' - '.$persona->retornarEdad().'<br>';
$persona=clone($persona1);
echo $persona->retornarNombre().' - '.$persona->retornarEdad().'<br>';
$persona=clone($persona1);
echo $persona->retornarNombre().' - '.$persona->retornarEdad().'<br>';
?>
  
</body>
</html>