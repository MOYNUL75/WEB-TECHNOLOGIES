<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
echo "<br>";
?>


<?php
// This is a single-line comment
# This is also a single-line comment
?>

<?php
/*
This is a multiple-line comment block
that spans over multiple
lines
*/
?>


<!-- Variable -->
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

// Using double quotes for variables
echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";

// Using concatenation with single quotes
echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';
echo "<h2>" .$txt1. "</h2>";
echo "<br>";
?>


<?php
$name = "MOYNUL";
$subject = "CSE";

// Properly concatenate and add space between text and variables
echo "My name is " . $name;
echo "<br>";
echo "BSc " . $subject;
echo "<br>";
var_dump($name);
echo "<br>";
var_dump($subject);
echo "<br><br>";
?>

<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

// Output a concatenated string
echo "I love " . $txt . "!<br>";

// Output the sum of $x and $y
echo $x + $y;
echo "<br><br>";
?>


<!-- PHP Data Type -->
<?php
$x = 5985;
var_dump($x); // Output details about the integer variable $x
echo "<br>";

$y = 10.365;
var_dump($y); // Output details about the float variable $y
echo "<br><br>";
?>


<!-- Array -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "<br>";
var_dump($cars);
echo "<br>";
echo "<br>";
?>



<!-- Associative Array -->
<?php
// Define an associative array
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

// Output a specific value from the array
echo $car["model"] . "<br>";

// Iterate through the associative array and print all key-value pairs
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}
echo "<br>";
?>

<?php
$num = array( "One" => 1, "Two" => 2, "Three"=> 3);

echo $num["Two"]. "<br>";

foreach($num as $n => $v){
    echo "$n => $v <br>";
}
echo "<br>";
?>


<!-- PHP Object -->
<?php
class Car {
    // Constructor to initialize the Car object
    function __construct() {
        $this->model = "VW";
    }
}

class name{
    function __construct(){
        $this-> name= "MD MOYNUL ISLAM";
    }
}

// Create an object
$object1 = new Car();
$object2 = new name();

// Show object properties
echo $object1->model ."<br>";
echo $object2 ->name . "<br>";
echo "<br>";

?>



<!-- PHP Loop -->
<?php
// Using a while loop
$x = 1;
echo "While Loop";
echo "<br>";

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
echo "<br>";
?>

<?php
// Using a do-while loop
$x = 1;
echo "Do_While Loop";
echo "<br>";

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
echo "<br>";
?>



<?php
// Using a while loop
$x = 6;
echo "While Loop";
echo "<br>";

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
echo "<br>";
?>

<?php
// Using a do-while loop
$x = 6;
echo "Do_While Loop";
echo "<br>";

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
echo "<br>";
?>



<!-- PHP for and foreach Loop-->
<?php
// For loop example
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
echo "<br>";
?>

<?php
// Foreach loop example
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<br>";
?>


<!-- PHP conditional Statement -->
<?php
//if elseif else condition
$a = 20;
$b = 30;

if ($a > $b) {
    echo "a is bigger than b";
} 
elseif ($a == $b) {
    echo "a is equal to b";
} 
else {
    echo "a is smaller than b";
}

echo "<br><br>";
?>

<?php
//switch case contidion 
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red nor green!";
}
echo "<br><br>";
?>


<!-- PHP Function -->
<?php
function addNumbers(int $a, int $b) {
    return $a + $b;
}

echo addNumbers(5, 5);
echo "<br><br>";
?>


<!-- PHP Classes and Objects -->
<?php
class Fruit {
    // Properties
    public $name;

    // Method to set the name
    function set_name($name) {
        $this->name = $name;
    }

    // Method to get the name
    function get_name() {
        return $this->name;
    }
}

// Create an object of the Fruit class
$apple = new Fruit();
$apple->set_name('Apple');

// Create an object of the Fruit class
$banana = new Fruit();
$banana->set_name('Banana');

// Output the name of the fruit
echo $apple->get_name(). "<br>";
echo $banana->get_name();
echo "<br><br>";
?>


<?php
class Student {
    public $id;
    public $name;

    // Modern constructor using __construct
    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
}

// Create an object
$moynul = new Student("22-46984-1", "MD MOYNUL ISLAM");

// Show object properties
echo "ID: " . $moynul->id . "<br>";
echo "Name: " . $moynul->name . "<br>";

// Use var_dump to display detailed object structure
var_dump($moynul);
?>


</body>
</html>