<?php
//Create a class called Employee that includes three pieces of information as instance
//variables—a first name, a last name, and a monthly salary.
//Your class should have a constructor that initializes the three instance variables.
//Provide a set and a get method for each instance variable.
//If the monthly salary is not positive, set it to 0.0.
//Create two Employee objects and display the yearly salary for each Employee.
//Then give each Employee a 10% raise and display each Employee’s yearly salary again.

class Employee
{
    private $first_name, $last_name, $monthly_salary;

    function __construct($first_name, $last_name, $monthly_salary)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        if($monthly_salary < 0) {
            $this->monthly_salary = 0;    
        } else {
            $this->monthly_salary = $monthly_salary;
        }
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setMonthlySalary($monthly_salary)
    {
        if($monthly_salary < 0) {
            $this->monthly_salary = 0;    
        } else {
            $this->monthly_salary = $monthly_salary;
        }
    }

    public function getMonthlySalary()
    {
        return $this->monthly_salary;
    }

    public function yearlySalary()
    {
        $yearly_increament = ($this->monthly_salary * 12)*0.1;
        return ($this->monthly_salary * 12)+$yearly_increament;
    }
}

$employee1 = new Employee('sajid', 'khan', 10000);
echo $employee1->yearlySalary();
echo "</br>";
$employee1 = new Employee('hamdan', 'khan', 15000);
echo $employee1->yearlySalary();
?>