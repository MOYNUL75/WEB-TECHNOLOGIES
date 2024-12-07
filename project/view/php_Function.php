<html>
    <head>
        <h1>PHP Function</h1>
   </head>
<body>

<?php
$a = "";

// True because $a is empty
if (empty($a)) {
    echo "Variable 'a' is empty.<br>";
}
else{
    echo"Variable 'a' is not empty.<br>";
}
?>

<?php
$a = 0;
// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.<br>";
}
else{
    echo"Variable 'a' is not set.<br>";
}

$b = null;
// False because $b is NULL
if (isset($b)) {
  echo "Variable 'b' is set.";
}
else{
    echo"Variable 'a' is not set.<br>";
}
?>

<?php
$str = "Visit W3Schools";
$pattern = "/w3Schools/i";
echo preg_match($pattern, $str);
?>

<br>

<?php
$str = "Welcome to W3Schools";
$pattern = "/w3schools/i";
preg_match($pattern, $str, $matches, PREG_OFFSET_CAPTURE);
print_r($matches);
?>

</body>
</html>
