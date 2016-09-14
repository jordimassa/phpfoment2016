<!DOCTYPE html>
<html>
<body>
<!-- no es sintaxis extendida, sino mezcla de codigo y html-->
<?php
define("POS_STOCK",1);
$cars = array
  (
  	array("Volvo",22,18),
  	array("BMW",15,13),
  	array("Saab",5,2),
  	array("Land Rover",17,15)
  );
  
  for ($row = 0; $row < count($cars); $row++) {
    if ($cars[$row][POS_STOCK]<20) {?>	
	  	<p><b>Row number $row</b></p>
	  	<ul>
	  	<?php for ($col = 0; $col < count($cars[$row]); $col++) {?>

	    	<li><?=$cars[$row][$col]?></li>
	    <?php }
		echo "</ul>";
	  }
	}
?>

<?=$_SERVER['HTTP_USER_AGENT'];?>
<br>
<?="AAAA".$_SERVER['SCRIPT_NAME'];?>


</body>
</html>