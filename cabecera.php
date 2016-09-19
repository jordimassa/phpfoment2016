<html>
<head>
<title>Pruebas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  public function inicializar($tit,$ubi)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
  }

  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }

  public function graficar_w3schools()
  {
    echo '<div class="w3-container w3-'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

/*$cabecera=new CabeceraPagina();
$cabecera->inicializar('El blog del programador','left');
$cabecera->graficar_w3schools();*/


$cabecera=new CabeceraPagina();
$cabecera->inicializar('El blog del programador','center');
$cabecera->graficar_w3schools();

/*$cabecera=new CabeceraPagina();
$cabecera->inicializar('El blog del programador','right');
$cabecera->graficar_w3schools();*/

?>
</body>
</html> 