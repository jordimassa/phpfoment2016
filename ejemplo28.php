<?php
if (filesize("webdictionary2.txt")< 1000) {
	$myfile = fopen("webdictionary2.txt", "a") or die("Unable to open file!");
	$txt = "John 1\n";
	fwrite($myfile, $txt);
	$txt = "John 2\n";
	fwrite($myfile, $txt);
	$txt = "John 3\n";
	fwrite($myfile, $txt);
	$txt = "John 4\n";
	fwrite($myfile, $txt);
	$txt = "John 5\n";
	fwrite($myfile, $txt);
	$txt = "John 6";
	fwrite($myfile, $txt);
	fclose($myfile);	
	echo filesize("webdictionary2.txt");
}
else
{?>
	No puedes escribir mas!!!
<?php }; ?>