<?php
require_once('78-shops_model-1.php');

# Crear una nueva tienda
/*$new_shop_data = array(
 'nombre'=>'Ulanka',
 'tipo'=>'Ropa',
 'ubicacion'=>'Carrer Major, 25',
 'codigo'=>'08014',
 'nif'=>'52190998U',
 'alta'=>'2015-01-01',
 'idUser'=>2
);

$shop1 = new Shops();
$shop1->set($new_shop_data);*/


/*# Recuperar una nueva tienda
$shop2 = new Shops();
echo $shop2->get('99887554R');
print $shop2->nombre;*/

# Modificar una tienda

/*$mod_shop_data = array(
 'nombre'=>null,
 'tipo'=>'Ropa',
 'ubicacion'=>'Carrer Major, 325',
 'codigo'=>'08030',
 'nif'=>'52190998U',
 'alta'=>'2015-01-01',
 'idUser'=>2
);

$shop3=new Shops();
$shop3->get('52190998U');
$shop3->edit($mod_shop_data);*/


$shop3=new Shops();
//$shop3->get('52190998U');
$shop3->delete('52190998U');

?>
