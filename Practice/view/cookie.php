<?php
// Set the cookie
$cookie_name = "user";
$cookie_value = "Md Moynul Islam";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");  // 30 days expiration

// Delete the cookie
if (isset($_POST['delete_cookie'])) {
    setcookie("user", "", time() - 3600, "/");  // Deleting the cookie
    echo "Cookie 'user' has been deleted!";
}
?>

<html>
<body>

<form method="post">
    <input type="submit" name="delete_cookie" value="Delete Cookie">
</form>

<?php
// Check if the cookie is set and display its value
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
