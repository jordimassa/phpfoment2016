<html>
<body>
<title>SuperGlobals</title>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    echo "Es post<br>";
}
else
{
	echo "Es get<br>";
}
	//SIEMPRE MOSTRARÁ ALGO SEA POST O GET, PARA EVITARLO $_POST[] O $_GET[]
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
?>
</body>
</html>