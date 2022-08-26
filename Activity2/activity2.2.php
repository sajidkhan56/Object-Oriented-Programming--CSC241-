<?php
//Modify your Heater class to define three new fields: min, max, and increment.
//The values of min and max should be set by parameters passed to the constructor.
//The value of increment should be set to 5 in the constructor.
//Modify the definitions of warmer and cooler so that they use the value of increment rather than an explicit value of 5.
//Before proceeding further, check that everything works as before.
//Now modify the warmer method so that it will not allow the temperature to be set to a value larger than max.
//Similarly modify cooler so that it will not allow temperature to be set to a value less than min.
//Check that the class works properly. Now add a method, setIncrement that takes a single integer parameter and uses it to set the value of increment.
//Once again, test that the class works as you would expect it to, 
//by creating some Heater objects. Do things still work as expected if a negative value is passed to the setIncrement method?
//Add a check to this method to prevent a negative value from being assigned to increment.

class Heater {
    private $temperature, $min, $max, $increment;

    function __construct($min, $max)
    {
        $this->temperature = 15;
        $this->min = $min;
        $this->max = $max;
    }

    public function warmer() {
        if($this->increment <= $this->max) {
            $this->temperature += $this->increment;
        }
    }

    public function getWarmer() {
        return $this->temperature;
    }

    public function cooler() {
        if($this->temperature >= $this->min) {
            $this->temperature -= $this->increment;
        }
    }

    public function getCooler() {
        return $this->temperature;
    }

    public function setIncrement($increment)
    {
        if($increment > 0) {
            $this->increment = $increment;
        } else {
            echo "Increment value will not be negitive";
            die();
        }
    }
}

$heater =  new Heater(10,30);
$heater->setIncrement(6);
$heater->warmer();
echo $heater->getWarmer();
echo "</br>";
$heater->cooler();
echo $heater->getCooler();


?>