<!-- PHP Basics: Floats -->
<!-- floats also known as " Floating point numbers", "doubles", 
or "real numbers", can be specified using any of the following syntaxes: -->
<?php
$num_one = 1;
$num_two = 2;
$num_three = 3;



$distance_home = 1.2;
$distance_work = 2.5;

var_dump($distance_home + $distance_work + $num_three);

// Terms
// 1. Which is NOT a scalar type? array 
// 2. Which of the following is NOT a valid variable name? $1stStudent
// 3. $a = 3 + 5.5; What type of variable is $a? float
// 4. If I want to "dump" the details of a particular variable to the screen, which built-in function would I use? var_dump
// 5.Variables in PHP are represented by a dollar sign followed by the name of the variable. True

// Operators
$a = 5;
$b = 10;

var_dump($a * $b);
var_dump($a / $b);

$a = $a + 1;

var_dump($a);
$a++;
var_dump($a);
var_dump($a--);
var_dump(--$a);

?>