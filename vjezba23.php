<?php

$current_date = Date('d.m.Y');
$current_time = Date('h');
$age = 25;
$name = 'John';

$gender = 'm';
$time = 'morning';
$time_message = $user_message = "";
// (if, if else, else)
if($current_time >= 0 && $current_time <= 12){
    $time_message = 'morning';
}else if($current_time > 12 && $current_time <= 18){
    $time_message = 'afternoon';
}else if($current_time > 18 && $current_time < 0){
    $time_message = 'evening';
}else{
    $time_message = 'day';
}
// (switch, case, break:, default)
switch($gender){
    case 'm':
        $user_message = ( ($age < 18)  ? 'boy' : 'man' );
    break;
    case 'f':
        $user_message = ( ($age < 18) ? 'girl' : 'woman' );
    break;
    default:
        $user_message = 'someone';
    break;
}



echo "Good {$time_message} {$user_message}, " . $name . ". Welcome to our site!<br>";
echo "Your age is " . $age . ".<br>";
echo "Current Date: " . $current_date . "<br>";

// $broj = (3 < 5) ? 4 : 5;
// echo $broj;

// Ternarni operator
/**
 * Provjeri uslov (a)
 * Uslov tacan izvrsi (b)
 * Uslov nije tacan - izvrsi (c)
 * (a > 5)? echo "A je vece od pet"; : echo "A nije vece od pet";
 */
?>