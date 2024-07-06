<?php
$expire_time = strtotime("+2 months +5 days");

setcookie("site[layout]", "boxed", $expire_time, "/");
setcookie("site[font]", "Swat", $expire_time, "/");
setcookie("site[color]", "blue", $expire_time, "/");

header("Refresh:0");
?>



<?php
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

$color = $_COOKIE['site']['color'];
$font = $_COOKIE['site']['font'];

echo "\"Your Color Is $color And Your Font Is $font\"";
?>


<?php
$expire_time = strtotime("-1 day"); 

setcookie("site[layout]", "", $expire_time, "/");

header("Refresh:0");
?>

<?php
setcookie("site[font]", $_COOKIE['site']['font'], 0, "/");
setcookie("site[color]", $_COOKIE['site']['color'], 0, "/");
?>


