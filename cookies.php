<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
$bienvenida = "";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if(!isset($_COOKIE["user_visits"])) {
	setcookie("user_visits", 1, time() + (86400 * 30), "/");
	$bienvenida = "<br>Bienvenido por primera vez";
}
else
{
	setcookie("user_visits", $_COOKIE["user_visits"]+1, time() + (86400 * 30), "/");
}
?>
<html>
<body>

<?php
	if(!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named '" . $cookie_name . "' is not set!";
	} else {
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name]."<br>";
	}
	echo $bienvenida;
	if(isset($_COOKIE["user_visits"])) {
		echo "User visits this page: ".$_COOKIE["user_visits"];
	}	
	echo '<p><a href="cookies2.php">Borrar cookie</a></p>';
?>

<p><strong>Note:</strong> You might have to reload the page to see the new value of the cookie.</p>

</body>
</html>