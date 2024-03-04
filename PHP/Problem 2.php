<?php
echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5); // 50
echo gettype((int)15.2 + (int)14.7 + (int) (10.5 + 10.5)); // Integer
?>


<?php
//100

// Method One
echo gettype(100);
// Method Two
var_dump(100);
// Method three
echo get_debug_type(100);
?>

<?php
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\""
?>

<?php

echo nl2br("We\nLove\nElzero\nWeb\nSchool");

?>

<?php
echo nl2br(<<< 'Now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
Now);
?>


<?php
$something = "Programming";

echo <<<"code"
Hello \\PHP\\ We Love $something
code;

?>


<?php
echo 1+ (int)"Hello PHP";
echo '<br>';
echo gettype(1+(int)"Hello PHP");

?>


<?php
echo '<pre>' 
print_r([
    [FrontEnd] => Array,
]);
echo '</pre>' 
?>


<?php
echo '<pre>'; 
print_r([
    "Frontend" => [
        0 => "HTML",
        1 => "CSS",
        "JS" => [
            "Vuejs" => [
                "2" => "v2",
                "3" => "v3"
            ],
            0 => "Reactjs",
            1 => "Svelte"
            
        ]
        ],
    "Backend" =>[
        0 => "PHP",
        1 => "MYSQL",
        2 => "Security"
    ],
    0 => "Git",
    1 => "Github",
    "Testing" => [
        0 => "Unit Testing",
        1 => "End To End",
        2 => "Integration"
    ]

]);
echo '</pre>'; 
?>

