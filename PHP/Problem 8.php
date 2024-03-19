<?php
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str[$num_one]=$let_one;

$str = strtr($str, "%", $let_two);

echo $str; // Elzero
echo "<br>";
?>


<?php
$str = "Orezle"; 
echo ucfirst(strrev(lcfirst($str)));
// Elzero
echo "<br>";
?>

<?php
$str = 'aAa';
$num = 3;
$char = "_";

echo chunk_split(str_repeat(strtolower($str), $num), $num,"_");
// aaa_aaa_aaa_
echo "<br>";
?>

<?php
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str,"<b>");
// <b>Elzero</b>
echo "<br>";
?>

<?php
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e,4);
echo substr_count($str, lcfirst($o),7,10);

echo "<br>";

// 1
// 2
?>



<?php 
$chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars). "<br>";

?>

<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

$result =ucfirst(strtolower(implode(array_filter($chars, 'is_string'))));

echo $result; // Elzero
?>
