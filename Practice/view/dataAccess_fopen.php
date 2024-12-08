<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!"); // Open the file in read mode
echo fread($myfile, filesize("webdictionary.txt")); // Read and output the entire file content
fclose($myfile); // Close the file after reading
?>
