<?php 
//A palindrome  is a number or a text  phrase that reads the same  backwards as forwards.
//For example, each  of  the  following  five‐digit  integers  is  a  palindrome:  12321,  55555,  45554,  and  11611.
//Write  a program  that  reads  in  a  five‐digit  integer  and  determines  whether  it  is  a  palindrome.
//(Hint:  use  the division and modulus operators to separate the number into its individual digits).

function palindrome(int $num)
{   
    $array = [];
    for ($i = 0; $i < 5; $i++) {
        $last_digit = $num % 10;
        $num = $num/10;
        array_push($array, $last_digit);
    }
    
    $length = count($array);
    $itrations = floor($length/2);
    $k = $length - 1;
    $message = "";
    for($j = 0; $j < $itrations; $j++) {
        if( $array[$j] == $array[$k]) {
            $k--;
            $message = "The given number is palindrome";
        } else {
            $message = "The given number is not palindrome";
            break;
        }
    }

    return $message;
}

echo palindrome(12322);

?>