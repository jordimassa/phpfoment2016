<?php
class Cliente { 
	static public $nombre_completo =  'Cliente desconocido' ;
    protected $id=1001;
	function __construct() {
		self::$nombre_completo = 'Juan Pérez';
	}
	static function get_tal() {
		echo "Hola";
	}
	abstract function reventon(); 
}

class Cliente_premium extends Cliente {
	static function get_tal() {
		echo "Adios";
	}
}

print Cliente::$nombre_completo;

$cli=new Cliente();
$cli->get_tal();

$cli=new Cliente_premium();
$cli->get_tal();


//P=A-E/N-1

//1-9/10-1 