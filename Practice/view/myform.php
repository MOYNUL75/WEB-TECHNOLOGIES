<?php include "../control/myformProcess.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    <h1>User Information Form</h1>
    <form action="" method="POST">
        <!-- First Name -->
        First name:<br>
        <input type="text" name="firstName">
        <br><br>
        
        <!-- Last Name -->
        Last name:<br>
        <input type="text" name="lastName">
        <br><br>
        
        <!-- Email -->
        Email:<br>
        <input type="text" name="email">
        <br><br>
        
        <!-- Mobile -->
        Mobile:<br>
        <input type="text" name="mobile">
        <br><br>
        
        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>