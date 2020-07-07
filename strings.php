<?php
$name = 'Heidi';
$string_one = "Learning to display \"Hello $name!\" to the screen.\n";
$string_one = 'Learning to display "Hello ' . $name . ' !" to the screen.' . "\n";
// OR 
$string_one = 'Learning to display ';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';
$string_one .= "\n";
// echo $string_one;
// \n means next line 

$isReady = true;
// var_dump($isReady);
$isReady = false;
// var_dump($isReady);

var_dump(1 + "2");
$a = 10;
$b = '10';
var_dump($a == $b);
var_dump($a === $b);

if ($string_one == 'Learning to display "Hello Heidi!" to the screen') {
    echo 'the values match';
} elseif ($string_one == "") {
    echo '$string_one is empty';
} else {
    echo 'the values do NOT match';
}
