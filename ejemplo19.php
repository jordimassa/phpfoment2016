<html>
<head>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <title>Suma dos números</title>
</head>
<body>
<header class="w3-container w3-teal">
  <h1>Header</h1>
</header>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Primer número: <input type="text" name="primero"><br>
  Segundo número: <input type="text" name="segundo">  
  <input type="submit">
</form>

<?php if (empty($_REQUEST["primero"]) || empty($_REQUEST["segundo"])) :?> 
     Alguno de los dos valores está vacio
    <?php else: ?>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") :?>
            <div class="w3-container w3-teal">
                La suma por post es: <?=($_POST['primero']+$_POST['segundo']);?>
            </div>
        <?php else: ?>
        	Valeeee por get: <?=($_GET['primero']+$_GET['segundo']);?>
        <?php endif;?>
    <?php endif;?>
</body>
</html>