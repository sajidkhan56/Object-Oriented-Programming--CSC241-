<?php
//Create  a  class  RationalNumber  that  stores  a  fraction  in  its  original  form  
//(i.e.  without  finding  the equivalent floating pointing result). 
//This class models a fraction by using two data members: numerator and denominator.
//For this class, provide the following functions: 
//a) A  no-argument  constructor  that  initializes  the  numerator  and  denominator  of  a  fraction  to some fixed values.
//b) A two-argument constructor that initializes the numerator and denominator to the values sent from calling function.
//This constructor should prevent a 0 denominator in a fraction, reduce or simplify fractions that are not in reduced form,
//and avoid negative denominators. 
//c) A function AddFraction for addition of two rational numbers.
//Two fractions a/b and c/d are added together as: (a*d)+(b*c)/(b*d). 
//d)A function SubtractFraction for subtraction of two rational numbers.
//Two fractions a/b and c/d are subtracted from each other as: (a*d)-(b*c)/(b*d). 
//e) A function MultiplyFraction for subtraction of two rational numbers. 
//Two fractions a/b and c/d are multiplied together as: (a*c)/(b*d). 
//f) A function DivideFraction for division of two rational numbers.
//If fraction a/b is divided by the fraction c/d, the result is (a*d)/(b*c). 
//g)Provide the following functions for comparison of two fractions 
//a. isGreater:  should  return whether  1st  fraction  is greater than 2nd or not. 
//b. isSmaller:  should  return whether  1st  fraction  is smaller than 2nd or not. 
//c. isEqual: should return whether 1st fraction equal to 2nd or not.
//h) Provide the following functions to check the equality of two fractions 
  
class RationalNumber
{
  public $numerator, $denominator;

  function __construct()
  {
    $arguments = func_get_args();
    if($arguments) {
        $numberOfArguments = func_num_args();
        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    } else {
        $this->numerator = 1;
        $this->denominator = 1;    
    }
  }

  function __construct2($numerator, $denominator)
  { 
    $this->numerator = $numerator;
    if($denominator >= 1) {
        $this->denominator = $denominator;
    } else {
        echo "Denominator will not be ZERO or less than zero";
        die();      
    }
  }

  public function addFraction($rational_number1, $rational_number2)
  {
    $numerator = ($rational_number1->numerator * $rational_number2->denominator) + ($rational_number2->denominator * $rational_number2->numerator);
    $denominator = $rational_number1->denominator * $rational_number2->denominator;
    return $numerator."/".$denominator;
    
  }

  public function subFraction($rational_number1, $rational_number2)
  {
    $numerator = ($rational_number1->numerator * $rational_number2->denominator) - ($rational_number2->denominator * $rational_number2->numerator);
    $denominator = $rational_number1->denominator * $rational_number2->denominator;
    return $numerator."/".$denominator;
    
  }

  public function mulFraction($rational_number1, $rational_number2)
  {
    $numerator = $rational_number1->numerator * $rational_number2->numerator;
    $denominator = $rational_number1->denominator * $rational_number2->denominator;
    return $numerator."/".$denominator;

  }

  public function divFraction($rational_number1, $rational_number2)
  {
    $numerator = $rational_number1->numerator * $rational_number2->denominator;
    $denominator = $rational_number1->denominator * $rational_number2->numerator;
    return $numerator."/".$denominator;

  }

  public function comparisionTwoFraction($rational_number1, $rational_number2)
  {
    if(($rational_number1->numerator / $rational_number1->denominator) > ($rational_number2->numerator / $rational_number2->denominator)) {
        return "Fraction one isGreater";
    } else if(($rational_number1->numerator / $rational_number1->denominator) < ($rational_number2->numerator / $rational_number2->denominator)) {
        return "Fraction one isSmaller";
    } else if(($rational_number1->numerator / $rational_number1->denominator) == ($rational_number2->numerator / $rational_number2->denominator)) {
        return "Both Fraction equals";
    } else {
        return "Both Fraction are not equals";
    }
  }
}

$rational_number1 = new RationalNumber(1,2);
$rational_number2 = new RationalNumber(1,2);

$rational_number = new RationalNumber();
echo "Addtion: ".$rational_number->addFraction($rational_number1, $rational_number2)."</br>";
echo "Subtraction: ".$rational_number->subFraction($rational_number1, $rational_number2)."</br>";
echo "Multiplication: ".$rational_number->mulFraction($rational_number1, $rational_number2)."</br>";
echo "Division: ".$rational_number->divFraction($rational_number1, $rational_number2)."</br>";
echo "Comparison: ".$rational_number->comparisionTwoFraction($rational_number1, $rational_number2)."</br>";

?>