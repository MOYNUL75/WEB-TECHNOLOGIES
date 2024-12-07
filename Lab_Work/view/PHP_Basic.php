<html>
    <head>
        <h1>This is PHP</h1>
   </head>
<body>
    <?php

$txt ="Hello world!";
$x =5;
$y =10.5;
  echo"I love ". $txt ."!";
  echo "<br>";
  echo$x + $y;

  echo "<br>";

  $cars =array("Volvo","BMW","Toyota");
  var_dump($cars);

  echo "<br>";

  class Car {
    // Constructor method, updated for PHP 5+ compatibility
    function __construct() {
        $this->model = "VW";
    }
}

// Create an object
$herbie = new Car();

// Show object properties
echo $herbie->model;

echo "<br>";

for ($x = 0; $x <= 10; $x++){
    echo "The number is: $x <br>";
}

echo "<br>";

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $val) {
    echo "$x = $val<br>";
}
?>
</body>
</html>
