<html>
<head>
<title>Pruebas</title>
<style>
    ul  {
      list-style-type: none;
      background-color: lightgray;
      margin:0;
      padding: 0;
    }

    ul li:hover {
      background-color: gray;
    }

    ul li a {
      margin: 0;
      width: 100%;
    }
</style>
</head>
<body>
<?php
class Menu {
  private $enlaces=array();
  private $titulos=array();
  public function cargarOpcion($en,$tit)
  {
    $this->enlaces[]=$en;
    $this->titulos[]=$tit;
  }

  public function mostrar_horizontal()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      if ($f>0) echo "-";
      echo '<a href="'.$this->enlaces[$f].'" title="'.$this->titulos[$f].'">'.$this->titulos[$f].'</a>';
      //if ($f<count($this->enlaces)-1) echo "-";
    }
  }

  public function mostrar_vertical()
  {
    echo "<ul>";
    for($f=0;$f<count($this->enlaces);$f++)
      echo '<li><a href="'.$this->enlaces[$f].'" title="'.$this->titulos[$f].'">'.$this->titulos[$f].'</a></li>';
    echo "</ul>";
  }
  
}

$menu1=new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->mostrar_horizontal();
$menu1->mostrar_vertical();

?>
</body>
</html>