<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!"); // Open a file for writing
$txt = "John Doe\n"; // Define the first line of text
fwrite($myfile, $txt); // Write the text to the file
$txt = "Jane Doe\n"; // Define the second line of text
fwrite($myfile, $txt); // Write the second text to the file
fclose($myfile); // Close the file
?>
