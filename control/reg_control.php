<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['username']) || !ctype_alpha($_POST['username'])) {
        $errors[] = "Username should contain only alphabets.";
    }

    if (empty($_POST['email']) || !preg_match('/^[\w\.-]+@[\w\.-]+\.xyz$/', $_POST['email'])) {
        $errors[] = "Email is required and must contain '@' and end with '.xyz' domain.";
    }

    if (empty($_POST['password']) || !preg_match('/\d/', $_POST['password'])) {
        $errors[] = "Password is required and must contain at least one numeric character.";
    }

    if ($_POST['password'] !== $_POST['confirm_password']) {
        $errors[] = "Confirm Password does not match Password.";
    }

    if (empty($_POST['terms'])) {
        $errors[] = "You must agree to the terms and conditions.";
    }

    if (empty($errors)) {
        echo "<h2>Registration Successful!</h2>";
        echo "<h3>Submitted Information:</h3>";
        echo "<ul>";
        
        foreach ($_POST as $key => $value) {
            if (is_array($value)) {
                echo "<li>" . htmlspecialchars($key) . ": " . implode(", ", array_map("htmlspecialchars", $value)) . "</li>";
            } else {
                echo "<li>" . htmlspecialchars($key) . ": " . htmlspecialchars($value) . "</li>";
            }
        }
        
        echo "</ul>";
    } else {
        echo "<h3>Errors:</h3>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
} else {
    echo "Invalid request method.";
}
?>
