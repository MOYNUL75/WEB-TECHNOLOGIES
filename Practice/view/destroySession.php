<?php
// Start the session to access session variables
session_start();

// Remove all session variables
session_unset();  // This function clears all session variables

// Destroy the session completely
session_destroy();  // This ends the session and removes the session data from the server

echo "<h2>Session Destroyed</h2>";
?>

<!DOCTYPE html>
<html>
<body>

<p>All session variables have been removed and the session is destroyed.</p>

</body>
</html>