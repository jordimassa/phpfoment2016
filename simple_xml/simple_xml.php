<!DOCTYPE html>
<html>
<body>

<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
<address>
	<street>Downing Street, 10</street>
	<city>London</city>
</address>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);?>
	<br>
	El remitente es <?=($xml->from);?>
	<br>
	Vive en <?=$xml->address->street?>


<?php 
$xml=simplexml_load_file("../prueba_xslt/bookstore.xml") or die("Error: Cannot create object");?>

<hr>
<h1>Libros == año 2003:</h1>
<?php foreach ($xml->children() as $books) :?>
	<?php if ($books->year==2003):?>
		<?=$books->title?>
		&nbsp;
		<?=$books->year?>
		<br>
	<?php endif;?>
<?php endforeach;?>

<?php
$xml=<<<XML
  <cars>
    <car name="Volvo">
    <child/>
    <child/>
    <child/>
    <child/>
  </car>
  <car name="BMW">
    <child/>
    <child/>
    <child/>    
  </car>
</cars>
XML;

$elem=new SimpleXMLElement($xml);
foreach ($elem as $car)
  {
  printf("%s has %d children.<br>", $car['name'], $car->count());
  }

for ($x=0;$x<$elem->children()->count();$x++) {
	echo ".".$print_r()."<br>";
}

foreach ($elem->children() as $child) {
	echo $child->attributes()->name." ".$child->count()."<br>";
}
?>
</body>
</html>