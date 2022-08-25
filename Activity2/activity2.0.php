<?php
//Create a class, Heater that contains a single field, temperature.
//Define a constructor that takes no parameters. 
//The temperature field should be set to the value 15 in the constructor.
//Define the mutators warmer and cooler, whose effect is to increase or decrease the value of the temperature by 5.
//respectively. Define an accessor method to return the value of temperature.

class Heater {
    private $temperature;

    function __construct()
    {
        $this->temperature = 15;
    }

    public function warmer() {
        $this->temperature += 5;
    }

    public function getWarmer() {
        return $this->temperature;
    }

    public function cooler() {
        $this->temperature -= 5;
    }

    public function getCooler() {
        return $this->temperature;
    }
}

$heater = new Heater();
$heater->cooler();
echo $heater->getCooler();
echo "</br>";
$heater->warmer();
echo $heater->getWarmer();

?>