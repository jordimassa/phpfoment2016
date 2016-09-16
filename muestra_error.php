<?php
if (file_exists("welcome.txt")) {
    echo "El fichero existe";
} else {
    die("El fichero no existe");
}
?>