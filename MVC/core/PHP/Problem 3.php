<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="$username">
    <title>Welcome To <?php echo $username; ?></title>
  </head>
  <body>
    <h1><?php echo $username; ?></h1>
    <p>Here In <?php echo $username;?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $username;?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $username;?></footer>

    <?php
    $username = "Elzero Courses";
    ?>
  </body>
</html>


<?php
$name = "elzero";
$$name = "Web";

echo $$name;  #1
echo "<br>";
echo $elzero; #2 
echo "<br>";
echo "${$name}"; #3
echo "<br>";
echo ${$name}; #4
echo "<br>";
echo "Web"; #5
?>



<?php
$a = 200;
$b = &$a; #assigned by reference
$a = 100;

echo $b;
?>


<?php
echo $_SERVER['DOCUMENT_ROOT']; 
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SystemRoot'];
echo "<br>";
echo $_SERVER['OPENSSL_CONF'];
echo "<br>";
?>



<?php
// Reserved keywords in PHP
// 1. abstract
// 2. break
// 3. case
// 4. class
// 5. const
// 6. continue
// 7. echo
// 8. elseif
// 9. final
// 10. foreach
?>

<?php
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__; 
echo "<br>";
?>