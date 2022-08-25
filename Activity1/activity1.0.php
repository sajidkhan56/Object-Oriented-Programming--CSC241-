<?php
//Write a function that computes the square of the elements stored in an array
//array is: 9   10    20    8    7 
//Square of the elements of array is: 81    100    400    64    49 

function  square(Array $array)
{   
    echo "Square of the elements of array is:";
    foreach( $array as $value) {
          echo pow($value, 2)." ";  
    }
}
$array = [9, 10, 20, 8, 7];
square($array);

?>