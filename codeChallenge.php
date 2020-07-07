<!-- Code Challenge -->

<?php

$firstName = "Rasmus";
$lastName = "Lerdorf";
$fullName = "$firstName " . "$lastName";
echo "$fullName was the original creator of PHP \n";


$studentOneName = 'Dave';
$studentOneGPA = 3.8;

$studentTwoName = 'Treasure';
$studentTwoGPA = 4.0;

//Place your code below this comment

if ($studentOneGPA == 4.0) {
    echo $studentOneName . " made the Honor Roll";
} else {
    echo $studentOneName . " has a GPA of " . $studentOneGPA;
}

if ($studentTwoGPA == 4.0) {
    echo $studentTwoName . " made the Honor Roll";
} else {
    echo $studentTwoName . " has a GPA of " . $studentTwoGPA;
}


?>