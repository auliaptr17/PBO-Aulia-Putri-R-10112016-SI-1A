<?php
class Employee{
    private $first_name;
    private $last_name;
    private $age;

    public function __construct($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$objEmployeeOne = new Employee('Bob', 'Smith', 30);

echo $objEmployeeOne->getFirstName() . "<br/>"; // prints 'Bob'
echo $objEmployeeOne->getLastName() . "<br/>"; // prints 'Smith'
echo $objEmployeeOne->getAge() . "<br/>"; // prints '30'

echo "<br/>"; 

$objEmployeeTwo = new Employee('John', 'Smith', 34);

echo $objEmployeeTwo->getFirstName() . "<br/>"; // prints 'John'
echo $objEmployeeTwo->getLastName() . "<br/>"; // prints 'Smith'
echo $objEmployeeTwo->getAge() . "<br/>"; // prints '34'
?>