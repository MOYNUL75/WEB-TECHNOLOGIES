<?php
$xml = simplexml_load_file("note.xml") or die("Error: Cannot create object"); // Load XML file
print_r($xml); // Print the entire structure of the XML object
echo $xml->to; // Access and print the <to> element
?>