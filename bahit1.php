<?php
class Cliente {
 static public $nombre_completo = 'Cliente desconocido';
 protected $id = 1001;
}

//print Cliente::nombre_completo;

//print Cliente::$nombre_completo;

//ummmm??? porque no da error?
$cliente = new Cliente();
print $cliente->nombre_completo;

//$cliente = new Cliente();
//print $cliente->$nombre_completo;


?>