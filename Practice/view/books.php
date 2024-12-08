<?php
// Create a new SimpleXMLElement object with a root element <books>
$simplexml = new SimpleXMLElement('<?xml version="1.0"?><books/>');

// Add the first book element
$book1 = $simplexml->addChild('book');
$book1->addChild("Booktitle", "The Wandering Oz");
$book1->addChild("PublicationDate", 2007); // Correct quotation mark

// Add the second book element
$book2 = $simplexml->addChild('book');
$book2->addChild("Booktitle", "The Roaming Fox");
$book2->addChild("PublicationDate", 2009);  

// Save the XML content to a file named 'books.xml'
file_put_contents('books.xml', $simplexml->asXML());
?>
