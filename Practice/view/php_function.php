<!-- empty() -->
<?php
$a = 0;  // Assigns 0 to $a

// True because $a is empty (0 is considered empty in PHP)
if (empty($a)) {
  echo "Variable 'a' is empty.<br>";  // This will be displayed
}
?>

<?php

// Test Case 1: Empty String
$a = "";
if (empty($a)) {
    echo "Test Case 1: Variable 'a' is empty because it's an empty string.<br>";
}

// Test Case 2: Zero Integer
$b = 0;
if (empty($b)) {
    echo "Test Case 2: Variable 'b' is empty because it's zero.<br>";
}

// Test Case 3: Zero String
$c = "0";
if (empty($c)) {
    echo "Test Case 3: Variable 'c' is empty because it's a string containing '0'.<br>";
}

// Test Case 4: NULL
$d = NULL;
if (empty($d)) {
    echo "Test Case 4: Variable 'd' is empty because it's NULL.<br>";
}

// Test Case 5: FALSE
$e = false;
if (empty($e)) {
    echo "Test Case 5: Variable 'e' is empty because it's false.<br>";
}

// Test Case 6: Empty Array
$f = array();
if (empty($f)) {
    echo "Test Case 6: Variable 'f' is empty because it's an empty array.<br>";
}

// Test Case 7: Non-Empty Value
$g = "Hello, World!";
if (empty($g)) {
    echo "Test Case 7: Variable 'g' is empty because it's a non-empty string.<br>";
} else {
    echo "Test Case 7: Variable 'g' is NOT empty because it contains: $g<br>";
}

// Test Case 8: Non-Zero Number
$h = 123;
if (empty($h)) {
    echo "Test Case 8: Variable 'h' is empty because it's a non-zero number.<br>";
} else {
    echo "Test Case 8: Variable 'h' is NOT empty because it contains: $h<br>";
}
echo "<br><br>";
?>



<!-- isset() -->
<?php
$a = 0;  // Variable $a is set to 0

// True because $a is set (even though its value is 0)
if (isset($a)) {
    echo "Variable 'a' is set.<br>";  // This will be displayed
}

$b = null;  // Variable $b is set to NULL

// False because $b is NULL
if (isset($b)) {
    echo "Variable 'b' is set.";  // This will NOT be displayed
}
else{
    echo "Variable 'b' is not set.<br>";
}

?>



<?php

// Test Case 1: Normal variable with a value
$a = "Hello, World!"; // $a is set to a non-null value
if (isset($a)) {
    echo "Test Case 1: Variable 'a' is set and not NULL. Value: $a<br>";
} else {
    echo "Test Case 1: Variable 'a' is NOT set or is NULL.<br>";
}

// Test Case 2: Variable set to NULL
$b = NULL; // $b is explicitly set to NULL
if (isset($b)) {
    echo "Test Case 2: Variable 'b' is set and not NULL. Value: $b<br>";
} else {
    echo "Test Case 2: Variable 'b' is NOT set or is NULL.<br>";
}

// Test Case 3: Uninitialized variable (not set at all)
if (isset($c)) {
    echo "Test Case 3: Variable 'c' is set and not NULL. Value: $c<br>";
} else {
    echo "Test Case 3: Variable 'c' is NOT set or is NULL.<br>";
}

// Test Case 4: Checking `isset()` with array elements
$array = array("name" => "John", "age" => 30);
if (isset($array["name"])) {
    echo "Test Case 4: 'name' key in array is set. Value: " . $array["name"] . "<br>";
} else {
    echo "Test Case 4: 'name' key in array is NOT set or is NULL.<br>";
}

if (isset($array["gender"])) {
    echo "Test Case 4: 'gender' key in array is set. Value: " . $array["gender"] . "<br>";
} else {
    echo "Test Case 4: 'gender' key in array is NOT set or is NULL.<br>";
}

// Test Case 5: Checking `isset()` with form data
// Simulate form submission using $_POST (this is usually done on a form submit)
$_POST["username"] = "john_doe"; // Simulate a form field with name="username"
if (isset($_POST["username"])) {
    echo "Test Case 5: 'username' form field is set. Value: " . $_POST["username"] . "<br>";
} else {
    echo "Test Case 5: 'username' form field is NOT set or is NULL.<br>";
}

// Test Case 6: Checking `isset()` with unset values
unset($a); // Unset variable $a
if (isset($a)) {
    echo "Test Case 6: Variable 'a' is set and not NULL. Value: $a<br>";
} else {
    echo "Test Case 6: Variable 'a' is NOT set or is NULL.<br>";
}
echo "<br><br>";
?>




<!-- is_null(): Checks if a variable is NULL. -->
<?php
$var1 = NULL;
$var2 = 10;

if (is_null($var1)) {
    echo "var1 is NULL.<br>";  // This will be displayed
}

