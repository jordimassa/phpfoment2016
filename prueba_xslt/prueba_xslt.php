<?php
// Load XML file
echo "Hola";
$xml = new DOMDocument;
$xml->load('catalog.xml');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('catalog.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);
?>