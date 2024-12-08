<!-- $GLOBALS -->
<?php
// Define global variables
$x = 5;
$y = 10;

function addNumbers() {
    // Access global variables using the $GLOBALS array
    $GLOBALS['sum'] = $GLOBALS['x'] + $GLOBALS['y'];
}

// Call the function
addNumbers();
echo "The sum of $GLOBALS[x] and $GLOBALS[y] is: $sum";
echo "<br><br>";
?>


<!-- $_SERVER -->
<?php
echo "<h1>SERVER Superglobal Example</h1>";

// Display the script name
echo "Script Name: " . $_SERVER['SCRIPT_NAME'] . "<br>";

// Display the request method
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";

// Display the server name
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";

// Display the user's IP address
echo "Client IP Address: " . $_SERVER['REMOTE_ADDR'] . "<br>";

// Display the user agent (browser info)
echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

// Display the file path
echo "File Path: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
?>



<!-- $_REQUEST -->
<!DOCTYPE html>
<html>
<head>
    <title>REQUEST Example</title>
</head>
<body>
    <h1>REQUEST Example</h1>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the form data using $_REQUEST
        $name = $_REQUEST['name'];
        $age = $_REQUEST['age'];

        // Display the form data
        echo "<h2>Form Data Received</h2>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Age: " . htmlspecialchars($age) . "<br>";
    } 
    
    else {
        // Display the form if not submitted
    ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Name: <input type="text" name="name"><br><br>
            Age: <input type="number" name="age"><br><br>
            <input type="submit" value="Submit">
        </form>
    <?php
    }
    ?>

</body>
</html>