if (is_null($var2)) {
    echo "var2 is NULL.<br>";  // This will NOT be displayed
}
?>


<!-- is_bool(): Checks if a variable is of type boolean. -->
<?php
$var1 = true;
$var2 = 10;

if (is_bool($var1)) {
    echo "var1 is a boolean.<br>";  // This will be displayed
}

if (is_bool($var2)) {
    echo "var2 is a boolean.<br>";  // This will NOT be displayed
}
?>




<!-- is_int(), is_integer(), is_long(): Checks if a variable is of type integer. -->
<?php
$var1 = 10;
$var2 = "10";

if (is_int($var1)) {
    echo "var1 is an integer.<br>";  // This will be displayed
}

if (is_int($var2)) {
    echo "var2 is an integer.<br>";  // This will NOT be displayed
}
?>



<!-- is_float(), is_double(), is_real(): Checks if a variable is of type float. -->
<?php
$var1 = 10.5;
$var2 = "10.5";

if (is_float($var1)) {
    echo "var1 is a float.<br>";  // This will be displayed
}

if (is_float($var2)) {
    echo "var2 is a float.<br>";  // This will NOT be displayed
}
?>



<!-- is_numeric(): Checks if a variable is a number or a numeric string. -->
<?php
$var1 = 123;
$var2 = "123.45";
$var3 = "abc";

if (is_numeric($var1)) {
    echo "var1 is numeric.<br>";  // This will be displayed
}

if (is_numeric($var2)) {
    echo "var2 is numeric.<br>";  // This will be displayed
}

if (is_numeric($var3)) {
    echo "var3 is numeric.<br>";  // This will NOT be displayed
}
?>



<!-- is_string(): Checks if a variable is of type string. -->
<?php
$var1 = "Hello";
$var2 = 10;

if (is_string($var1)) {
    echo "var1 is a string.<br>";  // This will be displayed
}

if (is_string($var2)) {
    echo "var2 is a string.<br>";  // This will NOT be displayed
}
?>



<!-- is_array(): Checks if a variable is of type array. -->
<?php
$var1 = array(1, 2, 3);
$var2 = "Not an array";

if (is_array($var1)) {
    echo "var1 is an array.<br>";  // This will be displayed
}

if (is_array($var2)) {
    echo "var2 is an array.<br>";  // This will NOT be displayed
}
echo "<br>";
?>



<!-- 1. strlen(): Gets the length of a string.  -->
<?php
$string = "Hello, World!";

// Check if the string length is greater than 0
if (strlen($string) > 0) {
    echo "The string has a length of " . strlen($string) . " characters.<br>";
}
?>



<!-- 2. preg_match(): Performs a regular expression match.  -->
<?php
$string = "Hello123";

// Check if the string contains digits
if (preg_match('/\d/', $string)) {
    echo "The string contains a number.<br>";  // This will be displayed
}

// Check if the string contains only alphabetic characters
if (preg_match('/^[a-zA-Z]+$/', $string)) {
    echo "The string contains only alphabetic characters.<br>";  // This will NOT be displayed
}
?>


<!-- 3. ctype_alnum(): Checks for alphanumeric character(s). -->
<?php
$string = "Hello123";

// Check if the string is alphanumeric
if (ctype_alnum($string)) {
    echo "The string contains only alphanumeric characters.<br>";  // This will be displayed
}

$string2 = "Hello 123!";

// Check if the string is alphanumeric
if (ctype_alnum($string2)) {
    echo "The string contains only alphanumeric characters.<br>";  // This will NOT be displayed
}
?>


<!-- 4. ctype_alpha(): Checks for alphabetic character(s). -->
<?php
$string = "Hello";

// Check if the string is alphabetic
if (ctype_alpha($string)) {
    echo "The string contains only alphabetic characters.<br>";  // This will be displayed
}

$string2 = "Hello123";

// Check if the string is alphabetic
if (ctype_alpha($string2)) {
    echo "The string contains only alphabetic characters.<br>";  // This will NOT be displayed
}
?>


<!-- 5. filter_var(): Filters a variable with a specified filter. -->
<?php
$email = "example@example.com";

// Validate if the email is valid
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "The email address is valid.<br>";  // This will be displayed
} else {
    echo "The email address is not valid.<br>";
}
?>



<!--  -->
<?php
$email = "  example@Example.com   ";

// Sanitize the email (trim spaces and convert to lowercase)
$sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo "Sanitized email: " . $sanitized_email . "<br>";  // Will display "example@example.com"
echo "<br>";
?>


<!-- preg_match()   -->
<?php
$str = "Visit W3Schools";  
$pattern = "/w3schools/i"; 

echo preg_match($pattern, $str). "<br>";  // Output: 1
?>


<?php
$str = "Visit PHP tutorials";  
$pattern = "/w3schools/i"; 

echo preg_match($pattern, $str);  // Output: 0
?>
