<?php
$a = 100;
$b = 200;
$c = 100;

if($a<$b and $a==$c and $a + $c ==$b){
    echo "Yes";
}
?>




<?php
// Test Case 3
$a = 200;
$b = 200;
$c = 100;

// A Is Larger Than c
if($a>$b){
    echo "A Is Larger Than B";
}
elseif($a>$c){
    echo "A Is Larger Than C";
}
else{
    echo "A Is Not Larger Than B Or C";
}
?>





<?php
$username = $_POST['user'];
$admins = ["Osama", "Ahmed", "Sayed"];
if($_SERVER["REQUEST_METHOD"] === "POST"){
    echo"the request method is post and the username is $username";
    echo "<br>";
    if(in_array($username, $admins)){
        echo "This Username $username Is Admin";
    }
}
?>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>


<?php
$a = 30;
$b = 20;
$c = 10;

echo ($a+$b==$c) ? "A + B = C":(($a + $c === $b)? "A + C = B":(($b + $c === $a)?"B + C = A": "The End")); 
?>


<?php
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) echo "The Age Is Good To Go<br>"; if (gettype($name) === "string") echo "The Name Is Good To Go<br>"; if ($country === "Egypt") echo "The Country Is Good To Go<br>";
?>


<?php
$genre = "Hack And Slash";

switch ($genre){
    case "RPG":
        echo "I Recommend Ys Games";
        break;
    case "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
    case "FPS":
        echo "I Recommend Uncharted Games";
        break;
    case "Platform":
        echo "I Recommend Megaman Games";
        break;
    case "Puzzle":
        echo "I Recommend Megaman Games";
        break;
    default:
    echo "I Recommend Shadow Of Mordor And Shadow Of War";
}
?>

<?php
$num_one = 23;
$num_two = 5;
$op = "+";

switch($op){
    case "+":
        echo $num_one + $num_two;
        break;
    case "-":
        echo $num_one - $num_two;
        break;
    case "/":
        echo $num_one / $num_two;
        break;   
    case "*":
        echo $num_one * $num_two;
        break;
    default:
     echo "Unknown Operation"; 
}
?>


<?php
$day = "Sat";
if($day==="Sat" ||$day==="Sun"|| $day==="Mon"){
    echo "We Are Open All The Day";
}
elseif($day === "Tue"||$day === "Wed"){
    echo "We Are Open From 08:12";
}
elseif($day ==="Thu" ||$day === "Fri"){
    echo "We Are Closed";
}
else{
    echo "Unknown Day";
}
?>
