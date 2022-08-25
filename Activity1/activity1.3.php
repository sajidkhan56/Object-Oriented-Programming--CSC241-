<?php
//Write a function that reverses elements stored in an array
//array: 11    22    33   44   55
//Reverse of the array is: 55    44   33   22   11
 

function reverse(Array $array)
{   
    rsort($array);
    echo "</br> Reverse of the array is:";
    foreach($array as $key) {
        echo $key." ";
    }
}

$array = [11, 22, 33, 44, 55];
echo "Array is:";
    foreach($array as $key) {
        echo $key." ";
    }
reverse($array);

?>