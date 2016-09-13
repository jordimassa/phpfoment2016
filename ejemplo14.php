<?php
$numeros = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

foreach ($numeros as $value) {
	if ($value>5 && $value % 5==0) {
		if ($value % 2!=0) 
	    	echo "$value es impar <br>";
	    else
	    	echo "$value es par <br>";
	}
}
?> 