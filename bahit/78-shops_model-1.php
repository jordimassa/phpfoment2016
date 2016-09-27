<?php
require_once('74-db_abstract_model-1.php');

class Shops extends DBAbstractModel {
 protected $idShop;
 public $nombre;
 public $tipo;
 public $ubicacion;
 public $codigo;
 public $nif; 
 public $alta;
 public $idUser;

 function __construct() {
 	$this->db_name = 'mydb';
 }
 
 public function get($shop_nif='') {
	if (!empty($shop_nif)) :
		 $this->query = "
		 SELECT idShop, nombre, tipo, ubicacion, codigo, nif, alta, idUser
		 FROM shops
		 WHERE nif = '$shop_nif'";
		 //echo "AAAAA".$this->query;
		 $this->get_results_from_query();
	endif;
	if(count($this->rows) == 1):
		 foreach ($this->rows[0] as $propiedad=>$valor):
		 	$this->$propiedad = $valor;
		 endforeach;
	endif;
 }

 public function set($shop_data=array()) {
	 if(array_key_exists('nif', $shop_data)):
	 $this->get($shop_data['nif']);
		 if($shop_data['nif'] != $this->nif):
			 foreach ($shop_data as $campo=>$valor):
			 	$$campo = $valor;
			 endforeach;
			 $this->query = "
			 INSERT INTO shops
			 (nombre, tipo, ubicacion, codigo, nif, alta, idUser)
			 VALUES
			 ('$nombre', '$tipo', '$ubicacion', '$codigo', '$nif', '$alta', $idUser)
			 ";
			 echo $this->query;
			 $this->execute_single_query();
		 else :
		 	echo "NIF repetido";
		 endif;
	 endif;
 }

public function edit($shop_data=array()) {
   if(array_key_exists('nif', $shop_data)):
	   $this->get($shop_data['email']);
	   //echo "AAA".$shop_data['nif']." ".$this->nif;
	   if($shop_data['nif'] == $this->nif):
			foreach ($shop_data as $campo=>$valor):
			 	$$campo = $valor;
			 	//recuperamos valores anteriores si el campo se lo enviamos vacio
			 	if (empty($valor)) {
			 		$$campo=$this->$campo;
			 	}			 
			endforeach;
			$this->query = "
			UPDATE shops
			SET nombre='$nombre',
			tipo='$tipo',
			ubicacion='$ubicacion',
			codigo='$codigo',
			nif='$nif',
			alta='$alta',
			tipo='$tipo',
			idUser='$idUser'
			WHERE nif = '$nif'";
			echo $this->query;
			$this->execute_single_query();
			echo "Tienda actualizada ";
		else :
			echo "Error, no se ha podido encontrar la tienda en la base de datos (update) ";
		endif;
	endif;
}

 public function delete($shop_nif='') {
 	if (!empty($shop_nif)) :
	   $this->get($shop_nif);
	   if($this->nif  == $shop_nif):
	 		$this->query = "
		 	DELETE FROM shops
		 	WHERE nif = '$shop_nif'";
		 	$this->execute_single_query();
		else :
			echo "Error, no se ha podido encontrar la tienda en la base de datos (delete) ";		 	
		endif;
	else :
		echo "No se ha introducido NIF ";
	endif;		
 }

 function __destruct() {
 	unset($this);
 }

}
?>
