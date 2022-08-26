<?php
//Create a class called Date that includes three pieces of information as instance variables—a month, a day, and a year.
//Your class should have a constructor that initializes the three instance variables and assumes that the values provided
//are correct. Provide a set and a get method for each instance variable.
//Provide a method displayDate that displays the month, day, and year separated by forward slashes (/).
//Write a test application named DateTest that demonstrates class Date’s capabilities.

class Date
{
    private $month, $day, $year;

    function __construct($month, $day, $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function setMonth($month)
    {
        $this->month = $month;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function setDay($day)
    {
        $this->day = $day;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function displayDate()
    {
        return $this->month."/".$this->day."/".$this->year;
    }
}

$date = new Date(8,26,2022);
echo $date->displayDate();

?>