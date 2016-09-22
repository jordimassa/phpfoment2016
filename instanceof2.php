<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
abstract class Trabajador {
  protected $nombre;
  protected $sueldo;
  public function __construct($nom,$sue)
  {
    $this->nombre=$nom;
    $this->sueldo=$sue;
  }
  public function retornarSueldo()
  {
    return $this->sueldo;
  }
  public function retornarGerentes()
  {
    return $this->$num_gerentes;
  }
   public function retornarEmpleados()
  {
    return $this->$num_empleado;
  }

} 

class Empleado extends Trabajador {
  static $num_empleados=0;
  public function __construct($nom,$sue) {
      parent::__construct($nom,$sue);    
      self::$num_empleados++;
  }
}

class Gerente extends Trabajador {
  static $num_gerentes=0;
  public function __construct($nom,$sue) {
      parent::__construct($nom,$sue);
      self::$num_gerentes++; 
  }
}

$vec[]=new Empleado('juan',1200);
$vec[]=new Empleado('ana',1000);
$vec[]=new Empleado('carlos',1000);

$vec[]=new Gerente('jorge',25000);
$vec[]=new Gerente('marcos',8000);
$suma1=0;
$suma2=0;
$cuentaempleados=0;
$cuentagerentes=0;
for($f=0;$f<count($vec);$f++)
{
  if ($vec[$f] instanceof Empleado) {
    $cuentaempleados++;
    $suma1=$suma1+$vec[$f]->retornarSueldo();
  }
  else
  {
    if ($vec[$f] instanceof Gerente) {
      $cuentagerentes++;
      $suma2=$suma2+$vec[$f]->retornarSueldo();
  }
}
}
echo 'Gastos en sueldos de Empleados:'.$suma1.'<br>';
echo 'Gastos en sueldos de Gerentes:'.$suma2.'<br>';

echo "Empleados ".Empleado::$num_empleados;
echo "Gerentes ".Gerente::$num_gerentes;

?>
</body>
</html> 