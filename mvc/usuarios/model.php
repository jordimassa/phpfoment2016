<?php
require_once('../core/db_abstract_model.php');
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
	if($user_email != '') {
		$this->query = "
		SELECT id, nombre, apellido, email, clave FROM usuarios WHERE email = '$user_email'";
		$this->get_results_from_query();
	}
	if(count($this->rows) == 1) {
		foreach ($this->rows[0] as $propiedad=>$valor) {
			$this->$propiedad = $valor;
		}
		$this->mensaje = 'Usuario encontrado';
	} else {
		$this->mensaje = 'Usuario no encontrado';
	}
 }

 public function getAll() {
	$this->query = "
	SELECT id, nombre, apellido, email, clave FROM usuarios";
	$this->get_results_from_query();
	return $this->rows;
 }


 # Crear un nuevo usuario
 public function set($user_data=array()) {
	if(array_key_exists('email', $user_data)) {
	 	$this->get($user_data['email']);
	 	if($user_data['email'] != $this->email) {
	 		foreach ($user_data as $campo=>$valor) {
	 			$$campo = $valor;
	 		}
			$this->query = "INSERT INTO usuarios (nombre, apellido, email, clave) VALUES ('$nombre', '$apellido', '$email', '$clave')";
	 		$this->execute_single_query();
	 		$this->mensaje = 'Usuario agregado exitosamente';
	 	} else {
	 		$this->mensaje = 'El usuario ya existe';
	 	}
	} else {
	 	$this->mensaje = 'No se ha agregado al usuario';
	}
 }

# Modificar un usuario
 public function edit($user_data=array()) {
 	foreach ($user_data as $campo=>$valor) {
 		$$campo = $valor;
 	}
 	$this->query = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido' WHERE email = '$email'";
 	$this->execute_single_query();
 	$this->mensaje = 'Usuario modificado';
 }

 public function delete($user_email='') {
 	if (!empty($user_email)) :
	   $this->get($user_email);
	   if($this->rows[0]['email'] == $user_email):
	 		$this->query = "DELETE FROM usuarios WHERE email = '$user_email'";
		 	$this->execute_single_query();
	 		$this->mensaje = 'Usuario eliminado';		 	
		endif;
	else :
		$this->mensaje="No se ha introducido e-mail ";
	endif;		
 }

 function __destruct() {
 	unset($this);
 }
}

 $user= new Usuario();
 $recordset=$user->getAll();

foreach ($recordset as $key => $value) {
	foreach ($value as $key2 => $value2) {
		echo $key2." ".$value2."<br>";
	}
}

?>
