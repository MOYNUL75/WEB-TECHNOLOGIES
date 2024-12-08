<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    
    // Validate form data
    if (empty($firstName) || empty($lastName) || empty($email) || empty($mobile)) {
        echo "<p style='color:red;'>All fields are required!</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:red;'>Invalid email format!</p>";
    } elseif (!preg_match('/^[0-9]{11}$/', $mobile)) {
        echo "<p style='color:red;'>Mobile number must be 10 digits!</p>";
    } else {
        // Successful submission
        echo "<p style='color:green;'>Form submitted successfully!</p>";
        echo "<h3>Submitted Information:</h3>";
        echo "First Name: " . $firstName . "<br>";
        echo "Last Name: " . $lastName . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Mobile: " . $mobile . "<br>";
    }
}
?>