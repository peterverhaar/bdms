<?php

// Load the XML source
$xml = new DOMDocument;
$xml->load('/opt/rh/httpd24/root/var/www/html/lydgate/XSLT/lydgate.xml');

$xsl = new DOMDocument;
$xsl->load('/opt/rh/httpd24/root/var/www/html/lydgate/XSLT/facsimile.xsl');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules

echo $proc->transformToXML($xml);
?>
