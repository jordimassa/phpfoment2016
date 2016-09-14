<html>
<head>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <title>Formulario simple</title>
</head>
<body>
<div class="w3-container w3-orange">
  <h2>Formulario</h2>
</div>

<form class="w3-container" method="post" action="ejemplo20print.php">
  <p>
    <input class="w3-input" type="text" name="nombre">
    <label>Nombre</label>
  </p>
  <p>
    <input class="w3-input" type="text" name="apellido">
    <label>Alellidos</label>
  </p>
  <p>
    <h2>Género</h2>
    <input class="w3-radio" type="radio" name="genero" value="Hombre">
    <label class="w3-validate">Hombre</label>

    <input class="w3-radio" type="radio" name="genero" value="Mujer">
    <label class="w3-validate">Mujer</label>
  </p>
  <input class="w3-btn" type="submit">
</form>
</body>
</html>