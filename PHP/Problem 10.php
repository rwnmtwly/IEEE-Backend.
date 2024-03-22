<?php
echo rand(10,20)."<br>";
?>




<?php
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
echo $friends[array_rand($friends,1)]. "<br>";
?>




<?php
$num1 = 11.5; // 11
echo round($num1,0, PHP_ROUND_HALF_DOWN). "<br>";
$num2 = 9.4898; // 9.5
echo round($num2, 1). "<br>";
$num3 = -7.5; // -7
echo round($num3, 0 , PHP_ROUND_HALF_ODD), "<br>";
?>



<?php
$filters = filter_list();
$new_list = [];
foreach($filters as $key){
    $new_key = filter_id($key);
    $new_list[$new_key] = $key;
}

echo '<pre>';
print_r($new_list);
echo '</pre>';
?>



<?php
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

if(filter_var($url1, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE)) echo "A Valid URL". "<br>";
else echo "Not A Valid URL". "<br>";
if(filter_var($url2, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE)) echo "A Valid URL". "<br>";
else echo "Not A Valid URL". "<br>";
if(filter_var($url3, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE)) echo "A Valid URL". "<br>";
else echo "Not A Valid URL". "<br>";
if(filter_var($url4, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE)) echo "A Valid URL". "<br>";
else echo "Not A Valid URL". "<br>";
?>



<?php
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1, FILTER_SANITIZE_URL). "<BR>";
echo filter_var($url2, FILTER_SANITIZE_URL). "<BR>";
echo filter_var($url3, FILTER_SANITIZE_URL). "<BR>";
echo filter_var($url4, FILTER_SANITIZE_URL). "<BR>";
?>