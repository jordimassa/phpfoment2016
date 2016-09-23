<?php  
	include("include_interfaces/bombilla.php");
	include("include_interfaces/coche.php");	

	/*interface Encendible{ 
	   	public function encender(); 
	   	public function apagar(); 
	}*/

	$bulb=new Bombilla();
	$bulb->encender();
	$bulb->apagar();	
	
	$coche=new Coche();
	$coche->cargar_gasolina(10);
	for ($x=0;$x<=20;$x++) {
		$coche->getBateria()."<br>";
		$coche->encender();
		$coche->getBateria()."<br>";			
		$coche->apagar();	
	}

	echo "<hr>";

	function enciende_algo (encendible $algo){ 
   		$algo->encender(); 
	} 

	$mibombilla = new bombilla(); 
	$micoche = new coche(); 

	enciende_algo($mibombilla); 
	enciende_algo($micoche);
?>