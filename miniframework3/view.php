<?php 
require_once("modelo.php");
function set_identificadores ($vista) {
	$identificadores=array();
	if($vista) {
		switch ($vista) {
			case 'vista_1': 
				$identificadores=array('propiedad');
			break;
			case 'vista_2':
				$identificadores=array('propiedad_1', 'propiedad_2');
				break;
		}
		return $identificadores;
	}
}

function armar_diccionario ($vista,$data){
	$diccionario=array();
	$identificadores=set_identificadores($vista);
	if($identificadores) {
		foreach($identificadores as $identificador) {
			if(array_key_exists($identificador,$data)) {
				$diccionario[$identificador]=$data[$identificador];
			}
		}
	}
	return $diccionario;
}

function render_data($vista,$data) {
	$html='';
	if (($vista) && ($data)) {
		print_r($data);
		$diccionario=armar_diccionario($vista,$data);
		if($diccionario) {
			$html=file_get_contents('html/'.$vista.'.html');
			foreach ($diccionario as $clave=>$valor) {
				$html=str_replace('{'.$clave.'}',$valor,$html);
			}
		}
	}
	print $html;
}
//
//$mod1=new ModeloUno();
//$mod1->a("33");
//esto es debido a que solo hay una propiedad, pero en el segudo
//settype($mod1, 'array');
//$datos=set_identificadores("vista_1");
//$datos["propiedad"] = "Hola";
//echo $datos["propiedad"];
//render_data("vista_1", (array)$mod1);

//$mod2=new ModeloDos();
//$mod2->b("332","44");

//render_data("vista_2",(array)$mod2);

