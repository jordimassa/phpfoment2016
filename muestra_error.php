<?php
/*if (file_exists("welcome.txt")) {
    $file=fopen("welcome.txt","r");
} else {
    die("El fichero no existe");
}*/

function customError($errno, $errstr) {
	echo "<b>Error:</b> [$errno] $errstr";
	echo "<br>Ending Script";
	die();
}

//set error handler
set_error_handler("customError",E_USER_WARNING);

//trigger error
if ($_GET["test"]>=4) {
	trigger_error("Value must be 1 or below",E_USER_WARNING);
}
?>