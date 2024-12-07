<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST['username']) || !ctype_alpha($_POST['username'])) {
        $errors[] = "Username should contain only alphabets.";
    }

    // Validation for email
    if (empty($_POST['email']) || !preg_match('/^[\w\.-]+@[\w\.-]+\.xyz$/', $_POST['email'])) {
        $errors[] = "Email is required and must contain '@' and end with '.xyz' domain.";
    }

    // Validation for password
    if (empty($_POST['password']) || !preg_match('/\d/', $_POST['password'])) {
        $errors[] = "Password is required and must contain at least one numeric character.";
    }

    // Validation for password confirmation
    if ($_POST['password'] !== $_POST['confirm_password']) {
        $errors[] = "Confirm Password does not match Password.";
    }

    // Terms and conditions check
    if (empty($_POST['terms'])) {
        $errors[] = "You must agree to the terms and conditions.";
    }

    // If there are no errors, save data to a JSON file
    if (empty($errors)) {
        // Prepare the user data
        $userData = [
            'username' => htmlspecialchars($_POST['username']),
            'email' => htmlspecialchars($_POST['email']),
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
            'full_name' => htmlspecialchars($_POST['full_name']),
            'gender' => htmlspecialchars($_POST['gender']),
            'dob' => htmlspecialchars($_POST['dob']),
            'phone' => htmlspecialchars($_POST['phone']),
            'address' => htmlspecialchars($_POST['address']),
            'zip' => htmlspecialchars($_POST['zip']),
            'blood_group' => htmlspecialchars($_POST['blood_group']),
            'allergies' => htmlspecialchars($_POST['allergies']),
            'medical_conditions' => htmlspecialchars($_POST['medical_conditions']),
            'medications' => htmlspecialchars($_POST['medications']),
            'chronic_illness' => $_POST['chronic_illness'] ?? [],
            'mobility' => htmlspecialchars($_POST['mobility']),
            'dietary_restrictions' => htmlspecialchars($_POST['dietary_restrictions']),
            'surgeries' => htmlspecialchars($_POST['surgeries']),
            'hospitalizations' => htmlspecialchars($_POST['hospitalizations']),
            'physician' => htmlspecialchars($_POST['physician']),
            'physician_contact' => htmlspecialchars($_POST['physician_contact']),
            'height' => htmlspecialchars($_POST['height']),
            'weight' => htmlspecialchars($_POST['weight']),
            'blood_pressure' => htmlspecialchars($_POST['blood_pressure']),
            'vaccinations' => $_POST['vaccinations'] ?? [],
            'insurance_provider' => htmlspecialchars($_POST['insurance_provider']),
            'policy_number' => htmlspecialchars($_POST['policy_number']),
            'emergency_contact_name' => htmlspecialchars($_POST['emergency_contact_name']),
            'emergency_contact_relationship' => htmlspecialchars($_POST['emergency_contact_relationship']),
            'emergency_contact_phone' => htmlspecialchars($_POST['emergency_contact_phone']),
        ];

        // Path to store the data
        $filePath = '../data/userdata.json';
        
        // Check if the file exists and read existing data
        if (file_exists($filePath)) {
            $existingData = json_decode(file_get_contents($filePath), true);
            if (!$existingData) {
                $existingData = [];
            }
        } else {
            $existingData = [];
        }

        // Add the new user data to the existing data
        $existingData[] = $userData;

        // Save the updated data to the JSON file
        if (file_put_contents($filePath, json_encode($existingData, JSON_PRETTY_PRINT))) {
            echo "<h2>Registration Successful!</h2>";
            echo "<p>User data has been saved successfully.</p>";
        } else {
            echo "<h2>Registration Successful!</h2>";
            echo "<p>But there was an error saving the data.</p>";
        }
    } else {
        // Display validation errors
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