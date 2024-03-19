<?php
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
  ];

$lower_friends = array_change_key_case($friends);
echo '<pre>';
print_r(array_chunk($lower_friends, 2, True));
echo '</pre>';
echo "<br>";
?>


<?php 
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo '<pre>';
print_r(array_change_key_case(array_combine($codes, $means)));
echo '</pre';
echo '<br>';
?>

<?php
$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

echo '<pre>';
print_r(array_change_key_case(array_reverse(array_flip($friends), TRUE)));
echo '</pre>'. '<br>';
?>

<?php
$nums = [10, 20, 30];

$result = array_reduce($nums, function ($carry, $item) {
  return $carry + $item;
}, 0);

echo $result . '<br>'; // 60

$nums = [10, 20, 30];

$result = array_sum($nums);

echo $result . '<br>'; // 60

$nums = [10, 20, 30];

$result = 0;

foreach ($nums as $num) {
  $result += $num;
}

echo $result . '<br>'; // 60
?>

<?php
$nums = [5, 10, 20, 5, 30, 40];

$filteredNums = array_filter($nums, function ($item) {
  return $item !== 5;
});

$result = array_sum($filteredNums);

echo $result . '<br>'; // 100
?>

<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
echo '<pre>';
print_r(array_pad($chars,10,"@"));
echo '</pre';
?>

<?php
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
echo current($names) . "<br>"; // "Ahmed"

next($names);
echo current($names) . "<br>"; // "Sayed"

reset($names);
echo current($names) . "<br>"; // "Osama"

end($names);
echo current($names) . "<br>"; // "Ali"

prev($names);
echo current($names) . "<br>"; // "Mahmoud"
?>

<?php
$chars = ["A", "B", "C"];

array_push($chars, "D");

var_dump($chars);

//2
$chars = ["A", "B", "C"];

$chars = array_unshift($chars, "D");

var_dump($chars);

//3
$chars = ["A", "B", "C"];

$chars = array_unshift($chars, "D");

var_dump($chars);

//4
$chars = ["A", "B", "C"];

array_splice($chars, count($chars), 0, "D");

var_dump($chars);

?>
 

<?php
$nums = [1, 2, 3, 4, 5, 6];

$result = array_slice($nums, -5, 3);

var_dump($result);
?>

<?php
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];


$result = array_merge($mix, $nums);

$result = array_filter($result, 'is_numeric');

sort($result);

print_r($result);

?>

<?php
$arr = ["A", "B", "C", "D", "E"];

$count = 0;
foreach ($arr as $element) {
    $count++;
}

echo $count;
?>

<?php
$nums = [11, 2, 10, 7, 20, 50];

$total = 0;
foreach ($nums as $num) {
    if (is_numeric($num)) {
        $total += $num;
    }
}

echo $total;
?>

<?php
$nums = [10, 100, -20, 50, 30];

$largest = $nums[0]; // نفترض أن العنصر الأول هو الأكبر

foreach ($nums as $num) {
    if ($num > $largest) {
        $largest = $num;
    }
}

echo $largest;
?>

<?php
$nums = [10, 100, -20, 50, 30];

$smallest = $nums[0];

foreach ($nums as $num) {
    if ($num < $smallest) {
        $smallest = $num;
    }
}

echo $smallest;
?>


<?php
$chars = ["o", "r", "e", "z", "l", "E"];

$output = "";
$output .= $chars[5]; // E
$output .= $chars[3]; // z
$output .= $chars[2]; // e
$output .= $chars[4]; // l
$output .= $chars[1]; // r
$output .= $chars[0]; // o

echo $output;
?>

<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

$oddNumbers = [];

foreach ($mix as $item) {
    if (is_numeric($item) && $item % 2 != 0) {
        $oddNumbers[] = $item;
    }
}

sort($oddNumbers);

print_r($oddNumbers);
?>

<?php
$nums = [1, 2, 3, 4, 5, 6];

$count = count($nums);

for ($i = $count - 1; $i > 0; $i--) {
    
    $randomIndex = mt_rand(0, $i);

   
    $temp = $nums[$i];
    $nums[$i] = $nums[$randomIndex];
    $nums[$randomIndex] = $temp;
}

print_r($nums);
?>

<?php
$title = "E&z\$r0 W\$b Sch00&";

$result = str_replace(['&', '$', '0'], ' ', $title, $count);

echo $result . "\n";
echo "Number of replaces: $count";
?>

<?php