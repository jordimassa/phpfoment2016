<?php
// set the expiration date to one hour ago
//borramos usuario pero no contador cuando volvamos seguirá contando
setcookie("user", "", time() - 3600, "/");
?>
<html>
<body>

<?php
	echo "Cookie 'user' borrada.";
	echo '<a href="cookies.php">Volver para comprobar</a>';
?>

</body>
</html> 