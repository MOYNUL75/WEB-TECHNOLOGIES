<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Setting session variable
$_SESSION["favcolor"] = "yellow";  // Overwriting session variable

// Display the session variables
echo "<h2>Current Session Variables:</h2>";
print_r($_SESSION);  // Output all session variables
?>

</body>
</html>