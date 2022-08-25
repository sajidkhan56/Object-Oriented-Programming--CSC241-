<?php
//Write a program that would store one hundred random numbers,
//ranging from 0 to 99, in an array; and displays the first repeating number in the array.

$random_number = [];

for ($i = 0; $i < 100; $i++) {
    array_push($random_number,rand(0,100));
}

for($j = 0 ; $j < 100; $j++) {
    for($k = 0; $k < 100; $k++) {
        if($random_number[$j] == $random_number[$k] && $j != $k) {
            echo "First repeating number ".$random_number[$k]."</br>";
            break 2;
        }
    }
}

?>