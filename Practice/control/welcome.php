<!DOCTYPE html>
<html>
<body>
    
    Welcome 
    <?php 
    echo htmlspecialchars($_POST["name"]); 
    ?>
    <br>
    
    Your email address is: 
    <?php 
    echo htmlspecialchars($_POST["email"]); 
    ?>
</body>
</html>





<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h1>Welcome!</h1>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
*/
?> 

