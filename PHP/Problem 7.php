<?php
function greeting($person,$gender =null){
    if($gender==="Male"){
        echo "Hello Mr $person"."<br>";
    }
    elseif($gender==="Female"){
        echo "Hello Miss $person"."<br>";
    }
    else{
        echo "Hello $person"."<br>";
    }
    
}
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
?>


<?php
function get_arguments(){
    $all="";
    foreach(func_get_args() as $arg){
        $all.=$arg." ";
    }
    echo "<br>";
    return $all;
}
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
?>

<?php
function sum_all(){
    $sum =0;
    foreach(func_get_args() as $num){
        if($num==5){
            continue;
        }
        if($num == 10){
            $num*=2;
        }
        $sum+=$num;
    }
    echo "<br>";
    return $sum;
}
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
?>


<?php
function multiply(){
    $product =1;
    foreach(func_get_args() as $num){
        if(is_string($num)){
            continue;
        }
        elseif(is_float($num)){
            $num=(int)$num;
        }
        $product*=$num;
    }
    echo "<br>";
    return $product;
}
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
?>

<?php
function check_status($a, $b, $c) {
    $name = "";
    $age = 0;
    $status = false;
    
    if (is_string($a)) {
      $name = $a;
    } elseif (is_string($b)) {
      $name = $b;
    } elseif (is_string($c)) {
      $name = $c;
    }
    
    if (is_numeric($a)) {
      $age = $a;
    } elseif (is_numeric($b)) {
      $age = $b;
    } elseif (is_numeric($c)) {
      $age = $c;
    }
    
    if (is_bool($a)) {
      $status = $a;
    } elseif (is_bool($b)) {
      $status = $b;
    } elseif (is_bool($c)) {
      $status = $c;
    }
    
    $message = "Hello $name, Your Age Is $age, You Are ";
    if ($status) {
      $message .= "Available For Hire";
    } else {
      $message .= "Not Available For Hire";
    }
    
    return $message;
  }
  
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo "<br>";
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo "<br>";
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo "<br>";
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
  ?>

  <?php
  function calculate($num1, $num2, $operation = "add") {
    switch (strtolower($operation)) {
      case "add":
        return $num1 + $num2;
      case "subtract":
      case "s":
        return $num1 - $num2;
      case "multiply":
      case "m":
        return $num1 * $num2;
      default:
        return $num1 + $num2;
    }
  }
  
  echo calculate(10, 20) . PHP_EOL; // 30
  echo calculate(10, 20, "a") . PHP_EOL; // 30
  echo calculate(10, 20, "s") . PHP_EOL; // -10
  echo calculate(10, 20, "subtract") . PHP_EOL; // -10
  echo calculate(10, 20, "multiply") . PHP_EOL; // 200
  echo calculate(10, 20, "m") . PHP_EOL; // 200
  ?>


<?php
function calculate(int $num_one, int $num_two): float {
    return $num_one + $num_two;
  }
  
  echo calculate(20, 10); // 30
  echo "<br>";
  echo gettype(calculate(20, 10)); // Double
?>  

<?php
$message = "Hello";
function Hello($name) {
  $greeting = explode(" ", $message)[0];
  return $greeting . " " . $name;
}
echo Hello("Osama") . PHP_EOL; // Hello Osama
?>

<?php
$greet = function ($name) {
    return "Greetings " . $name;
  };
  
  $greet = fn ($name) => "Greetings " . $name;

  echo $greet("Osama") . PHP_EOL; // Greetings Osama
  ?>
  
  