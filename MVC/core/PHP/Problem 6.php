<?php
$index = 10;
while($index>0){
    echo $index;
    echo "<br>";
    $index-=1;
}
?>


<?php
$index = 0;
for($i = $index; $i<=20; $i+=2){
    echo $i;
    echo "<br>";
}

while($index<=20){
    echo $index;
    echo "<br>";
    $index+=2;
}

do{
    echo $index;
    echo "<br>";
    $index+=2;
}
while($index<=20);
?>

<?php
$num = 2;
while ($num < 520){

    echo ($num - 1) . "<br>";

    $num = $num * 2 + 1;

}
?>

<?php
$start = 10;
$end = 0;
$stop = 3;

for($i = $start; $i<=3; $i--){
    if($i<10){
        echo $end . $i;
    }
}
?>


<?php
$start = 10;
$end = 0;
$stop = 3;

for($i = $start; $i>=$end; $i--){
    if($i<10){
        echo "0";
    }
    echo $i;
    echo "<br>";
    if($i == $stop){
        break;
    }
}
?>

<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for($i = $start+1; $i<count($mix); $i++){
    if(gettype($mix[$i])==="integer"){
        echo($mix[$i])."<br>";
    }
}
?>

<?php
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach($money as $key=>$value){
    echo "The Name Is $key And I Need $value Pound From Him". "<br>";
}
?>


<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$count_num = 0;
$count_letters =0;
for($i = 0; $i<count($mix); $i++){
    if(gettype($mix[$i])=== "integer"){
        echo $mix[$i]."<br>";
        $count_num++;
    }
    if(gettype($mix[$i])==="string"){
        $count_letters++;
    }
}
echo "$count_num Numbers Printed"."<br>";
echo "$count_letters Letters Ignored";
?>

<?php
$nums = [1, 13, 12, 20, 51, 17, 30];
foreach($nums as $even){
    if($even%2==0){
        echo $even/2;
        echo "<br>";
    }
}
?>

<?php
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

$count =0;
for($i = 0; $i<count($names);$i++){
    if($names[$i]==="Osama"||$names[$i]==="Sayed"){
        echo $names[$i]."<br>";
        $count++;
    }
    if($count==2){
        break;
    }
}
?>


<?php
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
$size = count($nums);

foreach($nums as $key=>$num){

    $opposite_number= $size-1-$key;
    echo $num. " + ".$nums[$opposite_number]." = ".($num+$nums[$opposite_number])."<br>";
    
}
?>


