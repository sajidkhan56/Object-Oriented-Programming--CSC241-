<?php
//Write a program to perform addition, subtraction, multiplication, square  root  and  modulus  of  a  number(s).
//(Hint:  use  switch  operator  for  selection  of  calculator’s function).    

function  calculator($num1, $num2, $opearator)
{
    switch($opearator) {
        case '+': 
            $sum = $num1 + $num2;
            echo "Addition = ".$sum."</br>";
            break;
        case '-':
            $sub = $num1 - $num2;
            echo "Subtraction = ".$sub."</br>";
            break;
        case '*':
            $mul = $num1 * $num2;
            echo "Multiplication = ".$mul."</br>";
            break;
        case '%':
            $mod = $num1 % $num2;
            echo "Modulas = ".$mod."</br>";
            break;
        case 'root':
            $root = sqrt($num1);
            echo "Square root = ".$root."</br>";
            break;
        default:
        echo "No Match Found";
    }
}

calculator(4,2, '+');
calculator(4,2, '-');
calculator(4,2, '*');
calculator(4,2, '%');
calculator(4,2, 'root');
calculator(4,2, '');


?>