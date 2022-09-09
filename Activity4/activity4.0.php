<?php
//Create  a  class  called  Point  that  has  two  data  members:  x-  and  y-coordinates  of  the  point.
//Provide  a no-argument and a 2-argument constructor.
//Provide separate get and set functions for the each of the data members i.e. getX, getY, setX, setY.
//The getter functions should return the corresponding values to the calling function.
//Provide  a  display method to display  the point  in (x, y)  format. Make  appropriate functions const.
//Derive a class Circle from this Point class that has an additional data member: radius of the circle.
//The point from which this circle is derived represents the center of circle. 
//Provide a no-argument constructor to initialize the radius and center coordinates to 0.
//Provide a 2-argument constructor: one argument to initialize the radius of circle and the other argument
//to initialize the center of circle (provide an object of point  class  in  the  second  argument).
//Provide  a  3-argument  constructor  that  takes  three  floats  to initialize the radius, x-, and y-coordinates of the circle.
//Provide setter and getter functions for radius of the circle.
//Provide function to determine circumference of the circle.
//Write a main function to test this class.

class Point
{
    private $x_coordinate, $y_coordinate; 
    
    function __construct()
    {
        $arguments = func_get_args();

        if($arguments) {
            $numberOfArguments = func_num_args();
            if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
                call_user_func_array(array($this, $function), $arguments);
            }

        } else {
            $this->x_coordinate = 0;
            $this->y_coordinate = 0;
        }
    }

    function __construct2($x_coordinate, $y_coordinate)
    {
        $this->x_coordinate = $x_coordinate;
        $this->y_coordinate = $y_coordinate;
    }

    public function getX()
    {
        return $this->x_coordinate;
    }

    public function getY()
    {
        return $this->y_coordinate;
    }

    public function setX($x_coordinate)
    {
        $this->x_coordinate = $x_coordinate;
    }

    public function setY($y_coordinate)
    {
        $this->y_coordinate = $y_coordinate;
    }

    public function displayPoint()
    {
        define('X_COORDINATE', $this->x_coordinate, true);
        define('Y_COORDINATE', $this->y_coordinate, true);

        return ("(".X_COORDINATE.",".Y_COORDINATE.")");
    }
} 

class Circle extends Point
{
    private $radius;

    function __construct()
    {   
        $arguments = func_get_args();

        if($arguments) {
            $numberOfArguments = func_num_args();
            if (method_exists($this, $function = '__constructcircle'.$numberOfArguments)) {
                call_user_func_array(array($this, $function), $arguments);
            }
        } else {
            parent::__construct();
            $this->radius = 0;
        }
        
    }

    function __constructcircle2($radius, object $point)
    {
        $x_coordinate = $point->getX();
        $y_coordinate = $point->getY();
        
        parent::__construct($x_coordinate, $y_coordinate);
        $this->radius = $radius;
        
        
    }

    function __constructcircle3($radius, $x_coordinate, $y_coordinate)
    {
        $this->radius = $radius;
        parent::__construct($x_coordinate, $y_coordinate);
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function findCircumference()
    {
        return (2*(3.14)*($this->radius));
    }
}
$point = new Point(1,2);
$circle = new Circle(1, $point); 
echo "Points".$circle->displayPoint()."</br>";
echo "Circumference".$circle->findCircumference();

?>