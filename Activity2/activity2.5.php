<?php
//Create a class Rectangle. The class has attributes length and width, each of which defaults to 1.
//Provide methods that calculate the perimeter and the area of the rectangle.
//Provide set and get methods for both length and width.
//The set methods should verify that length and width are each numbers greater than or equal to 0.
//Write a program to test class Rectangle.

class Rectangle
{
    private $length, $width;

    function __construct()
    {
        $this->length = 1;
        $this->width = 1;
    }

    public function setLength($length)
    {
        if($length >= 0 ) {
            $this->length = $length;
        } else {
            echo "The length will not be negitive";
            die();
        }
    }

    public function getLength()
    {   
        return $this->length;
    }

    public function setWidth($width)
    {
        if($width >= 0 ) {
            $this->width = $width;
        } else {
            echo "The width will not be negitive";
            die();
        }
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function calculatePerimeter()
    {
        $perimeter = ($this->length + $this->width)*2;
        return $perimeter;
    }

    public function areaOfRectangle()
    {
        return $this->width * $this->length;
    }
}

$rectangle = new Rectangle;
$rectangle->setLength(5);
$rectangle->setWidth(5);
echo $rectangle->calculatePerimeter();
echo "</br>";
echo $rectangle->areaOfRectangle(); 
?>