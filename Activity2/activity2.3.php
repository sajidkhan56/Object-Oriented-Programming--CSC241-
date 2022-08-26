<?php
//Imagine a tollbooth at a bridge. Cars passing by the booth are expected to pay a 50 cent toll.
//Mostly they do, but sometimes a car goes by without paying.
//The tollbooth keeps track of the number of cars that have  gone  by,  and  of  the  total  amount  of  money  collected.
//Model  this  tollbooth  with  a  class  called tollBooth.
//The  two  data  items  are to  hold  the  total  number  of  cars,  and to  hold  the  total  amount  of  money  collected.
//A  constructor  initializes  both  of  these  to  0.
//A member function called payingCar() increments the car total and adds 0.50 to the cash total.
//Another function,  called  nopayCar(),  increments  the  car  total  but  adds  nothing  to  the  cash  total.
//Finally,  a member function called display() displays the two totals.
//Include  a  program  to  test  this  class. 
//This  program  should  allow  the  user  to  push  one  key  to  count  a paying car, and another to count a nonpaying car.


class TollBooth
{
    private $total_cars, $total_amount;

    function __construct()
    {
        $this->total_cars = 0;
        $this->total_amount = 0;
    }

    public function payingCar()
    {
        $this->total_cars += 1;
        $this->total_amount += 0.50;
    }

    public function noPayCar()
    {
        $this->total_cars += 1;
    }

    public function display()
    {
        return "Total Cars Count ".$this->total_cars." Total amount collected ".$this->total_amount;
    }
}

$tollbooth = new TollBooth();
$tollbooth->payingCar();
$tollbooth->payingCar();
$tollbooth->payingCar();
echo $tollbooth->display()."</br>";
$tollbooth->noPayCar();
$tollbooth->noPayCar();
$tollbooth->noPayCar();
echo $tollbooth->display()."</br>";

?>