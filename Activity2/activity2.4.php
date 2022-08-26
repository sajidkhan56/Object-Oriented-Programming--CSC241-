<?php
//Create a class called Complex for performing arithmetic with complex numbers.
//Complex numbers have the form realPart + imaginaryPart * i where i is sqrt(-1).
//Write a program to test your class. Use variables to represent the private data of the class.
//Provide a constructor that enables an object of this class to be initialized when it is declared.
//Provide a no-argument constructor with default values in case no initializers are provided.
//Provide public methods that perform the following operations:
//a) Add two Complex numbers: The real parts are added together and the imaginary parts are added together. 
//b) Subtract two Complex numbers: The real part of the right operand is subtracted from the real part of the left operand,
//and the imaginary part of the right operand is subtracted from the imaginary part of the left operand.
//c) Print Complex numbers in the form (a+b), where a is the real part and b is the imaginary part.
//d) In class Complex, define a multiply method that returns the product of two Complex numbers.


class Complex
{
    private $real_part, $imaginary_part;

    function __construct()
    {   
        $arguments = func_get_args();
        if($arguments) {
            $numberOfArguments = func_num_args();
            if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
                call_user_func_array(array($this, $function), $arguments);
            }
        } else {
            $this->real_part = 0;
            $this->imaginary_part = 0;    
        }
         
    }

    function __construct2($real_part, $imaginary_part)
    {   
        substr_replace($imaginary_part ,"", -1);
        $this->real_part = $real_part;
        $this->imaginary_part = (int) $imaginary_part;
    }

    public function addTwoComplexNumbers($number1, $number2)
    {
        $real_part = $number1->real_part + $number2->real_part;
        $imaginary_part = $number1->imaginary_part + $number2->imaginary_part;
        return $real_part."+".(string) $imaginary_part."i";
    }

    public function subTwoComplexNumbers($number1, $number2)
    {
        $real_part = $number1->real_part - $number2->real_part;
        $imaginary_part = $number1->imaginary_part - $number2->imaginary_part;
        return $real_part."+".(string) $imaginary_part."i";
    }

    public function multiply($number1, $number2)
    {
        $number_one_one = $number1->real_part * $number2->real_part;
        $number_one_two = $number1->real_part * $number2->imaginary_part;
        $number_two_one = $number1->imaginary_part * $number2->real_part;
        $number_two_two = $number1->imaginary_part * $number2->imaginary_part;
        
        $number_i = $number_one_two + $number_two_one;
        return $number_one_one."+".$number_i."i+".$number_two_two."i*i";
    }
}

$number1 = new Complex(1,'15i');
$number2 = new Complex(10,'15i');


$two_number = new Complex;
echo $two_number->addTwoComplexNumbers($number1, $number2);
echo "</br>";
echo $two_number->subTwoComplexNumbers($number1, $number2);
echo "</br>";
echo $two_number->multiply($number1, $number2);

?>