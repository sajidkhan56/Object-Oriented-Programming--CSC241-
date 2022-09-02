<?php
//Create a class called Martix that represents a 3x3 matrix.
//This matrix contains a two-dimensional array of size 3x3.
//Provide the following member functions for this class:
//a) a no-argument constructor for initializing the matrix with 0 values.
//b) A one-argument constructor to initialize the member matrix to the matrix sent as an argument
//from the calling function. 
//c) An AddMatrix function for addition of two matrices d)
//A MultiplyMatrix method for finding the product of the two matrices.
//e) An isEqual function for checking the equality of two matrices

class Matrix
{
    public $matrix;

    function __construct()
    {
        $arguments = func_get_args();
        if($arguments) {
            $numberOfArguments = func_num_args();
            if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
                call_user_func_array(array($this, $function), $arguments);
            }
        } else {
            $this->matrix = array(array(0,0,0), array(0,0,0), array(0,0,0));
        }
    }

    function __construct1($matrix)
    {
        $this->matrix = $matrix;   
    }

    public function addMatrix($matrix1, $matrix2)
    {   
        for($i = 0; $i < 3; $i++) {
            for($j = 0; $j < 3; $j++) {
                echo $matrix1[$i][$j] + $matrix2[$i][$j]." ";
            }
            echo "</br>";
        }
    }

    public function mulMatrix($matrix1, $matrix2)
    {   
        
        for($i = 0; $i < 3; $i++) {
            for($j = 0; $j < 3; $j++) {
                $product = 0;
                for($k = 0; $k < 3; $k++) {
                    $product += $matrix1[$i][$k] * $matrix2[$k][$j];    
                }
                echo $product." ";
            }
            echo "</br>";
        }
    }

    
}

$matrix1 = new Matrix(array(array(1,2,3), array(4,5,6), array(7,8,9)));
$matrix2 = new Matrix(array(array(10,11,12), array(13,14,15), array(16,17,18)));

$matrix = new Matrix;
$matrix->addMatrix($matrix1->matrix, $matrix2->matrix);
echo "</br>";
$matrix->mulMatrix($matrix1->matrix, $matrix2->matrix);



?>