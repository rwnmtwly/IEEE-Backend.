<?php
// Replace ? With Arithmetic Operators
echo (10 * 20 - 15 % 3 + 190 + 10) % 400; // 0
?>

<?php
$a = "10";

//needed output
echo $a;
echo "<br>";
echo gettype(+$a);
echo "<br>";
echo (int)$a;
echo "<br>";
echo gettype((int)$a);
echo "<br>";
echo $a +0;
echo "<br>";
echo gettype($a +0);
echo "<br>";
echo intval($a);
echo "<br>";

//research
echo gettype(intval($a));
echo "<br>";
settype($a, "integer");
echo $a;
echo "<br>";
echo gettype($a);
echo "<br>";
?>


<?php

$a = 10;
$b = 20;
echo ($a-$b)/$a;
?>


<?php
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a != $b); // True
var_dump($a <> $b); // True
var_dump($a <= $c); // True
var_dump($a !== $c); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype((float) $a) !== gettype($b)); // True
?>



<?php
$points = 10;

$points++;
$points++;
$points++;

echo $points; // 13

$points--;
$points--;
$points--;
$points--;
$points--;

echo $points; // 8;
?>



<?php
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";

// Method Two
$d = $a." ".$b." ".$c;

// Method Three
$d =$a." ";
$d.=$b." ";
$d.=$c;

// Method Four
$d = "{$a} {$b} {$c} ";

echo $d; // Elzero Web School
?>



<?php
$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + $a * $a) * $a; // 10000
?>



<?php
// Code 1
$a = @$b or die("Variable Not Found");

// Code 2
$f = @file("Not_A_File") or die("File Not Found");

// Code 3
(@include("Not_A_File")) or die("File Included Not Found");
?>