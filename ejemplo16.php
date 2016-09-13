<?php
	echo "<ul>";
	$cuadrado = array(
		array(0,0),
		array(10,0),
		array(0,10),
		array(10,10)
	);

	foreach ($cuadrado as $value) {
		echo "<li>";
		foreach ($value as $valueinterior) {
			echo $valueinterior;
		}
		echo "</li>";
	}
	echo "</ul>";
?>