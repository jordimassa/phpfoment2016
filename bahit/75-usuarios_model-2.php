<?php
require_once('74-db_abstract_model-1.php');
class Usuario extends DBAbstractModel {
 public $nombre;
 public $apellido;
 public $email;
 private $clave;
 protected $id;
 function __construct() {
 	$this->db_name = 'mydb';
 }

 public function getRows() {
 	return $this->rows;
 }

 public function get($user_email='') {
	if (!empty($user_email)) :
		 $this->query = "
		 SELECT id, nombre, apellido, email, clave
		 FROM usuarios
		 WHERE email = '$user_email'";
		 $this->get_results_from_query();
	endif;
	if(count($this->rows) == 1):
	 	 //echo "AAAAABBBBCCCCC".$this->query;
		 foreach ($this->rows[0] as $propiedad=>$valor):
		 	$this->$propiedad = $valor;
		 endforeach;
	endif;
 }

 public function set($user_data=array()) {
	 if(array_key_exists('email', $user_data)):
	 	 $this->get($user_data['email']);
		 if($user_data['email'] != $this->email):
			 foreach ($user_data as $campo=>$valor):
			 $$campo = $valor;
			 endforeach;
		$this->query = "
		 INSERT INTO usuarios
		 (nombre, apellido, email, clave)
		 VALUES
		 ('$nombre', '$apellido', '$email', '$clave')
		 ";
		 $this->execute_single_query();
		 endif;
	 endif;
 }

public function edit($user_data=array()) {
   if(array_key_exists('email', $user_data)):
	   $this->get($user_data['email']);
	   if($user_data['email'] == $this->email):
			foreach ($user_data as $campo=>$valor):
			 	$$campo = $valor;
			 	if (empty($valor)) {
			 		$$campo=$this->$campo;
			 	}
			endforeach;
			$this->query = "
			UPDATE usuarios
			SET nombre='$nombre',
			apellido='$apellido',
			clave='$clave'
			WHERE email = '$email'";
			echo $this->query;
			$this->execute_single_query();
			echo "Usuario actualizado ";
		else :
			echo "Error, no se ha podido encontrar el usario en la base de datos (update) ";
		endif;
	endif;
}

 public function delete($user_email='') {
 	if (!empty($user_email)) :
	   $this->get($user_email);
	   if($this->rows[0]['email'] == $user_email):
	 		$this->query = "
		 	DELETE FROM usuarios
		 	WHERE email = '$user_email'";
		 	$this->execute_single_query();
		else :
			echo "Error, no se ha podido encontrar el usario en la base de datos (delete) ";		 	
		endif;
	else :
		echo "No se ha introducido e-mail ";
	endif;		
 }

 function __destruct() {
 	unset($this);
 }

}
?>
