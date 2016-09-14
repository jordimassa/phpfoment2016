<html>
<head>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <title>Formulario simple</title>
</head>
<style>
  .error {color: #FF0000;}
</style>

<body>
<div class="w3-container w3-orange">
  <h2>Formulario</h2>
</div>
<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$nameErr = $apeErr = $genErr="";
$nombre = $apellido = $check1= $check2= $genero="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nameErr = "Nombre requerido";
  } else {
    $nombre = test_input($_POST["nombre"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
        $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["apellido"])) {
    $apeErr = "Nombre requerido";
  } else {
    $apellido = test_input($_POST["apellido"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$apellido)) {
        $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["genero"])) {
    $genErr = "Genero requerido";
  } else {
    if ($_POST["genero"]=="Hombre") {$check1=" CHECKED ";} else {$check2=" CHECKED ";} 
    $genero = test_input($_POST["genero"]);
  }

}

?>

<form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p>
    <input class="w3-input" type="text" name="nombre" value="<?=$nombre?>">
    <label>Nombre</label>
    <p class="error"><?=$nameErr;?></p>
  </p>
  <p>
    <input class="w3-input" type="text" name="apellido" value="<?=$apellido?>">
    <label>Apellidos</label>
    <p class="error"><?=$apeErr;?></p>
  </p>
  <p>
    <h2>Género</h2>
    <input class="w3-radio" type="radio" name="genero" <?=$check1?> value="Hombre">
    <label class="w3-validate">Hombre</label>

    <input class="w3-radio" type="radio" name="genero" <?=$check2?> value="Mujer">
    <label class="w3-validate">Mujer</label>
    <p class="error"><?=$genErr;?></p>
  </p>
  <input class="w3-btn" type="submit">
</form>

<?php
  if (!empty($nombre) && !empty($apellido) ) {?>
    <div class="w3-card-4">
    <header class="w3-container w3-blue">
      <h1>Persona</h1>
    </header>
    <div class="w3-container">
      <p>Nombre: <?=$nombre?></p>
      <p>Apellido: <?=$apellido?></p>
      <p>Género: <?=$genero?></p>
    </div>
  <?php }
?>

</body>
</html>